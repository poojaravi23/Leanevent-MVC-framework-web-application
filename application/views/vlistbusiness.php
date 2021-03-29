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
		<title>  Lista Fundacions </title>
	</head>

<br>
<br>
<br>
	<body class="wrapper" >
		<span id="up"></span>

        <td>
        
		<div >	
		<h2 style="font-weight:normal;margin-bottom: 50px;font-size: 150%;">Lista de Fundaciones</h2>
				
				<table class="eventable" style="width:1300px;text-align: center;">
				  <tr>
				  	<th></th>
				    <th style="width:40%;text-align:left;padding-left: 200px;">NOMBRE DE LA FUNDACION</th>
				    <th>EVENTO</th>
				    <th>RESPONSABLE</th>
				    <th>COMISION</th>
				    <th>CONFIRMAR</th>
				  </tr>
					
 				<?php echo form_open('Homeagent/validcomn');
    				foreach ($eventlog->result() as $row)
        		{  

        		?>
					<tr>
					   	<td>
					   		<?php $homeimage = array(
				        	'type' =>'image',
				        	'src'=>'data:image/jpeg;base64,'.base64_encode($row->Logo),
				        	'name'=>'image',
				        	'width'=>'60px',
				        	'height'=>'70px');
				        	

        	                echo form_input($homeimage);?>

					   	</td>
		                <td style="text-align: left;left: 100px;"><?php echo $row->Foundation_name?></td>
		                <td><?php echo $row->Eventname;?></td>
		                <td><?php echo $row->Responsible;?></td>
		                <td><?php echo form_input(array(
		                
		                'name' => 'comn['.$row->BusinessID."-".$row->EventID.']',
		                'id' => 'comn', 
		                'type'=>'textbox',
		                'style'=>'text-align: center; width:20%',
		                'value'=>$row->Commission
		            		));
		                 echo form_error('comn['.$row->BusinessID."-".$row->EventID.']');
		                ?>
		                </td>

		                <td><?php echo form_button(array(
				            	'name'=> 'submit',
				            	'id'=>'submit',
				            	'type'=>'submit',
				            	'class'=>'assignbtn',
				            	'style'=>'margin-left:0px;padding-left:15px;width:70px;color:White;',
				            	'content'=>'Asignar',
								'value'=>$row->BusinessID."-".$row->EventID
				            ));
           				?>
           				</td>
  
		            </tr>
	                
	                <?php }

				echo form_close();?> 
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
