<?php

 $msj ="<strong class='ajuste'>¡Thank you very much!</strong><br /><strong>We have received your information correctly.</strong><br />";

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
<html lang="en"><!-- InstanceBegin template="/Templates/plantillaAquamarine.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">

<meta name="title" content="Aquamarine logistics services"> 
<meta name="autor" content="Aquamarine logistics services">
<meta name="description" lang="es"content="Aquamarine logistics services was created with the idea of satisfying our client’s needs through a trustworthy company with strong convictions and impeccable reputation, whereupon our clients could establish long-lasting and profitable relationships.">
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
	<script src="../js/html5.js"></script>
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
 <script type="application/javascript" src="js/email.js"></script>
 
 <script>
  $(document).ready(function() 
  {
   $('#item8').addClass('activo');
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
    <li class="sinborder"><a id="item1" href="corporative.html">CORPORATIVE</a></li>
    <li><a id="item2" href="fleet.html">Fleet</a></li>    
    <li><a id="item3" href="oil_rig_moves.html">OIL RIG MOVES</a></li>
    <li><a id="item4" href="flights.html">FLIGHTS</a></li>    
    <li><a id="item5" href="logistics.html">LOGISTICS</a></li>
    <li><a id="item6" href="shipping_agency.html">SHIPPING AGENCY</a></li>    
    <li><a id="item7" href="news.php">News</a></li> 
    <li><a id="item8" href="contact.php">Contact</a></li>     
  </ul>
  
   </header>
 <!-- InstanceBeginEditable name="contenido" -->
 
 <section id="contacto-content" class="size-center content medidas">
  
  <h2>CONTACT</h2>
  
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
     You can email us using the form below and we will gladly <br />answer your questions.
    </p>
  
    <div>  
     <label for="nombre">NAME</label>
     <input id="nombre" name="nombre" class="text" />
    </div>

    <div>  
     <label for="email">Email</label>
     <input id="email" name="email" class="text" />
    </div>

    <div>  
     <label for="mensaje">Message</label>
     <textarea id="mensaje" name="mensaje"></textarea>
    </div>
  
    <input type="button" name="enviar" id="enviar" class="efecto" value="Send now" />

   <div id="cargando">
    <img src="images/loading.gif" alt="Enviando..." />
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
     <li class="sinborder"><a id="item1-f" href="corporative.html">CORPORATIVE</a></li>
     <li><a id="item2-f" href="fleet.html">Fleet</a></li>    
     <li><a id="item3-f" href="oil_rig_moves.html">OIL RIG MOVES</a></li>
     <li><a id="item4-f" href="flights.html">FLIGHTS</a></li>    
     <li><a id="item5-f" href="logistics.html">LOGISTICS</a></li>
     <li><a id="item6-f" href="shipping_agency.html">SHIPPING AGENCY</a></li>    
     <li><a id="item7-f" href="news.php">News</a></li> 
     <li><a id="item8-f" href="contact.php">Contact</a></li>     
     <li><a id="item9-f" class="legal" href="legal.html">Privacy policy</a></li>    
    </ul>
  
    <a class="idioma" href="http://www.aquamarineinternational.com.mx/">En español</a>
	
    <script language="JavaScript" src="https://dunsregistered.dnb.com" type="text/javascript"></script>
   	<p id="creditos">&copy; 2015 Aquamarine Logistics Services. All Rights Reserved. Designed by <a href="http://www.gomultimedios.com/" target="_blank">GO multimedios</a></p>
  
  </div>
 
 </footer>


</body>
<!-- InstanceEnd --></html>
