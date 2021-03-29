<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


<!DOCTYPE html> 	
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/leanevent.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
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
		
	<div class="classform" style="float: left; width: 1500px;">
		<div class="row"> 
		<br>
		<br>
		<br>
		<br>
		<br>
  							
  			<div class="text1">
  					<hr class="textrow" style="margin-left: 300px;"COLOR="#FFC300">
  					<span style="font-size: 120%; color:black;padding-left:10px;">NUESTROS EVENTOS</span>
  					<hr COLOR="#FFC300" class="textrow" style="margin-left:10px; ">

					<p style="font-size: 80%;margin-left: 240px;">Tu asistencia es importante para nosotros visitanos en los eventos qu estamos realizando</p>
								
			</div>	

  		</div>
	<br>
	<br>
	<br>
	<br>
	<div class="row">
		
		<table style="width:760px;">
			<tr>

	<?php  
	 echo form_open('Buy/buycart');
    foreach ($eventcol->result() as $row)
        {  

        ?>
        <td>
        <?php $buyimage = array(
        	'type' =>'image',
        	'src'=>'data:image/jpeg;base64,'.base64_encode($row->Image),
        	'name'=>'image',
        	'width'=>'250px',
        	'height'=>'250px',
        	'value'=>$row->EventID);

        	echo form_input($buyimage);
			          
			            $namebtn = array(
						'name'     => 'ename',
					 	'id'       => 'ename',
					 	'value'    => $row->EventID,
					 	'type'     => 'submit',
					 	'content'  => $row->Eventname,
					 	'style'		=>'font-size:12.5px; border:none;background-color:white;'
				);
				  echo form_button($namebtn);
				 echo "<br>";
			                 echo "<span style='color:#FFC300;'>";
			                   if($row->Ticket_value==0){
			                   	echo "Entrada Gratis</span>";
			                   }
			                   else{
			                   	echo "$".$row->Ticket_value.".00";
			                   }
			    echo "</td>";

			}	
		  echo form_close(); 
         ?>  

			
	</tr>
</table>
		</div>
			</div>


				<div class="rectangle" style="padding-left: 400px; top: 1000px;" >
					 <p style="float: left;"> <i class='far fa-paper-plane'> </i>Registrese para recibir un <br>boletin</p>
			         
  					<input type="text" placeholder="Introduce tu correo electrÃ³nico" name="search">
 					 <button type="submit">Suscribir</button>
					
				</div>

			</body>
</head>
</html>
