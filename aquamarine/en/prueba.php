<?php

$al="";

function form_mail($sAsunto, $sTexto, $sDe)
{
  $bHayFicheros = 0;
  $sCabeceraTexto = "";
  $sAdjuntos = "";
 
  $sCabeceras = "From: Bolsa de trabajo - Aquamarine\n";
  $sCabeceras .= "MIME-version: 1.0\n";
 
  foreach ($_POST as $sNombre => $sValor)
   $sTexto = $sTexto."\n".$sNombre." = ".$sValor;
 
foreach ($_FILES as $vAdjunto)
{
 if ($bHayFicheros == 0)
 {
  $bHayFicheros = 1;
  $sCabeceras .= "Content-type: multipart/mixed;";
  $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";
  $sCabeceras .= "Reply-To: $sDe \r\n";
 
  $sCabeceraTexto = "----_Separador-de-mensajes_--\n";
  $sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n";
  $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";
 
  $sTexto = $sCabeceraTexto.$sTexto;
  
  $al="lllllllll";
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
  
  $al.="ppppppppp";
 }
}
 
  if ($bHayFicheros)
    $sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";
  return(mail("juanantonio.martinez2003@gmail.com",$sAsunto, $sTexto, $sCabeceras));
}
 
//cambiar aqui el email
if(isset($_POST['Nombre']))
if (form_mail("poner_email@deDestino.com", $_POST[asunto],
"Los datos introducidos en el formulario son:\n\n", $_POST[email]))
echo "Su formulario ha sido enviado con exito";
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<form name='formulario' id='formulario' method='post' action='' enctype="multipart/form-data">
<p>Nombre <input type='text' name='Nombre' id='Nombre'></p>
<p>E-mail
<input type='text' name='email' id='email'>
</p>
<p>Asunto
<input type='text' name='asunto' id='asunto' />
</p>
<p>Mensaje
<textarea name="mensaje" cols="50" rows="10" id="mensaje"></textarea>
</p>
<p>Adjuntar archivo: <input type='file' name='archivo1' id='archivo1'></p>
<p>
<input type='submit' value='Enviar'>
</p>
</form>

</body>
</html>