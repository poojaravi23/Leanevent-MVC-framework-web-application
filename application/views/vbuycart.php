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
			 <img class="banner" src="<?php echo base_url();?>/imagenes/bannercboleto.jpg"/>
			 <div class="centered2" style="left:650px;"> COMPRAR BOLETOS</div>
			 <div class="inicio2"><span style="color: #FFC300;">INICIO</span> &nbsp COMPRAR BOLETOS</div>

		</div>
		
	<div class="classform" style="float: left; width:80%;">
		<br><br><br><br>				
		<div style="width:80%; margin-left: 10%;height: 100%;" class="row">
					
					<div style="width:30%;" class="columnbuy">

				<?php echo form_open('Buy/cartconfirm');

				foreach ($eventcart->result() as $row)
        			{  ?>
	
						<?php $buycartimage = array(
				        	'type' =>'image',
				        	'src'=>'data:image/jpeg;base64,'.base64_encode($row->Image),
				        	'name'=>'image',
				        	'width'=>'250px',
				        	'height'=>'250px',
				        	'value'=>$row->EventID);

        				echo form_input($buycartimage);?>
						
					</div>
					
					

					<div  style="width:30%;"class="columnbuy">
						<p style=" font-weight: bold;"> <?php echo $row ->Eventname?></p>
						<p style=" font-weight: bold;"> <?php echo "$".$row->Ticket_value.".00";?>
						<span style=" padding-left: 40%">
								
							<span style=" color: #FFC300;" class="fa fa-star checked"></span>
							<span style=" color: #FFC300;"class="fa fa-star checked"></span>
							<span style=" color: #FFC300;"class="fa fa-star checked"></span>
							<span style=" color: #FFC300;"class="fa fa-star checked "></span>
							<span style=" color: #FFC300;"class="fa fa-star checked"></span>
							(<?php echo $row->rating?> Rating)
						</span>
						</p>
						<p>
						<?php echo $row->Description?>
						</p>
						<h4>Numero de Entradas</h4>
						<div >

				<?php 
			          
	            $quantmdata = array(
				'name'     => 'minbtn',
			 	'id'       => 'minbtn',
			 	'type'     => 'button',
			 	'content'  => '-',
					 	
				);
			  	echo form_button($quantmdata);

				$quantval=array(
				'name'=>'quantvalue',
				'id' =>'quantvalue',
				'style' => 'width:45px;margin:0px;padding:0px;height:20px;border-radius:0px;
				            text-align:center;',
				'value'=>'1'
				);
				echo form_input($quantval);

	            $quantpdata = array(
				'name'     => 'plubtn',
			 	'id'       => 'plubtn',
			 	'type'     => 'button',
			 	'content'  => '+',
				 	
				);
				echo form_button($quantpdata);?>

				<script type="text/javascript">

				var minbn = document.getElementById('minbtn');
				var plubn = document.getElementById('plubtn');
				var quantval = document.getElementById('quantvalue');
				var count = quantval.value;

				minbn.onclick =function(){
				count--;
				if(count< 1){
				count=1;
				}
				quantval.value = count;
				return false;
				}


				plubn.onclick = function(){
				count++;
				quantval.value = count;
				return false;
				}
				
				</script>

					<br>
				<?php
				$cartdata = array(
				'name'     => 'cartbtn',
			 	'id'       => 'cartbtn',
			 	'type'     => 'submit',
			 	'content'  => '<i style="color: white;" class="fas fa-shopping-cart">Comprar</i>',
			 	'style'		=>'background-color:#FFC300; border:none; margin-top:20px;margin-left:2px; padding:10px;',
			 	'value'=>$row->EventID);
					 	
				
			  	echo form_button($cartdata);

			  	echo form_close(); 
			  	?>

										
					</div>
					<br>
					<br>
		</div>
	
	</div>
    <br><br><br><br>
    <div style="margin-left:6%;"class="row" >
				<ul style="list-style:none;float:left;text-decoration: none;padding-bottom: 0px;margin-bottom: 0px;">
					    <li ><a style="background-color:#FFC300;margin:0;padding: 13%;width:20%;"href="#patro">PATROCINANTES</a></li>
					    <li ><a style="background-color:#FFC300;padding: 15%;width:22%;"href="#encardo">ENCARGADOS</a></li>
					    <li ><a style="background-color:#FFC300;padding: 15%;width:22%;"href="#descri">DESCRIPCION </a></li> 
				</ul>
						
					</div>
						<br>
						<br>
						<br>
						<br>
						<br>
					<div class="row" style="width:80%;">
						<section class="switchtab">	

						    <section style="padding:2%;"id="descri">
						      
						        <p><?php echo $row->Description?></p>
						    </section>
						    <section id="encardo">
						      
						        <p><?php echo $row->Responsible?></p>
						    </section>
						    <section id="patro">
						      
						        <p>PATROCINANTES</p>
						    </section>
					</section>
				</div>
			</div>
		<?php } ?>
    

				<div class="rectangle" style="padding-left: 400px; top: 1000px;" >

					 <p style="float: left;"> <i class='far fa-paper-plane'> </i>Registrese para recibir un <br>boletin</p>
			         
  					<input type="text" placeholder="Introduce tu correo electrónico" name="search">
 					 <button type="submit">Suscribir</button>
					
				</div>
	    
			</body>
	</head>
	</html>

