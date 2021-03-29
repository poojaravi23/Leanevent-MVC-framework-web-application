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
		<title>  Comprar Boletos </title>
	</head>
	<body class="wrapper" >
		<span id="up"></span>
		
		<div>
			 <img class="banner" src="<?php echo base_url(); ?>/imagenes/bannercboleto.jpg"/>
			 <div class="centered2" style="left:650px;"> COMPRAR BOLETOS</div>
			 <div class="inicio2"><span style="color: #FFC300;">INICIO</span> &nbsp COMPRAR BOLETOS</div>

		</div>

		<?php echo form_open('Buy/validbuy');
		foreach ($eventcart->result() as $row)
			{  ?>
		
		<div class="classform" style="left: 600px; width:50%;">
		<br><br><br><br>				
		<div class="row" style="float:center; width:80%;">
					

				<?php $buycartimage = array(
		        	'type' =>'image',
		        	'src'=>'data:image/jpeg;base64,'.base64_encode($row->Image),
		        	'name'=>'image',
		        	'width'=>'400px',
		        	'height'=>'400px',
		        	'value'=>$row->EventID);

				echo form_input($buycartimage);?>
        </div>

        				<div class="row" style="float: center; width:80%;">

						<p style=" position:absolute;font-weight: bold;text-align: center"> <?php echo $row ->Eventname?></p>
						 <br>
						</div>


						 <div class="row" style="float: center; width:80%;">
						
						<p style="font-weight: bold;text-align: left">Price: <?php echo "$".$row->Ticket_value.".00";?>
						  <br>
						</p>
					</div>

						<div class="row" style="float: center; width:80%;">

						<?php echo form_label('Numero de Entradas:');
						echo "<br>";

						echo form_input(array(
						'name' => 'quan',
						'id' => 'quan',
						'value'=> $quantity,
						'readonly'=>'readonly',
						'style'=>'width:50px;'

						));
						?>


						<!--<p style="font-weight: bold;text-align: left">Numero de Entradas:<?php echo $quantity?></p>-->
						 <br>
						</div>

						 <div class="row" style="float: center; width:80%;">

				<?php echo form_label('Nombre');
               echo "<br>";
            
            	echo form_input(array(
                'name' => 'fname',
                'id' => 'fname',
                'class' => 'input_box',
                'placeholder' => 'Tu Nombre',
                'style'=>'width: 200px;'
            	));
            	echo form_error('fname');

            	echo "<br>";?>

				<?php echo form_label('Correo');
               echo "<br>";
            
            	echo form_input(array(
                'name' => 'email',
                'id' => 'email',
                'class' => 'input_box',
                'placeholder' => 'Tu correo electranico',
                'style'=>'width: 200px;'
            	));
            	echo form_error('email');?>
            	<br>
            	<br>
	
				<?php
				$cartdata = array(
				'name'     => 'cartbtn',
			 	'id'       => 'cartbtn',
			 	'type'     => 'submit',
			 	'content'  => 'Confirm',
			 	'style'		=>'position:absolute;background-color:#FFC300; border:none; margin-top:15px;margin-left:2px; padding:10px; float:center;',
			 	'value'=>$row->EventID);
					 	
				
			  	echo form_button($cartdata);

			  	echo form_close(); 
			  	?>

</div>
		</div>

		<?php } ?>
    

				
	    
			</body>
	</head>
	</html>

