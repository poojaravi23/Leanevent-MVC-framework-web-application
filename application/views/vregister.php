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
		<title>  Regístrate </title>


	</head>
	<body class="wrapper" >
		<span id="up"></span>
		
		<div>
			 <img class="banner" src="<?php echo base_url(); ?>/imagenes/bannerregistro.jpg"/>
			 <div class="centered2"> REGÍSTRATE</div>
			 <div class="inicio2"><span style="color: #FFC300;">INICIO</span> &nbsp  REGÍSTRATE</div>
			 
		</div>
		
			<div class="classform">
			
				<div class="row">

					<div class="contactform" style="margin-top: 80px;margin-left:70px;">
						<h3> Elija el tipo de usuario para registrarse</h3>
						<br>
						<a href=#comoindividual><input type="submit" value="Como individual" style="margin-left:45px;"></a>
    				    <a href=#comofound><input type="submit" value="Como Negocio o Foundacion" style="margin-left:90px;"></a>
    				   <a href=#comoagent><input type="submit" value="Como agente LEAN" style="margin-left:100px;" ></a>
					
                	</div>	
            	</div>
            	</div>

			<?php  echo form_open('Register/indvalidregister');?>
			<div id="comoindividual" class="overlay" style="text-align: left;">
					<div  style="height: 850px;"class="popup">
						<h3 style="margin-left:10px;">Registro Individual</h3>
						<hr color="#F0F0F0">
						<div  class="row"> 
							<div style="width: 50%;" class="column">

								<label style="font-weight: bold;" for="regemail">Correo</label>
								<br>
								<?php echo form_input(array('name' => 'email', 'id' => 'email', 'class' => 'input_box','placeholder' => 'Correo','style'=>'width: 100%;'   ));
								echo form_error('email');?>	
								<br>
								<label style="font-weight: bold;"for="regfname">Nombre</label>
								<br>
							    <?php echo form_input(array('name' => 'fname','id' => 'fname', 'class' => 'input_box','placeholder' => 'Tu Nombre' ,'style'=>'width: 100%;' ));
							    echo form_error('fname');?>
							</div>

							<div style="width:50%;" class="column">
								<label style="font-weight: bold;" for="regpassword">Contraseña</label>
								<br>
								<?php echo form_input(array('name' => 'password','id' => 'password', 'class' => 'input_box','placeholder' => 'Contraseña' ,'style'=>'width: 100%;'  ));
								echo form_error('password');?>	
								<br>
								<label style="font-weight: bold;" for="reglname">Apellido</label>
								<br>
								<?php echo form_input(array('name' => 'lname','id' => 'lname', 'class' => 'input_box','placeholder' => 'Tu Apellido','style'=>'width: 100%;'   ));
								echo form_error('lname');?>
								
							</div>
						</div>
						<div class="row">
							<div style="width: 205%;" class="column">
								<label style="font-weight: bold;" for="regaddress">Dirección</label><br>
							<?php echo form_input(array('name' => 'address','id' => 'address', 'class' => 'input_box','placeholder' => ' Dirección'  ));
							echo form_error('address');?>
								<br>
								
								<br>
								<label style="font-weight: bold;" for="regcity">Ciudad</label><br>
								<?php echo form_input(array('name' => 'city','id' => 'city', 'class' => 'input_box','placeholder' => ' Ciudad'  ));
								echo form_error('city');?>
								<br>
								</div>
						</div>
						
						<div  class="row">
								<div style="width:70%;" class="column">
										<label style="font-weight: bold;" for="regstate">Estado</label>
										<br>       
				                <span  class="selectoptn">
				                	<?php $selectoption= array(
				                  	'-1'=>'Escoger...',
				                    'AL' => 'Alabama (AL)',
									'AK' => 'Alaska (AK)',
									'AZ' => 'Arizona (AZ)',
									'AR' => 'Arkansas (AR)',
									'CA' => 'California (CA)',
									'CO' => 'Colorado (CO)',
									'CT' => 'Connecticut (CT)',
									'DE' => 'Delaware (DE)',
									'DC' => 'District Of Columbia (DC)',
									'FL' => 'Florida (FL)',
									'GA' => 'Georgia (GA)',
									'HI' => 'Hawaii (HI)',
									'ID' => 'Idaho (ID)',
									'IL' => 'Illinois (IL)',
									'IN' => 'Indiana (IN)',
									'IA' => 'Iowa (IA)',
									'KS' => 'Kansas (KS)',
									'KY' => 'Kentucky (KY)',
									'LA' => 'Louisiana (LA)',
									'ME' => 'Maine (ME)',
									'MD' => 'Maryland (MD)',
									'MA' => 'Massachusetts (MA)',
									'MI' => 'Michigan (MI)',
									'MN' => 'Minnesota (MN)',
									'MS' => 'Mississippi (MS)',
									'MO' => 'Missouri (MO)',
									'MT' => 'Montana (MT)',
									'NE' => 'Nebraska (NE)',
									'NV' => 'Nevada (NV)',
									'NH' => 'New Hampshire (NH)',
									'NJ' => 'New Jersey (NJ)',
									'NM' => 'New Mexico (NM)',
									'NY' => 'New York (NY)',
									'NC' => 'North Carolina (NC)',
									'ND' => 'North Dakota (ND)',
									'OH' => 'Ohio (OH)',
									'OK' => 'Oklahoma (OK)',
									'OR' => 'Oregon (OR)',
									'PA' => 'Pennsylvania (PA)',
									'RI' => 'Rhode Island (RI)',
									'SC' => 'South Carolina (SC)',
									'SD' => 'South Dakota (SD)',
									'TN' => 'Tennessee (TN)',
									'TX' => 'Texas (TX)',
									'UT' => 'Utah (UT)',
									'VT' => 'Vermont',
									'VA' => 'Virginia',
									'WA' => 'Washington',
									'WV' => 'West Virginia',
									'WI' => 'Wisconsin',
									'WY' => 'Wyoming',
				                    );
                                 echo form_dropdown('state',$selectoption); 
                                 echo form_error('state');?> </span>				
						</div>
									<div style="width: 30%;"class="column">
										<label style="font-weight: bold;"for="regpostalcode">Código Postal</label>
										<br>
										<?php echo form_input(array('name' => 'postalcode','id' => 'postalcode', 'class' => 'input_box','style'=>'width: 100%;' ));
										echo form_error('postalcode');?> 
										
									</div>
						</div>	


					<div class="row">
							
					<?php echo form_submit(array('name'=> 'submit','id'=>'submit','value'=>'Registrarse','style'=>'margin-left: 10px;'));?>
							<!--<input style="margin-left: 10px;padding:12px;"type="submit" name="iregister" value="Registrarse" style="width:150px;">-->
								<br>
								<hr color="#F0F0F0">
								<a href="<?php echo base_url(); ?>Register"><input style="padding:8px;border-radius: 15px; 
								width:12%;margin-left: 480px;background-color:#B0B0B0; color:black;border: none; " type="button" value="Cerrar" ></a>
						
					</div>

				</div>
			</div>

		  <?php  echo form_close();?>

									<!--BUSINESS POPUP-->

			<?php  echo form_open('Register/busvalidregister');?>
			<div id="comofound" class="overlay" style="text-align: left;">
					<div  style="height: 875px;" class="popup">
						<h3 style="margin-left:10px;">Registro Negocio o Foundacion</h3>
						<hr color="#F0F0F0">
						<div  class="row"> 
							<div style="width: 50%;" class="column">
								<label style="font-weight: bold;" for="regemail">Correo</label>
								<br>
								<?php echo form_input(array('name' => 'email', 'id' => 'email', 'class' => 'input_box','placeholder' => 'Correo','style'=>'width: 100%;'));
								echo form_error('email');?>
								<br>
								<label style="font-weight: bold;" for="regfname">Nombre</label>
								<br>
								<?php echo form_input(array('name' => 'fname', 'id' => 'fname', 'class' => 'input_box','placeholder' => 'Tu Nombre','style'=>'width: 100%;'));
								echo form_error('fname');?>
								<br>
							</div>
							<div style="width:50%;" class="column">
								<label style="font-weight: bold;" for="regpassword">Contraseña</label>
								<br>
								<?php echo form_input(array('name' => 'password', 'id' => 'password', 'class' => 'input_box','placeholder' => 'Contraseña','style'=>'width: 100%;'));
								echo form_error('password');?>
								<br>
								<label style="font-weight: bold;" for="reglname">Apellido</label>
								<br>
								<?php echo form_input(array('name' => 'lname', 'id' => 'lname', 'class' => 'input_box','placeholder' => 'Tu Nombre','style'=>'width: 100%;'));
								echo form_error('lname');?>
							</div>
						</div>
						<div class="row">
							<div style="width: 100%;" class="column">
								<label style="font-weight: bold;" for="regaddress">Dirección</label><br>
								<?php echo form_input(array('name' => 'address', 'id' => 'address', 'class' => 'input_box','placeholder' => 'Dirección','style'=>'width: 100%;'));
								echo form_error('address');?>
								<br>
								<br>
								<label style="font-weight: bold;"  for="regcity">Ciudad</label>
								<br>
								<?php echo form_input(array('name' => 'city', 'id' => 'city', 'class' => 'input_box','placeholder' => 'Ciudad','style'=>'width: 100%;'));echo form_error('city');?>
								<br>
							</div>
						</div>
								
								<div class="row">
									<div style="width:70%" class="column">
										<label style="font-weight: bold;" for="regstate">Estado</label>
										<br>

										<span  class="selectoptn">
				                	<?php $selectoption= array(
				                  	'-1'=>'Escoger...',
				                    'AL' => 'Alabama (AL)',
									'AK' => 'Alaska (AK)',
									'AZ' => 'Arizona (AZ)',
									'AR' => 'Arkansas (AR)',
									'CA' => 'California (CA)',
									'CO' => 'Colorado (CO)',
									'CT' => 'Connecticut (CT)',
									'DE' => 'Delaware (DE)',
									'DC' => 'District Of Columbia (DC)',
									'FL' => 'Florida (FL)',
									'GA' => 'Georgia (GA)',
									'HI' => 'Hawaii (HI)',
									'ID' => 'Idaho (ID)',
									'IL' => 'Illinois (IL)',
									'IN' => 'Indiana (IN)',
									'IA' => 'Iowa (IA)',
									'KS' => 'Kansas (KS)',
									'KY' => 'Kentucky (KY)',
									'LA' => 'Louisiana (LA)',
									'ME' => 'Maine (ME)',
									'MD' => 'Maryland (MD)',
									'MA' => 'Massachusetts (MA)',
									'MI' => 'Michigan (MI)',
									'MN' => 'Minnesota (MN)',
									'MS' => 'Mississippi (MS)',
									'MO' => 'Missouri (MO)',
									'MT' => 'Montana (MT)',
									'NE' => 'Nebraska (NE)',
									'NV' => 'Nevada (NV)',
									'NH' => 'New Hampshire (NH)',
									'NJ' => 'New Jersey (NJ)',
									'NM' => 'New Mexico (NM)',
									'NY' => 'New York (NY)',
									'NC' => 'North Carolina (NC)',
									'ND' => 'North Dakota (ND)',
									'OH' => 'Ohio (OH)',
									'OK' => 'Oklahoma (OK)',
									'OR' => 'Oregon (OR)',
									'PA' => 'Pennsylvania (PA)',
									'RI' => 'Rhode Island (RI)',
									'SC' => 'South Carolina (SC)',
									'SD' => 'South Dakota (SD)',
									'TN' => 'Tennessee (TN)',
									'TX' => 'Texas (TX)',
									'UT' => 'Utah (UT)',
									'VT' => 'Vermont',
									'VA' => 'Virginia',
									'WA' => 'Washington',
									'WV' => 'West Virginia',
									'WI' => 'Wisconsin',
									'WY' => 'Wyoming',
				                    );
                                 echo form_dropdown('state',$selectoption); 
                                 echo form_error('state');?>
										
										
									</div>
									<div style="width: 30%;"class="column">
										<label style="font-weight: bold;"  for="postal">Código Postal</label>
										<br>

										<?php echo form_input(array('name' => 'postalcode', 'id' => 'postalcode', 'class' => 'input_box','style'=>'width: 100%;'));
										echo form_error('postalcode');?>
										
									</div>
								</div>

					    <?php $radio1=array(  'checked' =>TRUE,'name'=>"businesstype", 'value'=>"businesstype1");
					       echo form_radio($radio1);?>
					      <span style="font-weight: bold;">Tipo de negocio 1</span> 
					       <?php $radio2=array( 'name'=>"businesstype" ,'value'=>"businesstype2");
					       echo form_radio($radio2);?>
					      <span style="font-weight: bold;">Tipo de negocio 2</span>
					       <?php $radio3=array( 'name'=>"businesstype" ,'value'=>"businesstype3");
					       echo form_radio($radio3);?>
					      <span style="font-weight: bold;">Tipo de negocio 3</span>
						<!--	<input  style="margin-left:40px;" type="radio" name="businesstype" value="businesstype2"> <span style="font-weight: bold;">Tipo de negocio 2</span> 
						<input  style="margin-left:40px;" type="radio" name="businesstype" value="businesstype3"> <span style="font-weight: bold;">Tipo de negocio 3</span> -->
						<br>
						<br> 
						<?php echo form_submit(array('name'=> 'submit','id'=>'submit','value'=>'Registrarse','style'=>'margin-left: 10px;'));?>
						<br>
								
						<hr color="#F0F0F0">
						<a href="<?php echo base_url(); ?>Register"><input style="padding:8px;border-radius: 15px;width:12%;margin-left: 510px;background-color:#B0B0B0; color:black;border: none; " type="button" value="Cerrar" ></a>
		

				</div>
			</div>
            <?php  echo form_close();?>
     

				                       <!--AGENT POPUP-->

