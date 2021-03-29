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
		<title>Agente </title>

	</head>
	<body class="wrapper">
		<span id="up"></span>
		<div>
			<img class="banner" src="<?php echo base_url();?>/imagenes/bannercontacto.jpg">
			 <div style="padding-left:10px;"class="centered1">REGISTRO DE EVENTO</div>
			 <div class="inicio1"><span style="color: #FFC300;padding-left:20px;">EVENTOS</span> &nbsp REGISTRO</div>
			 
		</div>

		<?php echo form_open('Homeagent/validmodify');
		foreach ($modifyevent->result() as $row)
        		{  
?>
		
		<div  class="classform">
				<br>
				 <br>
				 <br>
				 <br>
			<div class="row">
					
					<div style="width: 800px;margin:30px;" class="contactform">
						<div class="row">
							<h3>Registro de Evento</h3>
							<hr color="#F0F0F0">
							<div  style="width:60%;"class="column">
					
								<label for="ename">Nombres</label>
							    <br>
							    <?php echo form_input(array(
						        	'type' =>'text',
						        	'id'=>'ename',
						        	'name'=>'ename',
						        	'value'=>$row->Eventname,
						        	'style'=>'width:100%; font-size: 70%;border:1px solid #F0F0F0;border-radius: 0px;',
						        	'placeholder'=>'Nombre del Evento'
						        	));
						        	echo form_error('ename');?>
						
							    <br>
							    <div><label for="respo">Responsable</label>
							    <br>
							    <?php echo form_input(array(
						        	'type' =>'text',
						        	'id'=>'respo',
						        	'name'=>'respo',
						        	'value'=>$row->Responsible,
						        	'style'=>'width:100%;font-size: 70%;border:1px solid #F0F0F0;border-radius: 0px;',
						        	'placeholder'=>'Nombre del Resposnable'
						        	));
						        	echo form_error('respo');?>

							 
								</div>
							</div>
							<div style="width:40%;" class="column">
								 '<img src="<?php echo base_url();?>/imagenes/imagensubir.png" style="width:100px; height:100px; margin-left:75px; "class="indimage">
								<br>
																
						<input style="width:170px;padding:5px;margin: 0px;margin-left:45px;"type="submit" value="Seleccionar Imagen">
						
							</div>
						</div>

						<div style="margin: 10px; " class="row">
							 <br>
						    <label for="place">Lugar</label>

						    <br>
						    <?php echo form_input(array(
						        
						        	'id'=>'place',
						        	'name'=>'place',
						        	'type'=>'text',
						        	'value'=>$row->Place,
						        	'style'=>'width:99%;border:1px solid #F0F0F0;font-size: 70%;border-radius: 0px;',
						        	'placeholder'=>'Direccion del Lugar del Eventos'
						        	));
						        	echo form_error('place');?>

							<br>
							<br>
							<br>
						    <label for="date">Fetcha</label>
						     <label style=" padding-left:225px;"for="time">Hora</label>
						      <label style="padding-left:228px;" for="price"> Volar de Boleto</label>
						    <br>
						    <?php echo form_input(array(
						    	'id' => 'edate',
						    	 'name' => 'edate',
						    	'placeholder'=>'00/00/0000',
						    	'value'=>$row->Date,
						    	'type'=> 'date',
						    	'style' => 'width: 32.75%;height: 40px;font-size: 70%;border:1px solid #F0F0F0;border-radius: 0px;padding:8px;' )); ?>


						    <?php echo form_input(array(
						    	'id' => 'etime', 
						    	'name' => 'etime',
						    	'placeholder'=>'00:00',
						    	'value'=>$row->Time,
						    	'type'=> 'time',
						    	'style' => 'width: 32.75%;height: 40px;font-size: 70%;border:1px solid #F0F0F0;border-radius: 0px;padding:8px;' )); ?>


						      <?php echo form_input(array(
						        
						        	'id'=>'price',
						        	'name'=>'price',
						        	'value'=>$row->Ticket_value,
						        	'style'=>'width: 32.75%;height: 38px;font-size: 70%;border:1px solid #F0F0F0;border-radius: 0px;padding:8px;',
						        	'placeholder'=>'$000.00'
						        	
						        	));
						     echo form_error('price');
						  ?>
						    
						    <br>
						     <br>
						     <?php echo form_button(array(
				            	'name'=>'gsubmit',
				            	'id'=>'gsubmit',
				            	'type'=>'submit',
				            	'value'=>$row->EventID,
				            	'content'=>'Guardar',
				            	'style'=>'margin-left:40px;width:150px;border:none;border-radius:10px;color:white;background-color:#ffc300;'
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
