<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html> 	
<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/leanevent.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
		<title> Contacto </title>
		
	</head>

	<body class="wrapper">
		<span id="up"></span>

		<div>
			<img class="banner" src="<?php echo base_url(); ?>/imagenes/bannercontacto.jpg">
			 <div class="centered1">CONTACTO</div>
			 <div class="inicio1"><span style="color: #FFC300;">INICIO</span> &nbsp CONTACTO</div>
			 
		</div>

		<div class="classform">
			
			<div class="row">
				<h1> Información del contacto</h1>
				<div class="column"> <i class='fas fa-map-marker-alt'> </i>198 West 21th Street<br> Suit 721 New York NY 10016  </div>
				<div class="column"> <i class='fas fa-phone'></i>+1235 2355 98 </div>
				<div class="column"><i class='far fa-paper-plane'> </i>info@diazapps.com  </div>
				<div class="column"> <img src="https://img.icons8.com/ios-glyphs/30/000000/globe-earth.png" width="7%">&nbsp&nbspdiazapp.com </div>
			</div>
			<div class="row">
				<h2>LEAN en las redes sociales</h2>
				<div class="column"> <img class="one" src="<?php echo base_url(); ?>/imagenes/facebook.png"> <p class="two"> Lean Ayuda Humanitaria</p> </div>
				<div class="column"> <img class="one" src="<?php echo base_url(); ?>/imagenes/twitter.png"> <p class="two"> @LeanEmergente</p> </div>
				<div class="column"> <img class="one" src="<?php echo base_url(); ?>/imagenes/instagram.png"> <p class="two">  @LeanAyudaHumanitaria</p> </div>
				<div class="column"> <img class="one" src="<?php echo base_url(); ?>/imagenes/correo.png"> <p class="two"> lean.emergente@gmail.com</p> </div>
			</div>
			
	<div class="row">
		<div class="contactform">
			<h3>Estar en contacto</h3>
	
            <?php
            echo form_open('Contact/validcontact');

            echo form_label('Nombre');
            echo '<span style="padding-left: 348px;">';
            echo '</span>';
            echo form_label('Apellido');
            echo "<br>";
            
            echo form_input(array('name' => 'fname','id' => 'fname', 'class' => 'input_box','placeholder' => 'Tu Nombre'
            ));
           echo form_input(array(
                'name' => 'lname',
                'id' => 'lname',
                'class' => 'input_box',
                'placeholder' => 'Tu Apellido',
                'style'=> 'margin-left:10px;'
            ));
           	echo form_error('fname');
            echo form_error('lname');
			echo "<br>";
            echo "<br>";
               
            echo form_label('Correo');
               echo "<br>";
            
            echo form_input(array(
                'name' => 'email',
                'id' => 'email',
                'class' => 'input_box',
                'placeholder' => 'Tu correo electranico',
                'style'=>'width: 97.6%;'
            ));
            echo form_error('email');
            
            echo "<br>";
            echo "<br>";

            echo form_label('Tema');
            echo "<br>";
            echo form_input(array(
                'name' => 'topic',
                'id' => 'topic',
                'class' => 'input_box',
                'placeholder' => 'Su asunto de este mensaje',
                'style'=>'width: 97.6%;'
            ));
            echo form_error('topic');
            
            echo "<br>";
            echo "<br>";

             echo form_label('Mensage');
             echo "<br>";
            echo form_textarea(array(
                'name' => 'message',
                'id' => 'message',
                'class' => 'input_box',
                'placeholder' => 'Di algo sobre nosotros',
                'style'=>'width: 97.6%;',
                'rows'=>10
            ));
             echo form_error('message');
            
            echo "<br>";
            echo "<br>";

            echo form_submit(array(
            	'name'=> 'submit',
            	'id'=>'submit',
            	'value'=>'Enviar mensaje'
            ));
            echo form_close();

            ?>
   
        	</div>
       
        </div>
        </div>	
    
	</body>
	</html>