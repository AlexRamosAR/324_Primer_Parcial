<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(isset($_SESSION['ci_global'])){
    session_destroy();
}	
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD CodeIgniter</title>

	<style type="text/css">

	body{
		font:15px Arial,Helvetica,sans-serif;
		padding: 0;
		margin: 0;
		background-color: #f4f4f4;
	}
	/* Estilos Globales */
	.contenedor{
		width: 80%;
		margin: auto;
		overflow: hidden;
	}
	ul{
		margin: 0;
		padding:0;
	}
	 .boton1{
		background: #222829;
		height: 35px;
		width: 185px;
		border: 1px solid skyblue;

		padding-left: 20px;
		padding-right: 20px;
		color:#fff;
		border-radius: 10px;
	} 
	 .boton2{
		width: 95%;
		background: #222829;
		height: 20px;
		border: 1px solid skyblue;
		padding:8px;
		color:#fff;
		box-shadow: 1px 1px 2px  rgba(87, 232, 230, 1);
		border-radius: 10px;
		text-shadow: 0.5px 0.5px rgba(87, 232, 230, 1);
	} 

	/* Encabezado */
	header{
		
		color: #fff;
		padding-top: 30px;
		min-height: 70px;
		border-bottom: 5px solid #3af3e4;
	}
	header a{
		color: #fff;
		text-decoration: none;
		text-transform: uppercase;
		font-size: 16px;
	}
	header li{
		float: left;
		display: inline;
		padding: 0 20px 0 20px;
	}
	header #marca{
		float: left;
	}
	header #marca h1{
		float: left;
	}
	header nav{
		float: right;
		margin-top: 10px;
	}
	header .resaltado, header .actual a{
		color: #3af3e4;
		font-weight: bold;

	}
	header a:hover{
		color:#3af3e4;
		font-size: bold;
	}

	/*Formulario para boletin*/
	#boletin{
		padding: 15px;
		color: #fff;
		background: #19191a;
	}
	#boletin h1{
		float: left;
	}
	#boletin form{
		float: right;
		margin-top: 15px;
	}
	#boletin input[type="email"]{
		padding: 4px;
		height: 25px;
		width: 250px;
	}
	/*cajas*/
	#cajas{
		margin-top: 20px;
	}
	#cajas .caja{
		float:left;
		text-align: center;
		width: 30%;
		padding: 10px;
	}
	#cajas .caja img{
		width: 90px;
	}

	/* Lateral */
	aside#lateral{
		float: right;
		width: 30%;
		margin-top: 10px;

	}
	.oscuro{
		padding: 15px;
		background-color: #191a1b;
		color: #fff;
		margin-top: 10px;
		margin-bottom: 10px;
		
	}
	/* Main.col */
	article#main-col{
		float:left;
		width: 65%;
	}

	/* Formulario de contacto */
	input, textarea{
		width: 100%;
		height: 35px;
		border: 1px solid gray;
		margin-bottom: 5px;
	}
	textarea{
		height: 120px;
	}
	input[type="submit"]{
		background-color: #e8491d;
		color:white;
	}
	/* Media Queries */
	@media(max-width: 768px){
		header #marca,
		header nav,
		header nav li,
		#boletin h1,
		#boletin form,
		#cajas .caja,
		article#main-col,
		aside#lateral{
			float: none;
			text-align: center;
			width: 100%;

		}
		
		header{
			padding-bottom: 20px;
		}
		#boletin h1{
			margin-top: 40px;

		}
		#boletin button{
			display: block;
			width: 100%;

		}
		#boletin form input[type="email"]{
			width: 100%;
			margin-bottom: 6px;
		}
		input, textarea{
			width: 98%;
		}
	}
	body {font-family: Arial, Helvetica, sans-serif;}

	table {     
		font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    	font-size: 12px;    
    	margin: 10px;     
    	width: 90%; 
    	text-align: left;    
    	border-collapse: collapse; 
    }
	th {     
		font-size: 15px;     
		font-weight: normal;     
		padding: 8px;   
		text-align: center;  
		background: #222829;
  	border-bottom: 4px solid #3af3e4;    
  	border-top: 1px solid #fff; 
  	color: #fff; 
  	border-radius: 3px;
    }
	td {    
		text-align: center;
		padding: 8px;     
		background: #A0DAD9;     
		border-bottom: 1px solid #fff;
  	color: #669;    
    order-top: 1px solid transparent; 
    font-size: 13px;

	}

	tr:hover td { 
		background: #222829; 
		color: #339; 
		border-radius: 5px;
		box-shadow: 10px 20px 20px  rgba(61, 230, 227, 1);
/*		box-shadow: inset 1px 1px 2px  rgba(61, 230, 227, 1);*/

		text-shadow: 0.5px 0.5px rgba(87, 232, 230, 1);
	}
	</style>

