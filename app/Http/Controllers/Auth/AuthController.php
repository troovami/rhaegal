<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Models\Modelo;
use App\Models\Pais;
use PHPMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
         $this->beforefilter('@menu',['only'=>['getRecuperar','postRecuperar']]);
    }
         public function menu(){
       $this->menu=Modelo::where('lng_idtipo_equipo','=',154 )->groupby('lng_idmarca')->get();
     }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'str_nombre' => 'required|max:255',
            'str_apellido' => 'required|max:255',
            'email' => 'required|email|max:255|unique:tbl_personas',
            'str_ididentificacion' =>'required|max:25|unique:tbl_personas',
            'name' =>'required|max:255|unique:tbl_personas',
            'lng_idpais' => 'required|max:255',
            'dmt_fecha_nacimiento' => 'required',
            'type_document' => 'required',
            'str_ididentificacion' => 'required|max:255',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $fecha=explode("/", $data['dmt_fecha_nacimiento']);
        $fechas=$fecha[2].'-'.$fecha[1].'-'.$fecha[0];
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'str_nombre' => $data['str_nombre'],
            'str_apellido' => $data['str_apellido'],
            'str_facebook' => $data['str_facebook'],
            'str_twitter' => $data['str_twitter'],
            'str_instagram' => $data['str_instagram'],
            'type_document' => $data['type_document'],
            'str_telefono' => $data['str_telefono'],
            'str_ididentificacion' => $data['str_ididentificacion'],
            'lng_idpais' => $data['lng_idpais'],
            'lng_idgenero' => $data['lng_idgenero'],
            'lng_idservicio' => 4,
            'dmt_fecha_nacimiento' => $fechas,
            'lng_idrol' => $data['lng_idrol'],
            'password' => ($data['password']),
        ]);
    }
    public function loginPath()
    {
        
        return route('marcas.index');
    }
    public function redirectPath()
    {
        

        return route('marcas.index');
    }
     public function getRecuperar()
    {
        $menu=$this->menu;
        return View ('auth.password',compact('menu'));
    }
    
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRecuperar(Request $request)
    {

        //Mi variable bandera para establecer si pasa o no a determinada vista:
        $flag = false;
 
            $user = User::where('email',$request->email)->first();
            //var_dump($user->id);
            //die();

        if (!empty($user)) {
            $flag = true;
                       
            $clave = $this->generarCodigo(8);
            
            $id = $user->id;
            
            $nombre = $user->str_nombre;
            
            $apellido = $user->str_apellido;
            
            //die($id);
            $user = User::find($id);
            $user->password = $clave;
            $user->save();

            $message = '<table>

    <tr>
      <td>
        <img src="autostars/images/banner-correo.png" alt="Logo">
  
      </td>   
    </tr>
    <tr>
      
      <td>
        <p>
          <b>*** POR FAVOR NO RESPONDA ESTE CORREO ***</b>
        </p>
        
        <p>
          <b>Este correo electronico ha sido enviado por troovami.com</b>
          <br><br>
          Estimada(o) '.ucfirst($nombre).' '.ucfirst($apellido).',
        </p>
                
      </td>
    </tr>   
    
    <tr>
      <td>
        <p>
          Usted solicitó recuperar la clave de su cuenta. A continuación su nueva clave de acceso:<br><br>
        
          <b>Clave: '.$clave.'</b><br>
                
                Para cambiar su clave, podra hacerlo en su panel de administración en la opción <b>Mi Cuenta</b> y luego en la opción <b>Clave</b>
                
        </p>
        <p>
          Por favor, conserve este mensaje para una futura referencia.<br>
          Muchas gracias,       
        </p>
        
        <p>
          El equipo de Troovami<br>
          www.troovami.com
        </p>
        
      </td>
    </tr>
    
  </table>';
            
            
            $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $cabeceras .= "Content-Type: image/png";
        $cabeceras .= 'To: <'.$request->email.'>' . "\r\n";   
        $cabeceras .= 'From: Troovami <troovami@gmail.com>' . "\r\n";

            if (!mail($request->email, 'Recuperar Clave - Troovami.com', $message, $cabeceras)) {
              //echo "Error: " . $mail->ErrorInfo;
              Session::flash('mensaje','Error!, el mensaje no se pudo enviar');
            } else {
              Session::flash('mensaje','Su clave fue enviada exitosamente a su dirección de correo electrónico');
            }


              
        }   

        if ($flag == false) {
            //echo "no existe";
            Session::flash('mensaje','La dirección de Correo Electrónico no se encuentra registrada en Troovami.com');
        }

        return Redirect::to('/Recuperar-Clave');  

    }
    
    
    public function generarCodigo($longitud) {
      $key = '';
      $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
      $max = strlen($pattern)-1;
      for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
      return $key;
    }

}
