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
 <script>
  $(document).ready(function() 
  {
   $('#item7').addClass('activo');
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
 <?php 
  require '../cms/wp-blog-header.php' 
 ?>
 
  <section id="news-content" class="size-center content medidas">
  
  <h2>NEWS</h2>
  
  <ul>

     <?php
	    $c = 0;	
        query_posts('category_name=News&order=DESC&posts_per_page=6');	
        while (have_posts()) : the_post();		 
      ?>     
       <li <?php if($c % 2 == 1) { ?>class="sinborder"<?php }?>>
          <a href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail('img-categoria'); ?>
           <div>
             <h3 class="efecto"><?php the_title();?></h3>
             <?php  //the_excerpt('[...]');  ?>
             <p><?php  the_excerpt_max_charlength(289);  ?></p>
             <span class="leer-mas efecto">read more</span>
           </div>
          </a>
       </li>
      <?php  
	  
	    $c++;
	   endwhile; 		
	  ?>
     <?php wp_reset_query(); ?>
       
<!--    <li>
      <a href="#">
       <img src="images/noticias/noticias1.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">LOREM IPSUM</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto">read more</span>
       </div>
      </a>
    </li>
    <li class="sinborder">
      <a href="#">
       <img src="images/noticias/noticias1.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">LOREM IPSUM</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto">read more</span>
       </div>
      </a>
    </li>
    <li>
      <a href="#">
       <img src="images/noticias/noticias2.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">LOREM IPSUM</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto">read more</span>
       </div>
      </a>
   </li>
   <li class="sinborder">
      <a href="#">
       <img src="images/noticias/noticias2.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">LOREM IPSUM</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto">read more</span>
       </div>
      </a>
   </li>
   <li>
      <a href="#">
       <img src="images/noticias/noticias3.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">LOREM IPSUM</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto">read more</span>
       </div>
      </a>
   </li>
   <li class="sinborder">
      <a href="#">
       <img src="images/noticias/noticias3.jpg" width="146" height="146" />
       <div>
         <h3 class="efecto">LOREM IPSUM</h3>
         <p>
           Dolor sit amet, consectetur adipiscing elit. Suspendisse sapien ante, fringilla id ullamcorper in, ornare eget lectus. Integer non metus semper massa fringilla fermentum. Aenean porttitor ullamcorper purus ut iaculis. Nam eu facilisis elit, sed aliquet felis. Nullam blandit elit massa, 
         </p>
         <span class="leer-mas efecto">read more</span>
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
