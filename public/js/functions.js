$(document).ready(function() 
{ 
    /** 
    *@desc- retrasa el evento keyup 
    *@param fn - function 
    *@param ms - milisegundos que queremos retrasar 
    */ 
    $.fn.delayPasteKeyUp = function(fn, ms) 
    { 
        var timer = 0; 
        $(this).on("keyup paste", function() 
        { 
            clearTimeout(timer); 
            timer = setTimeout(fn, ms); 
        }); 
    }; 
  
     $("input[name=autocomplete]").keyup(function() 
    { 
    var token=$('#token').val(); 
 
       $.ajax({
                type: 'POST',
                url: "/autocomplet",//aqui tu ruta
                dataType: 'json',//
                data: "autocomplete="+$("input[name=autocomplete]").val(),
                headers:{'X-CSRF-TOKEN': token},
            })
            .done(function(data) {
            if(data)
                {
                      
               var v1= $("#id1").val(); 
               var v2= $("#id2").val();
               var v3= $("#id3").val();
        if(data)
                {
                    html = '<div class="list-group">';
                    if(data.length>0)
                    {
                        for(datos in data)
                        {
                            html+='<a href="/Comparacion/'+data[datos].id +'/'+v2+'/'+v3+'" class="list-group-item" align="left">';
                            html+='<div class="row"><div class="col-md-3"> <img src="/img/modelo_3.jpg"  height="60px" width="40"></div><div class="col-md-9"> <span style="font-size:12;" align="center"> ' + data[datos].str_modelo;
                            html+='</span></div></div></a>';
                        }
                    }
                    else
                    {
                        html+='<a href="#" class="list-group-item">';
                         html+='<span style="font-size:12;">No se han encontrado resultado </span>';
                        html+='</a>';
                    }
                    html+='</div>';
                    $("#busqueda").html("").append(html);
                }
                }
            })
            .fail(function(data) {
               console.log(data);
            }); 
    }); 
 
    $(document).on("click", "a", function() 
    { 
        $("a").removeClass("active"); 
        $(this).addClass("active"); 
    }) 
}); 
$(document).ready(function() 
{ 
    /** 
    *@desc- retrasa el evento keyup 
    *@param fn - function 
    *@param ms - milisegundos que queremos retrasar 
    */ 
    $.fn.delayPasteKeyUp = function(fn, ms) 
    { 
        var timer = 0; 
        $(this).on("keyup paste", function() 
        { 
            clearTimeout(timer); 
            timer = setTimeout(fn, ms); 
        }); 
    }; 
  
     $("input[name=autocompletar]").keyup(function() 
    { 
    var token=$('#token').val(); 
 
       $.ajax({
                type: 'POST',
                url: "/autocomplet",//aqui tu ruta
                dataType: 'json',//
                data: "autocomplete="+$("input[name=autocompletar]").val(),
                headers:{'X-CSRF-TOKEN': token},
            })
      // console.log(data);
            .done(function(data) {
            if(data)
                {
                      
                    var v1= $("#id1").val(); 
               var v2= $("#id2").val();
               var v3= $("#id3").val();
        if(data)
                {
                    html = '<div class="list-group">';
                    if(data.length>0)
                    {
                        for(datos in data)
                        {
                            html+='<a href="/Comparacion/'+v1 +'/'+data[datos].id+'/'+v3+'" class="list-group-item" align="left">';
                            html+='<div class="row"><div class="col-md-3"> <img src="/img/modelo_3.jpg"  height="60px" width="40"></div><div class="col-md-9"> <span style="font-size:12;" align="center"> ' + data[datos].str_modelo;
                            html+='</span></div></div></a>';
                        }
                    }
                    else
                    {
                        html+='<a href="#" class="list-group-item">';
                         html+='<span style="font-size:12;">No se han encontrado resultado </span>';
                        html+='</a>';
                    }
                    html+='</div>';
                    $("#busquedas").html("").append(html);
                }
                }
            })
            .fail(function(data) {
               console.log(data);
            }); 
    }); 
 
    $(document).on("click", "a", function() 
    { 
        $("a").removeClass("active"); 
        $(this).addClass("active"); 
    }) 
}); 
$(document).ready(function() 
{ 
    /** 
    *@desc- retrasa el evento keyup 
    *@param fn - function 
    *@param ms - milisegundos que queremos retrasar 
    */ 
    $.fn.delayPasteKeyUp = function(fn, ms) 
    { 
        var timer = 0; 
        $(this).on("keyup paste", function() 
        { 
            clearTimeout(timer); 
            timer = setTimeout(fn, ms); 
        }); 
    }; 
  
     $("input[name=autocompletado]").keyup(function() 
    { 
    var token=$('#token').val(); 
 
       $.ajax({
                type: 'POST',
                url: "/autocomplet",//aqui tu ruta
                dataType: 'json',//
                data: "autocomplete="+$("input[name=autocompletado]").val(),
                headers:{'X-CSRF-TOKEN': token},
            })
            .done(function(data) {
            if(data)
                {
                      
                    var v1= $("#id1").val(); 
               var v2= $("#id2").val();
               var v3= $("#id3").val();
        if(data)
                {
                    html = '<div class="list-group">';
                   if(data.length>0)
                    {
                        for(datos in data)
                        {
                            html+='<a href="/Comparacion/'+v1 +'/'+v2+'/'+data[datos].id+'" class="list-group-item" align="left">';
                             html+='<div class="row"><div class="col-md-3"> <img src="/img/modelo_3.jpg"  height="60px" width="40"></div><div class="col-md-9"> <span style="font-size:12;" align="center"> ' + data[datos].str_modelo;
                            html+='</span></div></div></a>';
                        }
                     
                    }
                    else
                    {
                        html+='<a href="#" class="list-group-item">';
                        html+='<span style="font-size:12;">No se han encontrado resultado </span>';
                        html+='</a>';
                    }
                    html+='</div>';
                    $("#busqued").html("").append(html);
                }
                }
            })
            .fail(function(data) {
               console.log(data);
            }); 
    }); 
 
    $(document).on("click", "a", function() 
    { 
        $("a").removeClass("active"); 
        $(this).addClass("active"); 
    }) 
}); 

