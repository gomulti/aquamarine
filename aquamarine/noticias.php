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
   $('#item7-e').addClass('activo');
   $('#item7-f').addClass('activo');   
  })
 </script>
<!-- InstanceEndEditable -->
</head>

<body>

<div id="wrapper" class="size100-p">

<!-- InstanceBeginEditable name="fondo" -->
 <div id="fondo_news" class="size100-p fondo"></div>
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

 <section id="news-content" class="size-center content medidas">
  
  <h2>Noticias</h2>
  
  <ul>

     <?php
	    $c = 0;	
        query_posts('category_name=Noticias&order=DESC&posts_per_page=6');	
        while (have_posts()) : the_post();		 
      ?>     
       <li <?php if($c % 2 == 1) { ?>class="sinborder"<?php }?>>
          <a href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail('img-categoria'); ?>
           <div>
             <h3 class="efecto"><?php the_title();?></h3>
             <?php  //the_excerpt('[...]');  ?>
             <p><?php  the_excerpt_max_charlength(289);  ?></p>
             <span class="leer-mas efecto ajuste">LEER M&Aacute;S</span>
           </div>
          </a>
       </li>
      <?php  
	  
	    $c++;
	   endwhile; 		
	  ?>
     <?php wp_reset_query(); ?>
<!--       
    <li>
      <a href="#">
       <img src="../images/noticias/noticias1.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">TEXTO DE AHÍ NOMÁS</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto ajuste">LEER M&Aacute;S</span>
       </div>
      </a>
    </li>
    <li class="sinborder">
      <a href="#">
       <img src="../images/noticias/noticias1.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">TEXTO DE AHÍ NOMÁS</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto ajuste">LEER M&Aacute;S</span>
       </div>
      </a>
    </li>
    <li>
      <a href="#">
       <img src="../images/noticias/noticias2.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">TEXTO DE AHÍ NOMÁS</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto ajuste">LEER M&Aacute;S</span>
       </div>
      </a>
   </li>
   <li class="sinborder">
      <a href="#">
       <img src="../images/noticias/noticias2.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">TEXTO DE AHÍ NOMÁS</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto ajuste">LEER M&Aacute;S</span>
       </div>
      </a>
   </li>
   <li>
      <a href="#">
       <img src="../images/noticias/noticias3.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">TEXTO DE AHÍ NOMÁS</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto ajuste">LEER M&Aacute;S</span>
       </div>
      </a>
   </li>
   <li class="sinborder">
      <a href="#">
       <img src="../images/noticias/noticias3.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">TEXTO DE AHÍ NOMÁS</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto ajuste">LEER M&Aacute;S</span>
       </div>
      </a>
   </li>-->
  </ul>
  
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