<?php  echo form_open('Register/agentvalidregister');?>
			<div id="comoagent" class="overlay" style="text-align: left;">
					<div  style="height: 850px;"class="popup">
						<h3 style="margin-left:10px;">Registro de Agente LEAN</h3>
						<hr color="#F0F0F0">
						<div  class="row"> 
							<div style="width: 50%;" class="column">

								<label style="font-weight: bold;" for="regemail">Correo</label>
								<br>
								<?php echo form_input(array('name' => 'email', 'id' => 'email', 'class' => 'input_box','placeholder' => 'Correo','style'=>'width: 100%;'));
								echo form_error('email');?>	
								<br>
								<label style="font-weight: bold;"for="regfname">Nombre</label>
								<br>
							    <?php echo form_input(array('name' => 'fname','id' => 'fname', 'class' => 'input_box','placeholder' => 'Tu Nombre' ,'style'=>'width: 100%;' ));
							    echo form_error('fname');?>
							</div>

							<div style="width:50%;" class="column">
								<label style="font-weight: bold;" for="regpassword">Contraseña</label>
								<br>
								<?php echo form_input(array('name' => 'password','id' => 'password', 'class' => 'input_box','placeholder' => 'Contraseña' ,'style'=>'width: 100%;'));
								echo form_error('password');?>	
								<br>
								<label style="font-weight: bold;" for="reglname">Apellido</label>
								<br>
								<?php echo form_input(array('name' => 'lname','id' => 'lname', 'class' => 'input_box','placeholder' => 'Tu Apellido','style'=>'width: 100%;'));
								echo form_error('lname');?>
								
							</div>
						</div>
						<div class="row">
							<div style="width: 205%;" class="column">
								<label style="font-weight: bold;" for="regaddress">Dirección</label><br>
							<?php echo form_input(array('name' => 'address','id' => 'address', 'class' => 'input_box','placeholder' => ' Dirección'  ));
							echo form_error('address');?>
								<br>
								
								<br>
								<label style="font-weight: bold;" for="regcity">Ciudad</label><br>
								<?php echo form_input(array('name' => 'city','id' => 'city', 'class' => 'input_box','placeholder' => ' Ciudad'  ));
								echo form_error('city');?>
								<br>
								</div>
						</div>
						
						<div  class="row">
								<div style="width:70%;" class="column">
										<label style="font-weight: bold;" for="regstate">Estado</label>
										<br>       
				                <span  class="selectoptn">
				                	<?php $selectoption= array(
				                  	'-1'=>'Escoger...',
				                    'AL' => 'Alabama (AL)',
									'AK' => 'Alaska (AK)',
									'AZ' => 'Arizona (AZ)',
									'AR' => 'Arkansas (AR)',
									'CA' => 'California (CA)',
									'CO' => 'Colorado (CO)',
									'CT' => 'Connecticut (CT)',
									'DE' => 'Delaware (DE)',
									'DC' => 'District Of Columbia (DC)',
									'FL' => 'Florida (FL)',
									'GA' => 'Georgia (GA)',
									'HI' => 'Hawaii (HI)',
									'ID' => 'Idaho (ID)',
									'IL' => 'Illinois (IL)',
									'IN' => 'Indiana (IN)',
									'IA' => 'Iowa (IA)',
									'KS' => 'Kansas (KS)',
									'KY' => 'Kentucky (KY)',
									'LA' => 'Louisiana (LA)',
									'ME' => 'Maine (ME)',
									'MD' => 'Maryland (MD)',
									'MA' => 'Massachusetts (MA)',
									'MI' => 'Michigan (MI)',
									'MN' => 'Minnesota (MN)',
									'MS' => 'Mississippi (MS)',
									'MO' => 'Missouri (MO)',
									'MT' => 'Montana (MT)',
									'NE' => 'Nebraska (NE)',
									'NV' => 'Nevada (NV)',
									'NH' => 'New Hampshire (NH)',
									'NJ' => 'New Jersey (NJ)',
									'NM' => 'New Mexico (NM)',
									'NY' => 'New York (NY)',
									'NC' => 'North Carolina (NC)',
									'ND' => 'North Dakota (ND)',
									'OH' => 'Ohio (OH)',
									'OK' => 'Oklahoma (OK)',
									'OR' => 'Oregon (OR)',
									'PA' => 'Pennsylvania (PA)',
									'RI' => 'Rhode Island (RI)',
									'SC' => 'South Carolina (SC)',
									'SD' => 'South Dakota (SD)',
									'TN' => 'Tennessee (TN)',
									'TX' => 'Texas (TX)',
									'UT' => 'Utah (UT)',
									'VT' => 'Vermont',
									'VA' => 'Virginia',
									'WA' => 'Washington',
									'WV' => 'West Virginia',
									'WI' => 'Wisconsin',
									'WY' => 'Wyoming',
				                    );
                                 echo form_dropdown('state',$selectoption); 
                                 echo form_error('state');?> </span>				
						</div>
									<div style="width: 30%;"class="column">
										<label style="font-weight: bold;"for="regpostalcode">Código Postal</label>
										<br>
										<?php echo form_input(array('name' => 'postalcode','id' => 'postalcode', 'class' => 'input_box','style'=>'width: 100%;' ));
										echo form_error('postalcode');?> 
										
									</div>
						</div>	


					<div class="row">
							
					<?php echo form_submit(array('name'=> 'submit','id'=>'submit','value'=>'Registrarse','style'=>'margin-left: 10px;'));?>
							<!--<input style="margin-left: 10px;padding:12px;"type="submit" name="iregister" value="Registrarse" style="width:150px;">-->
								<br>
								<hr color="#F0F0F0">
								<a href="<?php echo base_url(); ?>Register"><input style="padding:8px;border-radius: 15px; 
								width:12%;margin-left: 480px;background-color:#B0B0B0; color:black;border: none; " type="button" value="Cerrar" ></a>
						
					</div>

				</div>
			</div>

		  <?php  echo form_close();?>

		  <?php if(isset($popupid)){
				echo "<script>location.href = '".base_url()."Register/".$popupid."';</script>"; 
			}
			?>

	</body>
</html>