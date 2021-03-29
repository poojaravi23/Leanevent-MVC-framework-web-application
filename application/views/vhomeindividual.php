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
		<title>  Inicio Individual </title>
	</head>
	<body class="wrapper" >
		<span id="up"></span>

        <td>
        
		<div >	
		<h2 style="font-weight:normal;margin-bottom: 50px;font-size: 150%;">Lista de Eventos</h2>
				
				<table class="eventable" style="width:1200px;text-align: center;">
				  <tr>
				  	<th></th>
				    <th style="width:55%;text-align:left;padding-left: 200px;">DETALLES DEL EVENTOS</th>
				    <th>LUGAR</th>
				    <th>FECHA</th>
				    <th>HORA</th>
				    <th>ASISTENCIA</th>
				  </tr>
					
 				<?php echo form_open('Homeindividual/individualinsert');
    				foreach ($eventlog->result() as $row)
        		{  

        		?>

					<tr>
					   	<td>
					   		<?php $homeimage = array(
				        	'type' =>'image',
				        	'src'=>'data:image/jpeg;base64,'.base64_encode($row->Image),
				        	'name'=>'image',
				        	'width'=>'60px',
				        	'height'=>'70px');
				        	

        	                echo form_input($homeimage);?>

					   	</td>
		                <td style="text-align: left;left: 100px;"><?php echo $row->Eventname;?></td>
		                <td><?php echo $row->Place;?></td>
		                <td><?php echo $row->Date;?></td>
		                <td><?php echo $row->Time;?></td>
		                <td><?php echo form_button(array(
						'name'=> 'submit',
						'id'=>'submit',
						'type'=>'submit',
						'content'=>'Confirmar',
						'value' => $row->EventID,
						'class'=>'assignbtn'
						));
						

						?></td>

		            
		            </tr>
	                
	                <?php }

				echo form_close();?> 
				</table>
			<?php if(isset($popid)){
				echo "<script>location.href = '".base_url()."Homeindividual/".$popid."';</script>"; 
			}
			?>

			<div id="confirmPop" class="overlay" style="text-align: left;">
					<div class="popup" style="height:170px; width: 30%; left: 100px;margin-top:5px;">
						<p style= "text-align: center;">Beinvenido</p>
						<hr color="#F0F0F0">
						 <p style="text-align: center;">Gracias por ser un voluntario en nuestros evento</p>
						<hr  color="#F0F0F0">
						<a href="<?php echo base_url(); ?>Homeindividual"> <input type="submit"value="Close" style="margin-left: 370px;background-color:#D4D4D4;color: black; "></a>
						 
			</div>
		</div>
		<div id="regPop" class="overlay" style="text-align: left;">
					<div class="popup" style="height:170px; width: 30%; left: 100px;margin-top:5px;">
						<p style= "text-align: center;">Error</p>
						<hr color="#F0F0F0">
						 <p style="text-align: center;">Already registered</p>
						<hr  color="#F0F0F0">
						<a href="<?php echo base_url(); ?>Homeindividual"> <input type="submit"value="Close" style="margin-left: 370px;background-color:#D4D4D4;color: black; "></a>
						 
			</div>

		</div>
	</body>
</html> 
