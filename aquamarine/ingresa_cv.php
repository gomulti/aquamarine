<?php

 $msj ="<strong class='ajuste'>¡Muchas gracias! </strong><br /><strong>Hemos recibido tu información correctamente.</strong><br /> En breve nos comunicaremos contigo.";
 $al="";
 
 if(isset($_POST['nombre']))
 { 

   $bHayFicheros = 0;
   $sCabeceraTexto = "";
   $sAdjuntos = "";
 
   $sCabeceras = "From: ".$_POST['nombre']."<".$_POST['email'].">\n";
   $sCabeceras .= "MIME-version: 1.0\n";

   $sTexto = $sTexto."\nNombre completo: ".$_POST['nombre']."\nEdad: ".$_POST['edad']."\nCiudad: ".$_POST['ciudad']."\nSexo: ".$_POST['sexo']."\n";   
   $sTexto .= "Estado: ".$_POST['estado']."\nTelefono: ".$_POST['tel']."\nCelular: ".$_POST['cel']."\nE-mail: ".$_POST['email']."\n";
   $sTexto .= "Puesto o vacante deseada: ".$_POST['puesto']."\nSueldo mensual deseado (MXN): ".$_POST['sueldo']."\n¿Tiene disponibilidad para viajar?: ".$_POST['viajar']."\nGrado academico: ".$_POST['grado']."\n";
   $sTexto .= "¿Tiene disponibilidad de horario?: ".$_POST['horario']."\nComentarios: ".$_POST['comentarios']."\n\nCV o solicitud de empleo:\n";
   
   foreach ($_FILES as $vAdjunto)
   {
    if ($bHayFicheros == 0)
    {
     $bHayFicheros = 1;
     $sCabeceras .= "Content-type: multipart/mixed;";
     $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";
     $sCabeceras .= "Reply-To: ".$_POST['email']." \r\n";
 
     $sCabeceraTexto = "----_Separador-de-mensajes_--\n";
     $sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n";
     $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";
 
     $sTexto = $sCabeceraTexto.$sTexto;
    }
 
    if ($vAdjunto["size"] > 0)
    {
     $sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
     $sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";;
     $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
     $sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";
 
     $oFichero = fopen($vAdjunto["tmp_name"], 'r');
     $sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"]));
     $sAdjuntos .= chunk_split(base64_encode($sContenido));
     fclose($oFichero);
    }
   }
 
   if ($bHayFicheros)
    $sTexto.= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";
   
    mail("recursoshumanos@aquamarineinternational.com.mx","Bolsa de trabajo - Aquamarine", $sTexto, $sCabeceras);
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

<script type="application/javascript" src="js/ingresa_cv.js"></script>

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
 <section id="vacantes-ofertas-content" class="size-center content medidas">
  
  <h2>BOLSA DE TRABAJO</h2>
  
  <h3>INGRESA TU CV</h3>
  <p>Con nuestra Bolsa de Trabajo buscamos crear un medio de enlace entre tus habilidades y experiencia con nuestras oportunidades laborales. Por eso te invitamos a enviarnos tus datos y nosotros nos comunicaremos contigo en cuanto haya un puesto que cubra tus habilidades.</p>
 
  <?php
    if(!isset($_POST['nombre']))
	{
  ?>
  <form name="form1" id="form-cv" method="post" action="" enctype="multipart/form-data">
   
   <table>
    <tr class="ajuste">
     <td colspan="2">
      <label for="nombre" class="ajuste">Nombre completo</label>
      <input type="text" name="nombre" id="nombre" />
      </td>
    </tr> 
    
    <tr class="sinmarg">
     <td width="200px">
      <label for="edad">Edad</label>
      <input type="number" name="edad" id="edad" maxlength="3" min="16" />
     </td>
     <td>
      <label for="ciudad">Ciudad</label>
      <input type="text" name="ciudad" id="ciudad" />
     </td>
    </tr> 
    
    <tr class="ajuste">
     <td width="200px">
      <label>Sexo</label>
      <input type="radio" name="sexo" id="hombre"  class="radio" value="Hombre" checked> <label for="hombre">Hombre</label>
      <input type="radio" name="sexo" id="mujer"  class="radio" value="Mujer"> <label for="mujer">Mujer</label>    
     </td>
     <td>  
      <label for="estado">Estado</label>
      <input type="text" name="estado" id="estado" /> 
     </td>
    </tr>
    
    <tr class="ajuste">
     <td width="200px">
      <label for="tel">Teléfono</label>
      <input type="text" name="tel" id="tel" min="7" /> 
     </td>
     <td>
      <label for="cel">Celular</label>
      <input type="text" name="cel" id="cel" min="10" />      
      </td>
    </tr>
    
    <tr class="ajuste">
     <td colspan="2" width="200px">
      <label id="txtmail" for="email">E-mail</label>
      <input type="email" name="email" id="email" />  
     </td>
    </tr>
    
    <tr class="ajuste">
      <td width="200px">
        <label for="puesto">Puesto o vacante deseada</label>
        <input type="text" name="puesto" id="puesto" />  
      </td>
      <td width="215px">
       <label for="sueldo">Sueldo mensual deseado (MXN)</label>
       <input type="text" name="sueldo" id="sueldo" /> 
      </td> 
    </tr>
    
    <tr class="ajuste">
     <td colspan="2" width="226px"> 
      <label>¿Tiene disponibilidad para viajar?</label>
      <input type="radio" name="viajar" id="viajar-si"  class="radio" value="Si" checked> <label for="viajar-si">Si</label>
      <input type="radio" name="viajar" id="viajar-no"  class="radio" value="No"> <label for="viajar-no">No</label> 
     </td>
    </tr>

    <tr>
     <td colspan="2" width="205px">    
      <label for="grado">Grado académico</label>
      <select name="grado" id="grado">
       <option value="">Selecciona tu grado de estudios</option>
       <option value="Primaria">Primaria</option>
       <option value="Secundaria">Secundaria</option>
       <option value="Preparatoria">Preparatoria</option>
       <option value="Carrera técnica">Carrera técnica</option>
       <option value="Universidad">Universidad</option>
       <option value="Posgrado">Posgrado</option>
      </select>
     </td>
   </tr>

    <tr class="ajuste">
     <td colspan="2" width="221px">   
      <label>¿Tiene disponibilidad de horario?</label>
      <input type="radio" name="horario" id="horario-si"  class="radio" value="Si" checked> <label for="horario-si">Si</label>
      <input type="radio" name="horario" id="horario-no"  class="radio" value="No"> <label for="horario-no">No</label> 
     </td>
   </tr>   

    <tr class="ajuste">
     <td colspan="2">  
      <label class="ajuste" for="comentarios">Comentarios</label>
      <textarea name="comentarios" id="comentarios"></textarea>
     </td>
   </tr>
   
   <tr class="ajuste">
    <td width="324px">
     <label for="adjunta-solicitud">Adjunta tu CV o solicitud de empleo</label>
     <input type="file" name="adjunta-solicitud" id="adjunta-solicitud" />
    </td>
    <td style="vertical-align: bottom;">
     <input type="button" name="enviar" id="enviar" class="efecto" value="Enviar" />
    </td>
   </tr>
  
  </table>
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