</head>
<body>
	<header style = "background-color: #18191a;">
		<div class="contenedor">
			<div id="marca">
				<h1><span class="resaltado">CRUD</span> 324</h1>
			</div>
		</div>		
	</header>
	<section id="boletin">
		<div class="contenedor">
			<h1>Eliminar Estudiante</h1>
			<form >
				<input type="email" name="email" placeholder="Ingrese el CI del Estudiante..">
				<button style="background: orangered; border-radius: 0px;" type="submit" class="boton1">Eliminar</button>
			</form>
		</div>
	</section>
	
	
	<section id="main">
		<div class="contenedor">
			<article id="main-col">
				<h1>Tabla Estudiantes</h1>
				<table >
					<caption><h3>Estudiante</h3></caption>
					<tr> <th>Nombre</th> <th>CI</th> <th>Departamento</th>
					<th>Nota</th> <th>Fecha_Nac</th><th>Sexo</th><th>Modificar</th>
					</tr>
					<?php foreach($estudiante as $est): ?>
				        <tr>
				            <td><?php echo $est->nombre; ?></td>
				            <td><?php echo $est->ci; ?></td>
				            <td><?php echo $est->departamento; ?></td>
				            <td><?php echo $est->nota; ?></td>
				            <td><?php echo $est->fec_nac; ?></td>
				            <td><?php echo $est->sexo; ?></td>
				            <td style="height: 25px;">
					          <?php echo form_open('welcome/eliminar/'.$est->ci) ?>
										    <input style="width: 185px; border-radius: 10px;" type="submit" value="Eliminar">
										<?php echo form_close() ?>									
										<?php 
										    echo '
										    <button type="botton" class="boton1"  name = "actualizar" onclick="llenar_datos(`'.$est->ci.'`, `'.$est->nombre.'`, `'.$est->departamento.'`, `'.$est->fec_nac.'`, `'.$est->sexo.'`)">Actualizar</button>' ;
										?>
		            </td>
						</tr>
				    <?php endforeach; ?>
				</table>		
			</article>
			<aside id="lateral" >
				<div class="oscuro">
					<h3>Registro Estudiante</h3>
					
					<?php 
						echo form_open('welcome/agregar', array('id' =>'actualizacion'));
					?>

						<label >Nombre</label>
						<input class="boton2" type="text" name="nombre" placeholder="Ingrese nombre" id="nombre">
						<br>
						<label >CI</label>
						<input class="boton2" type="text" name="ci" placeholder="Ingrese CI"id="ci">
						<br>
						<label >Departamento</label>
						<input class="boton2" type="text" name="departamento" placeholder="Ingresa el Departamento"id="departamento">
						<br>
						<label >Fecha de nacimiento</label>
						<input class="boton2" type="text" name="fec_nac" placeholder="Ingresa su fecha de nacimiento"id="fec_nac">
						<br>
						<label >Sexo</label><br>
						<input class="boton2" type="text" name="sexo" placeholder="M o F"id="sexo">
						<br><br>
						<input type="submit" name="registrar" value="Añadir">
					<?php echo form_close() ?>
				</div>
			</aside>
		</div>
		
	</section>
	<script>

		// let url = "<?php echo base_url('welcome/editar'); ?>";
		let url = "<?php echo base_url('index.php/welcome/actualizar'); ?>";	
		const llenar_datos = (ci, nombre, departamento, fec_nac, sexo) => {
			let path = url+"/"+ci;
			console.log(path);
			
			document.getElementById('actualizacion').setAttribute('action', path);
			console.log(ci, nombre, departamento, fec_nac, sexo);
			document.getElementById('ci').value = ci;
			document.getElementById('nombre').value = nombre;
			document.getElementById('departamento').value = departamento;
			document.getElementById('fec_nac').value = fec_nac;
			document.getElementById('sexo').value = sexo;
		};

	</script>

</body>
</html>
