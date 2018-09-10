<?php

 $msj ="<strong class='ajuste'>¡Muchas gracias! </strong><br /><strong>Hemos recibido tu información correctamente.</strong><br />";

 if(isset($_POST['nombre']))
 {
   $destino= "ventas@aquamarineinternational.com.mx";

   $nombre = $_POST["nombre"];
   $email = $_POST["email"];
   $mensaje = $_POST["mensaje"];
 
   $headers = "From: ".$nombre;
   $headers .= "<".$email.">\r\n";
   $headers .= "Reply-To: ".$email."\nContent-Type: text/html; charset=iso-8859-1"; 
	
   $message = "<p><b>Nombre:</b>".$nombre."</p><p><b>Email:</b> ".$email."</p><p><b>Mensaje: </b>".$mensaje."</p>";
	 
   mail($destino,"Correo de contacto - Aquamarine", $message, $headers);
 }

?>
<!doctype html>
<html lang="es"><!-- InstanceBegin template="/Templates/plantillaAquamarinespanish.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">

<meta name="title" content="Aquamarine logistics services"> 
<meta name="autor" content="Aquamarine logistics services">
<meta name="description" lang="es"content="Aquamarine logistics services es una empresa 100% mexicana que ofrece Servicios Integrales en Fletamento de Embarcaciones; así como Agencia Consignataria en Cabotaje, Altura y Servicio de Logística.">
<meta name="keywords" lang="es"content="Aquamarine logistics services, logistics, services">
<meta name="robots" content="index, follow">

<!-- InstanceBeginEditable name="doctitle" -->
<title>AQUAMARINE logistics services</title>
<!-- InstanceEndEditable -->
<link rel="shortcut icon" href="images/favicon.png" />

<link href="css/style.css" rel="stylesheet" type="text/css"/> 
<link href="css/bg-slideshow.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<!-- HTML 5 for older browsers -->
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
<![endif]-->

<script type="application/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="application/javascript" src="js/modernizr.custom.27950.js"></script>

 <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css" media="screen" />
 <script type="text/javascript" src="source/jquery.fancybox.js"></script>

 <script type="text/javascript">
  $(document).ready(function() 
  {
	$(".legal").fancybox({
		'width'				: 800,
		'height'			: 500,
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe'
	});
 });
</script>	

<!-- InstanceBeginEditable name="head" -->

 <script type="application/javascript" src="js/jquery-ui.js"></script>
 <script type="application/javascript" src="js/correo.js"></script>

 <script>
  $(document).ready(function() 
  {
   $('#item8-e').addClass('activo');
   $('#item8-f').addClass('activo');   

   cargamapa();
  })
 </script>
 
 <script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAPJBmO92U3wpblHIHlrGVhhTKbOC_0VvTxOpnRx5A8Bft7zg4cxRioPe-Qqsq5RO4OY2B3z7FQEibAg" type="text/javascript"></script>

 <script language="JavaScript" type="text/JavaScript">

    function cargamapa() {
      if (GBrowserIsCompatible()) {
	  
        var map = new GMap2(document.getElementById("mapa"));
        map.setCenter(new GLatLng(18.653586,-91.842272), 16);
        map.addControl(new GMapTypeControl());
        map.addControl(new GLargeMapControl());
        map.addControl(new GScaleControl());
        map.addControl(new GOverviewMapControl());
        		
        function addtag(point, address) {
        	var marker = new GMarker(point, markerOptions);
        	GEvent.addListener(marker, "click", function() {marker.openInfoWindowHtml(address);} );
        	return marker;
        }
		
		var blueIcon = new GIcon(G_DEFAULT_ICON);
        blueIcon.image = "images/mapa.png";
		blueIcon.iconSize = new GSize(70, 31);
		
		
		// Set up our GMarkerOptions object
		markerOptions = { icon:blueIcon };
		
        var point = new GLatLng(18.653586,-91.842272);
        var address = '<strong>Cd del Carmen, Campeche</strong><br/><i>Av. 4 oriente Lote 4 manzana D del Puerto<br />Industrial Laguna Azul C.P 24140.</i><br />';
        var marker = addtag(point, address);
		map.addOverlay(marker);
      }
    }
</script>
 
<!-- InstanceEndEditable -->
</head>

<body>

<div id="wrapper" class="size100-p">

<!-- InstanceBeginEditable name="fondo" -->
  <div id="fondo_contacto" class="size100-p fondo"></div>
<!-- InstanceEndEditable -->

