  $(document).ready(function() 
 { 	
   $("#enviar").click(function()
   {
     
     if(validar_campo("#nombre",10))
      if(validar_campo("#email",6))
	    if((/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test($("#email").val())))
		{
 		 if(validar_campo("#mensaje",10))	
		 {
			$("#cargando").css({display: "block"});
					
		    $('#form-contact')[0].submit();
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