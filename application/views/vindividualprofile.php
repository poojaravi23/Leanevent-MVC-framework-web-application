<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html> 	
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/leanevent.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
		<title> Individual Perfil </title>

	</head>
	<body class="wrapper">
		<span id="up"></span>
		<div>
			<img class="banner" src="<?php echo base_url();?>/imagenes/bannercontacto.jpg">
			 <div style="padding-left:60px;"class="centered1">PERFIL</div>
			 <div class="inicio1"><span style="color: #FFC300;padding-left:50px;">INICIO</span> &nbsp PERFIL</div>
			 
		</div>

		<?php echo form_open('Homeindividual/validindprofile');
		foreach ($individualprofile->result() as $row)
        		{  
		?>

		<div  class="classform">
			<div class="row">
			
					<h3>Tu información del Perfil</h3>

					<div style="width:33%;" class="column"><i class='fas fa-book'></i><?php echo $row->Firstname;?><br><br>
						<i class='fas fa-book'> </i><?php echo $row->Lastname;?><br><br>
						<i class='fas fa-user'> </i><?php echo $row->email;?>
					</div>

					<div style="width:33%;"  class="column"><i class='fas fa-map-marker-alt'> </i><?php echo $row->Address;?> <br> <?php echo $row->City." ".$row->State." ".$row->PostalCode;?><br> <br>
						<i class='fas fa-phone'></i><?php echo $row->Telephone;?> <br><br>
						<i class='far fa-paper-plane'> </i><?php echo $row->email;?>
					</div>

					<div style="width:33%;"class="column">
						<?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row->Photo).'" style="width:100px; height:100px; "class="indimage"/>'?>
					</div>
				
			</div>
				<div class="row">
					<div style="width: 850px;" class="contactform">
						<div class="row">
							<h3>Estar en contacto</h3>
							<hr color="#F0F0F0">
							<div  style="width:60%;"class="column">
					
								<label style=" font-weight:bold;" for="fname">Nombres</label>
							    <br>
							    <?php echo form_input(array(
						        	'type' =>'text',
						        	'id'=>'fname',
						        	'name'=>'fname',
						        	'style'=>'width:100%;font-size: 70%;border:1px solid #F0F0F0;',
						        	'value'=> $row->Firstname,
						        	'placeholder'=>'Tu Nombre',
						        	'readonly'=>'readonly'));?>
						
							    <br>
							    <div><label style=" font-weight:bold;" for="lname">Appellidos</label>
							    <br>
							    <?php echo form_input(array(
						        	'type' =>'text',
						        	'id'=>'lname',
						        	'name'=>'lname',
						        	'style'=>'width:100%;font-size: 70%;border:1px solid #F0F0F0;',
						        	'value'=> $row->Lastname,
						        	'placeholder'=>'Tu Appellido',
						        	'readonly'=>'readonly'));?>

							 
								</div>
							</div>
							<div style="width:40%;" class="column">
								<?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row->Photo).'" style="width:100px; height:100px; margin-left:75px; "class="indimage"/>'?>
								<br>
																
						<input style="width:130px;padding:10px;margin-left:60px;"type="submit" value="Seleccionar Foto">
						

							</div>
						</div>

						<div style="margin: 10px; " class="row">
							 <br>
						    <label style=" font-weight:bold;" for="email">Correo</label>

						    <br>
						    <?php echo form_input(array(
						        
						        	'id'=>'email',
						        	'name'=>'email',
						        	'style'=>'width:99%;border:1px solid #F0F0F0;font-size: 70%;padding:12px;',
						        	'value'=> $row->email,
						        	'placeholder'=>'Tu  correo electrónico',
						        	'readonly'=>'readonly'));?>

							<br>
							<br>
							<br>
						    <label style=" font-weight:bold;"for="telephone">Telefono</label>
						     <label style=" font-weight:bold;padding-left:208px;"for="time">Usario</label>
						      <label style="font-weight:bold;padding-left:218px;" for="price"> Contraseña</label>
						    <br>
						    <?php echo form_input(array(
						        
						        	'id'=>'telephone',
						        	'name'=>'telephone',
						        	'style'=>'width: 32.75%;height: 38px;font-size: 70%;border:1px solid #F0F0F0;border-radius: 0px;padding:8px;',
						        	'value'=> $row->Telephone,
						        	'placeholder'=>'Telefono'
						        	));

						        	?>


						    <?php echo form_input(array(
						        
						        	'id'=>'email',
						        	'name'=>'email',
						        	'style'=>'width: 32.75%;height: 38px;font-size: 70%;border:1px solid #F0F0F0;border-radius: 0px;padding:8px;',
						        	'value'=> $row->email,
						        	'placeholder'=>'Nombre de Usario',
						        	'readonly'=>'readonly'

						        	));?>

						      <?php echo form_input(array(
						        
						        	'id'=>'password',
						        	'name'=>'password',
						        	'style'=>'width: 32.75%;height: 38px;font-size: 70%;border:1px solid #F0F0F0;border-radius: 0px;padding:8px;',
						        	'value'=> $row->Password,
						        	'placeholder'=>'Contraseña'
						        	
						        	));
						      echo form_error('telephone');

						      echo form_error('password');?>
						    
						    <br>
						    <br>
						     <p class="nota">Nota:</p>
							
								<p style="font-size: 90%;">Solo puede cambiar los datos(Teléfono,Contraseña y Logo)</p>
						     <br>
						     <?php echo form_submit(array(
				            	'name'=> 'submit',
				            	'id'=>'submit',
				            	'value'=>'Guardar Cambios',
				            	'style'=>'width:150px'
				            ));
				            ?>
						     

					   </div>
					</div>

				</div>
			</div>
		</div>
<?php
}
echo form_close();
?>
		    
</body>
</html>
