var divname;

var divname_fav;

var divname_fav_eliminar;

var divname_fav_4;
var divname_fav_eliminar_4;

var input_idpub;
var http_fav_eliminar = getXmlHttpObject();
var http_fav = getXmlHttpObject();



function fav(id){

        //alert('add fav');
       input_idpub = id;
        
        divname_fav = "fav_pub"+id;   
        http_fav.open("GET", '/Favoritos/'+id, true);
        http_fav.onreadystatechange = handleHttpResponse_fav;
        http_fav.send(null);
 
}

function handleHttpResponse_fav()
{
	if (http_fav.readyState == 4)
    {  
        results = http_fav.responseText;
        
       id = input_idpub;

        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_fav).innerHTML = '   <a class="btn btn-default add-wishlist" href="#" onclick="fav_eliminar('+id+')" data-item-id="'+id+'" title="Quitar de favoritos" data-toggle="tooltip"><i style="color: red" class="fa fa-heart nopadding"></i></a>';                                 
    }
}

function handleHttpResponse_fav_eliminar()
{
	if (http_fav_eliminar.readyState == 4)
    {  
        results = http_fav_eliminar.responseText;
      // id = document.getElementById(input_idpub).value;
       //id=jQuery(this).attr('data-item-id')
       id=input_idpub;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_fav_eliminar).innerHTML = '<a class="btn btn-default add-wishlist" href="#" onclick="fav('+id+')" title="Añadir a favoritos" data-item-id="'+id+'" data-toggle="tooltip"><i class="fa fa-heart nopadding"></i></a>';                                 
    }
}


	
	function fav_eliminar(id){

		//alert('del fav');
		input_idpub = id;
		
	    divname_fav_eliminar = "fav_pub"+id;	  
	    http_fav_eliminar.open("GET", '/Favoritos/'+id, true);
	    http_fav_eliminar.onreadystatechange = handleHttpResponse_fav_eliminar;
        http_fav_eliminar.send(null);
	   
 
	}

	
	

	function getXmlHttpObject()
{
    var xmlhttp;
    /*@cc_on
     @if (@_jscript_version >= 5)
     try
     {
     xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
     }
     catch (e)
     {
     try
     {
     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
     }
     catch (e)
     {
     xmlhttp = false;
     }
     }
     @else
     xmlhttp = false;
     @end @*/

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
    {
        try
        {
            xmlhttp = new XMLHttpRequest();
        }
        catch (e)
        {
            xmlhttp = false;
        }
    }
    return xmlhttp;
}

	
	
	
	
	
