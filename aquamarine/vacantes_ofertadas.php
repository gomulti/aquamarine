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
 <script>
  $(document).ready(function() 
  {
   $('header ul ul').addClass('activo');
  })
 </script>
<!-- InstanceEndEditable -->
</head>

<body>

<div id="wrapper" class="size100-p">

<!-- InstanceBeginEditable name="fondo" --> 
 <div id="fondo_vacantes" class="size100-p fondo"></div>
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

 <?php 
  require 'cms/wp-blog-header.php' 
 ?>
 
 <section id="vacantes-ofertas-content" class="size-center content medidas">
  
  <h2>BOLSA DE TRABAJO</h2>
  
  <h3>VACANTES OFERTADAS</h3>
  <p>Siempre estamos en busca de nuevos talentos para sumarse a nuestro equipo. 
   Revisa aquí cuáles son las vacantes que tenemos actualmente, para saber si hay alguna que se apega a tu perfil. </p>
  
  <table>
  
  <?php
    query_posts('category_name=bolsa-de-trabajo&order=ASC');	
    while (have_posts()) : the_post();		 
  ?>                  
   <tr>
     <td class="titulo">Vacante:</td>
     <td><?php the_title();?></td>  
   </tr>
   <tr>
     <td class="titulo">Zona:</td>
     <td><?php echo get_post_meta($post->ID, 'Zona', true); ?></td>  
   </tr>
   <tr>
     <td class="titulo">Requisitos:</td>
     <td><?php the_content('[...]'); ?></td>  
   </tr>
   
  <?php  
	endwhile; 		
  ?>
  <?php wp_reset_query(); ?>
     
  <!-- <tr>
     <td class="titulo">Vacante:</td>
     <td>Supervisor de calidad</td>  
   </tr>
   <tr>
     <td class="titulo">Zona:</td>
     <td>Tabasco</td>  
   </tr>
   <tr>
     <td class="titulo">Requisitos:</td>
     <td>Ingeniero, sexo indistinto, edad entre 26 y 35 años, con experiencia en supervisión o auditoría operativa.  Licencia para conducir.. Buena redacción y ortografía para hacer reportes. Manejo de excel, power point.</td>  
   </tr>

   <tr>
     <td class="titulo">Vacante:</td>
     <td>Supervisor de calidad</td>  
   </tr>
   <tr>
     <td class="titulo">Zona:</td>
     <td>Tabasco</td>  
   </tr>
   <tr>
     <td class="titulo">Requisitos:</td>
     <td>Ingeniero, sexo indistinto, edad entre 26 y 35 años, con experiencia en supervisión o auditoría operativa.  Licencia para conducir.. Buena redacción y ortografía para hacer reportes. Manejo de excel, power point.</td>  
   </tr>

   <tr>
     <td class="titulo">Vacante:</td>
     <td>Supervisor de calidad</td>  
   </tr>
   <tr>
     <td class="titulo">Zona:</td>
     <td>Tabasco</td>  
   </tr>
   <tr>
     <td class="titulo">Requisitos:</td>
     <td>Ingeniero, sexo indistinto, edad entre 26 y 35 años, con experiencia en supervisión o auditoría operativa.  Licencia para conducir.. Buena redacción y ortografía para hacer reportes. Manejo de excel, power point.</td>  
   </tr>

   <tr>
     <td class="titulo">Vacante:</td>
     <td>Supervisor de calidad</td>  
   </tr>
   <tr>
     <td class="titulo">Zona:</td>
     <td>Tabasco</td>  
   </tr>
   <tr>
     <td class="titulo">Requisitos:</td>
     <td>Ingeniero, sexo indistinto, edad entre 26 y 35 años, con experiencia en supervisión o auditoría operativa.  Licencia para conducir.. Buena redacción y ortografía para hacer reportes. Manejo de excel, power point.</td>  
   </tr>

   <tr>
     <td class="titulo">Vacante:</td>
     <td>Supervisor de calidad</td>  
   </tr>
   <tr>
     <td class="titulo">Zona:</td>
     <td>Tabasco</td>  
   </tr>
   <tr>
     <td class="titulo">Requisitos:</td>
     <td>Ingeniero, sexo indistinto, edad entre 26 y 35 años, con experiencia en supervisión o auditoría operativa.  Licencia para conducir.. Buena redacción y ortografía para hacer reportes. Manejo de excel, power point.</td>  
   </tr>-->
      
  </table>
  

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