<header class="size-center"> 
  <h1><span>AQUAMARINE logistics services</span><a href="index.html"></a></h1>
  
  <ul> 
    <li class="sinborder"><a id="item1-e" href="corporativo.html">CORPORATIVO</a>
     <ul>
       <li class="sinborder">
         <a href="bolsa_trabajo.html">BOLSA <br />DE TRABAJO</a>
       </li>
     </ul>
    </li>
    <li><a id="item2-e" href="flota.html">Flota</a></li>    
    <li><a id="item3-e" class="ajuste" href="movimiento_plataformas.html">MOVIMIENTO <br />DE PLATAFORMAS</a></li>
    <li><a id="item4-e" href="vuelos.html">VUELOS</a></li>    
    <li><a id="item5-e" href="logistica.html">LOGÍSTICA</a></li>
    <li><a id="item6-e" class="ajuste" href="agencia_consignataria.html">AGENCIA CONSIGNATARIA</a></li>    
    <li><a id="item7-e" href="noticias.php">Noticias</a></li>  
    <li><a id="item8-e" href="contacto.php">Contacto</a></li>      
  </ul>
  
</header>

<!-- InstanceBeginEditable name="contenido" -->

 <section id="contacto-content" class="size-center content medidas">
  
  <h2>CONTACTO</h2>
  
  <article id="contacto">

   <ul>
    <li id="telefono">
     <span>+</span> (52) <strong><span>938</span> 112 0008</strong>
    </li>
  
    <li id="direccion">     
     Avenida 4 Oriente, Manzana-2 Lote-4<br />
	 entre 4-Sur y 2-Sur Col. Puerto Pesquero.<br />
	 Cd. del Carmen, Camp, CP: 24129.
    </li>
  
    <li id="mail">
     <a href="mailto:ventas@aquamarineinternational.com.mx">ventas@aquamarineinternational.com.mx</a>
    </li>    
   </ul>
   
   <?php
    if(!isset($_POST['nombre']))
	{
   ?>
   
   <form name="form1" id="form-contact" method="post" action="">
    
    <p>
     Puede enviarnos un correo electrónico utilizando el siguiente formulario y con gusto responderemos a sus dudas.
    </p>
  
    <div>  
     <label for="nombre">Nombre</label>
     <input id="nombre" name="nombre" class="text" />
    </div>

    <div>  
     <label for="email">Email</label>
     <input id="email" name="email" class="text" />
    </div>

    <div>  
     <label for="mensaje">Mensaje</label>
     <textarea id="mensaje" name="mensaje"></textarea>
    </div>
  
    <input type="button" name="enviar" id="enviar" class="efecto" value="Enviar" />
  
   <div id="cargando">
    <img src="images/loading.gif" alt="Enviando..."  />
   </div>
   
   </form>
   <?php
	}
	else
	{
   ?>
   <p id="msj"><?php echo $msj; ?></p>
   <?php
	}
   ?>
  </article>
  
  <div id="mapa">
  
  </div>
 
 </section>
 
<!-- InstanceEndEditable -->

</div>
  
 <footer class="size100-p">
  
  <div id="footer-wrapper" class="size-center">
   <ul>
     <li class="sinborder"><a id="item1-f" href="corporativo.html">CORPORATIVO</a></li>
     <li><a id="item2-f" href="flota.html">Flota</a></li>    
     <li><a id="item3-f" class="ajuste" href="movimiento_plataformas.html">MOVIMIENTO <br />DE PLATAFORMAS</a></li>
     <li><a id="item4-f" href="vuelos.html">VUELOS</a></li>    
     <li><a id="item5-f" href="logistica.html">LOGÍSTICA</a></li>
     <li><a id="item6-f" class="ajuste" href="agencia_consignataria.html">AGENCIA CONSIGNATARIA</a></li>    
     <li><a id="item7-f" href="noticias.php">Noticias</a></li>  
     <li><a id="item8-f" href="contacto.php">Contacto</a></li>
     <li><a id="item9-f" class="ajuste legal" href="legal.html">POLÍTICA <br />DE PRIVACIDAD </a></li>     
   </ul>
  
   <a class="idioma ajuste" href="http://www.en.aquamarineinternational.com.mx/">ENGLISH VERSION</a>
   
   <script language="JavaScript" src="https://dunsregistered.dnb.com" type="text/javascript"></script>
   
   <p id="creditos" class="ajuste">&copy; 2015 Aquamarine Logistics Services. Todos los derechos reservados. Diseño y desarrollo por <a href="http://www.gomultimedios.com/" target="_blank">GO multimedios</a></p>
 
 </div>
</footer>
 
 
</body>
<!-- InstanceEnd --></html>
