<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html> 	
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/leanevent.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
		<title> INICIO </title>
	</head>
	<body class="wrapper" >
		<span id="up"></span>

		<div>
			 <img class="homebanner" src="<?php echo base_url(); ?>/imagenes/bannerlean2.jpg"/>
			 <img style="top:25%;"class="overlapban"src="<?php echo base_url(); ?>/imagenes/logo-blanco.png">
			 
		</div>

		<div class="classform" style="float:left; width:1500px;">
		<div class="row"> 
					
  			<div style="margin-top:15%;" class="text1">
  					<hr color="#FFC300" class="textrow" style="margin-left: 300px;">
  					<span style="font-size: 120%; color:black;padding-left:10px;">¿QUÉ HACEMOS?</span>
  					<hr COLOR="#FFC300" class="textrow" style="margin-left:10px; ">

			<p style="font-size: 70%;text-align: center;width: 33%;margin-left: 12%;">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros
				conciudadanos en Venezuela ante la grave escasez de medicinas e insumos médicos en que se
				encuentra el país. Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones en
				España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones se
				encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando a llevar
				asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro, dedicada a la defensa de
				los Derechos Humanos.	
			</p>
								
			</div>	
		</div>
	</div>

				<div class="rectangle" style="position: absolute;" >
					<div style="width:100%;padding-left: 20%;" class="row">
					 <div class="column" style="float: left;width: 25%;"> 478 <br>VOLUNTARIOS </div>
			         <div class="column"style="float: left;width: 25%;;"> 60.000 <br>PERSONAS BENEFICIADAS </div>
			         <div class="column" style="float: left;width: 20%;">45 <br>ALIADOS </div>
			        </div>	
			    </div>
				<div>
			 		<img class="bannerabout1" src="<?php echo base_url(); ?>/imagenes/bannerabout.jpg"/>
					<div style="position: absolute; top:990px; padding-left:23.5%;font-weight: bold;" > "La injusticia,en cualquier parte,es una amenaza a la justicia en todas partes."</div>
					<div style="position: absolute;top:1010px; padding-left:58%;font-size: 57%;font-style: italic;" >-Martin Luter King</div>
			 		<img class="bannerabout2" src="<?php echo base_url(); ?>/imagenes/bannerabout.jpg"/>
				</div>

				

  				<div class="sponsorslist">
						<div class="text1">
  							<hr color="FFC300" class="textrow" style="width
  							:6%;margin-left:0px;">
  							<span style="font-size: 110%; color:black;padding-left: 10px;">ALIADOS</span>
  							<hr color="#FFC300" class="textrow" style="width
  							:6%;margin-left:10px;">
						</div>	
  				<br>
  				<br>
  				<section class="sponsorslist1" style="border:solid 0px #F0F0F0;">
						<section id="l1" style="border:solid 0px #F0F0F0;">
  					<section style="width:25%;border:solid 0px #F0F0F0; " class="column">
  						<img class="sponslogo" src="<?php echo base_url(); ?>/imagenes/logo1.PNG"/>
  					</section>
  					<section style="width: 25%;border:solid 0px #F0F0F0; "class="column">
  						<img class="sponslogo" src="<?php echo base_url(); ?>/imagenes/logo2.PNG"/>
  					</section>
  					<section style="width: 25%;border:solid 0px #F0F0F0; "class="column">
  						<img class="sponslogo" src="<?php echo base_url(); ?>/imagenes/logo3.PNG"/>
  					</section>
  					<section style="width: 25%; border:solid 0px #F0F0F0; "class="column">
  						<img class="sponslogo" src="<?php echo base_url(); ?>/imagenes/logo4.PNG"/>
  					</section>
			 			</section>

			 			<section id="l2" style="border:solid 0px #F0F0F0;">
			 				<section style="width: 25%;border:solid 0px #F0F0F0; " class="column">
  						<img class="sponslogo1" src="<?php echo base_url(); ?>/imagenes/logo5.PNG"/>
  					</section>
  					<section style="width: 25%;border:solid 0px #F0F0F0; "class="column">
  						<img class="sponslogo1" src="<?php echo base_url(); ?>/imagenes/logo6.PNG"/>
  					</section>
  					<section style="width: 25%;border:solid 0px #F0F0F0; "class="column">
  						<img class="sponslogo1" src="<?php echo base_url(); ?>/imagenes/logo7.PNG"/>
  					</section>
  					<section style="width: 25%; border:solid 0px #F0F0F0; "class="column">
  						<img class="sponslogo1" src="<?php echo base_url(); ?>/imagenes/logo8.PNG"/>
  					</section>
  					<section style="width: 25%; border:solid 0px #F0F0F0; "class="column">
			 			</section>

					</section>
						<div  class="pagenav">
						<ul style="float: left;">
					    			    
					    <li ><a style="background-color:#F0F0F0;padding:1%;"href="#l2">&#62;</a></li> 
					    <li ><a style="background-color:#F0F0F0;padding:1%;"href="#l1">&#60;</a></li>
  					
  						</ul>

  						</div>
  				</div>


</div>
</div>
						
				<div class="rectangle" style="margin:0%;float:left;padding-left:25%;top:180%" >
					 <p style="float: left;"> <i class='far fa-paper-plane'> </i>Registrese para recibir un <br>boletin</p>

  					<?php
	                    echo form_open('home/mailsent');
        
	                    $data_email = array(
	                        'name' => 'subscribe',
	                        'id' => 'subscribe',
	                        'class' => 'input_box',
	                        'placeholder' => 'Introduce tu correo electrónico'
	                    );
	                    echo form_input($data_email);
	                    echo form_submit('submit', 'Suscribir', "class='submit'");
	                    echo form_close();
	                ?>
					
				</div>
			
		
	</body>
	
</html>
