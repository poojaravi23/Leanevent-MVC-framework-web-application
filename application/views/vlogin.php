<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html> 	
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/leanevent.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
		<title>  Iniciar sesión </title>

		
	</head>
	<body class="wrapper" >
		<span id="up"></span>
		

		<div>
			 <img class="banner" src="<?php echo base_url();?>/imagenes/bannerlogin.jpg"/>
			 <div class="centered2"> INICIAR SESIÓN</div>
			 <div class="inicio2"><span style="color: #FFC300;">INICIO</span> &nbsp  INICIAR SESIÓN</div>
			 
		</div>
		
			<div class="classform">
			
				<div class="row">
					<div class="contactform" style="margin-top: 80px;margin-left:70px;">
						<h3> Iniciar sesión</h3>

						<?php
						echo form_open('Login/validlogin');

						echo form_label('Nombre de Usario');
						echo '<span style="padding-left: 293px;">';
						echo '</span>';
						echo form_label('Contraseña');
						echo "<br>";

						echo form_input(array(
							'name' => 'email',
							'id' => 'email',
							 'class' => 'input_box',
							 'placeholder' => 'Nombre de Usario o Correo'
						));
						echo form_input(array(
						'name' => 'password',
						'id' => 'password',
						'class' => 'input_box',
						'placeholder' => 'Contraseña',
						'style'=> 'margin-left:15px;'
						));
						echo form_error('email');
						//echo '<span style="padding-left: 0px;">';
						echo form_error('password');
						//echo '</span>';
						
						?>

					    <br>
					    <br>
					    <a href="#forgotpassword" style="color: #FFC300; margin-left: 340px;margin-top: 100px; font-size: 80%;">Olvido su contraseña?</a>
					    <br>
					    <br>
						<?php echo form_submit(array(
						'name'=> 'submit',
						'id'=>'submit',
						'type'=>'submit',
						'value'=>'Entra',
						'style'=>'width:70px;margin-left:360px;'
						));
						echo form_close();

						?>
					    <!--<input type="submit" value="Entra" style="width:70px;margin-left:360px;">-->
                	</div>	
            	</div>
            </div>
      
			<div id="forgotpassword" class="overlay" style="text-align: left;">
					<div class="popup">
						<p style="padding:10px;">Recuperar su Contraseña</p>
						<hr color="#F0F0F0">
						<br>
						<label style="padding:10px;" for="fgtpwd">Correo</label><br>
						 <input style="width: 570px;margin-left :10px;align-content: center;" type="text" id="fgtpwd" name="fgtpwd" placeholder="Correo">
						<br>
						<br>
						<hr  color="#F0F0F0">
						<a href="#"> <input type="submit"value="Cerrar" style="margin-left: 410px;background-color:#D4D4D4;color: black; "></a>
						 <input type="submit" value="Enviar" style="margin-left: 10px;">
					</div>
		</div>
            	    
	</body>

	</html>