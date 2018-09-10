 $(document).ready(function() 
 { 	
   $("#enviar").click(function()
   {
     
     if(validar_campo("#nombre",10))
	  if(validar_numero("#edad",2))
	   if(validar_campo("#ciudad",3))
 	    if(validar_campo("#estado",3)) 
		  if(validar_numero("#tel",7)) 
		   if(validar_numero("#cel",9)) 
		    if(validar_campo("#email",6))
	 	     if((/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test($("#email").val())))
		     {
			  if(validar_campo("#puesto",5))
			   if(validar_campo("#sueldo",3))
			    if(validar_campo("#grado",3))
				 if(validar_campo("#comentarios",10))	
				  if(validar_campo("#adjunta-solicitud",2))	
				  {
					$("#cargando").css({display: "block"});
				    $('#form-cv')[0].submit();				
				  }
		     } 
		     else
		     {
			  $("#email").effect('pulsate', { times:2 }, 1000);		
		      $("#email").focus();   
		     }
   })
 });

/**************************************************************/

 function validar_campo(campo,cant_num)
 { 
  var ban = true;
  
     if(/^\s+$/.test($(campo).val()) || $(campo).val().length < cant_num)
	  {
		$(campo).effect('pulsate', { times:2 }, 1000);		
		$(campo).focus();
		ban = false;		
	  }
  return ban;
 }

 function validar_numero(campo,cant_num)
 { 
  var ban = true;
  
     if($(campo).val().length < cant_num || isNaN($(campo).val()))
	  {
		$(campo).effect('pulsate', { times:2 }, 1000);		
		$(campo).focus();
		ban = false;		
	  }
  return ban;
 } 