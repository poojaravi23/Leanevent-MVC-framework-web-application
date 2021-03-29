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
		<title>  Lista de Eventos </title>
	</head>

<br>
<br>
<br>
	<body class="wrapper" >
		<span id="up"></span>

        <td>
        
		<div >	
		<h2 style="font-weight:normal;margin-bottom: 50px;font-size: 150%;">Lista de Eventos</h2>
		<br><br>

		<?php echo form_open('Homeagent/validaddevent');
		echo form_submit(array(
				            	'name'=>'submit',
				            	'id'=>'submit',
				            	'value'=>'Agregar',
				            	'style'=>'background-color:green; width:95px; position: absolute;left: 900px;top:180px'
				            ));
		echo form_close();
				            ?>
	
			<br><br>
				
				<table class="eventable" style="width:1300px;text-align: center;">
				  <tr>
				  	<th></th>
				    <th style="width:40%;text-align:left;padding-left: 200px;">DETALLES DEL EVENTOS</th>
				    <th>LUGAR</th>
				    <th>FETCHA</th>
				    <th>MODIFICAR</th>
				    <th>ELIMINAR</th>
				  </tr>
					
 				<?php foreach ($eventlog->result() as $row)
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

		                <td><?php echo form_open('Homeagent/selectmodify');
								echo form_button(array(
								'class'=>'modifyButton',
				            	'name'=>'modsubmit',
				            	'id'=>'modsubmit',
				            	'type'=>'submit',
				            	'value'=>$row->EventID,
				            	'content'=>'<i class="far fa-edit"></i>',
				            	 'style'=>'font-size:13px; color: white;'
				            	
				            ));
								echo form_close();
				            ?></td>
				        <td><?php echo form_open('Homeagent/deleteupdate');
								echo form_button(array(
								'class'=>'modifyButton',
				            	'name'=>'delsubmit',
				            	'id'=>'delsubmit',
				            	'type'=>'submit',
				            	'value'=>$row->EventID,
				            	'content'=>'<i class="fas fa-trash-alt"></i>',
				            	 'style'=>'font-size:13px; color: white;background-color:red;'
				            	
				            ));
								echo form_close();
				            ?></td>
		               
  
		            </tr>
	                
	                <?php }

				?>
				</table>

					<br>
		<br>
		<div class="pagination">
			<a href="#">&laquo;</a>
			<a class="active" href="#">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#">4</a>
			<a href="#">&raquo;</a>
		</div>


	</body>
</html> 
