<html>
<body>
	<head>
		<title>Inicio</title>
	</head>
	
	<body>
	<body bgcolor="#0099FF"> 
		<center/>Bienvenido al programa archivos XML/CSV/ZIP<br />
		Seleccione el documento <center/><br />
		<form method="POST" action="pantalla2_1.php">
		<center/>La informacion del documento esta encriptada?
			<select name="opcion1">
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
			<div id="FileUpload">
				<input type="file" size="24" name="path"/>
				<div id="BrowserVisible"></div>
			</div>	
			<br /><input type="submit" value="Continuar" />
		</form>
        <hr/>
		API<br/>
        Ingrese la direccion IP del archivo
        <form method="POST" action="pantalla2_2.php">
		<center/>Direccion IP
		<input type="text" name="path" /> <br />
        <center/>Nombre 
		<input type="text" name="elemento1" /> <br />	
         <center/>Contraseña
		<input type="text" name="elemento2" /> <br />	
		<?php
			require_once('recaptchalib.php');
			//Llaves de la captcha
			$captcha_publickey = "6Ldm0N4SAAAAAIB1bLiTu3nt3u8KsAu_HIthRujm";
			$captcha_privatekey = "6Ldm0N4SAAAAALOwwVwof6qC6Z7CTzBhKRejpqqQ";
			$error_captcha=null;

			if ($_POST){
			   $captcha_respuesta = recaptcha_check_answer ($captcha_privatekey,
			$_SERVER["REMOTE_ADDR"],
			$_POST["recaptcha_challenge_field"],
			$_POST["recaptcha_response_field"]);
			   if ($captcha_respuesta->is_valid) {
				  //todo correcto
				  //hacemos lo que se deba hacer una vez recibido el formulario válido
				  echo "Todo correcto!";
			   }else{
				  //El código de validación de la imagen está mal escrito.
				  echo "Has escrito mal el texto";
				  $error_captcha = $captcha_respuesta->error;
			   }
			}
			echo recaptcha_get_html($captcha_publickey, $error_captcha);
		?>
		
        <br /><input type="submit" value="Continuar" />
		</form>
		<hr/>
		WebService<br/>
        Ingrese la direccion IP del archivo
        <form method="POST" action="cliente.php">
		<center/>Direccion IP
		<input type="text" name="path" /> <br />
        <br /><input type="submit" value="Continuar" />
		</form>
	</body>
</html>