///////////////////////////////////////Validar numero////////////////////////////////////////////////
function validarNu(e)
{
    tecla_codigo = (document.all) ? e.keyCode : e.which;
    //alert(tecla_codigo);  
    if(tecla_codigo==8 || tecla_codigo==0)return true;// || tecla_codigo==37 || tecla_codigo==39
    patron =/[0-9]/;
    tecla_valor = String.fromCharCode(tecla_codigo);
    return patron.test(tecla_valor);
}
////////////////////////////////funciones redirecciona////////////////////////////////
function myFunction() {
   var variable=document.getElementById("combo").value;
   location.href = "/moviles/"+variable;
}
function ordenar() {
   var variable=document.getElementById("ordenar").value;
   location.href = "/precio/"+variable;
}
function ordenar_resultado() {
   var variable=document.getElementById("combo").value;
   location.href = variable;
}
////////////////////////////////Validar letra/////////////////////////////////////////
function validarLe(e)
{
    tecla_codigo = (document.all) ? e.keyCode : e.which;
    if(tecla_codigo==8 || tecla_codigo==0)return true;
    patron =/[a-zA-ZñÑ]/;
    tecla_valor = String.fromCharCode(tecla_codigo);
    return patron.test(tecla_valor);
}
/////////////seleccionar todo

  $('#select-all').click(function() {
    if ($(this).is(':checked')) {
        $('div input').prop('checked', true);
         $("#botn").removeAttr('disabled');
    } else {
        $('div input').prop('checked', false);
         $("#botn").attr('disabled','disabled');
    }
});
///////////////////combo dependientes/////////////
   $("#marca").change(function () {
    var token=$('#token').val(); 
       $.ajax({
                type: 'POST',
                url: "/dep_modelo",//aqui tu ruta
                dataType: 'json',//
                data: "elegido="+$(this).val(),
                headers:{'X-CSRF-TOKEN': token},
            })
            .done(function(data) {
                 html = '<select class="form-control" id="modelos" required="required">';
                 html+='<option>Seleccione</option>'; 
                for(datos in data)
                    {
                        html+='<option value="'+data[datos].id+'" name="lng_idmodelo">'+data[datos].str_modelo+'</option>';
                    }
                    html+='</select>';
                    $("#modelo").html("").append(html);
            })
            .fail(function(data) {
               console.log(data);
            }); 
    }); 
   ///////////////////combo dependientes/////////////
   $("#modelo, #modelos").change(function () {
    var token=$('#token').val(); 
       $.ajax({
                type: 'POST',
                url: "/dep_version",//aqui tu ruta
                dataType: 'json',//
                data: "elegir="+ $('select[id=modelos]').val(),
                headers:{'X-CSRF-TOKEN': token},
            })
            .done(function(data) {

                 html = '<select class="form-control" id="version" name="lng_idversion_modelo" required="required">';
                for(datos in data)
                    {
                        html+='<option value="'+data[datos].id+'" name="lng_idversion_modelo">'+data[datos].str_version+'</option>';
                    }
                    html+='</select>';
                    $("#version").html("").append(html);
            })
            .fail(function(data) {
               console.log(data);
            }); 
    }); 