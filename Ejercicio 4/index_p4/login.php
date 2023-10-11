<?php
	include("con_db.php");
    // Redirige a la página de inicio o a donde sea necesario
?>

<!DOCTYPE html>
<html>
<head>
	<title>EXAMEN INF-324</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="with=divice-whidth">
	
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<body>
	<?php
	include("header.php")
	?>
	<section id="boletin" >
		<div class="contenedor" >
			<form method = "post" style="width: 600px; float: left;">
				<input style="width: 200px" type="text" name="user" placeholder="Usuario">
				<input style="width: 200px" type="password" name="pass" placeholder="Contraseña">
				<?php
					if(!isset($_SESSION['usuario'])){
						// Hay un usuario en sesión, puedes mostrar información específica para usuarios autenticados
						?>
						<input style="width: 100px; height: 39px;" type="submit" name="inicio_ses" value = "Iniciar sesion">
						<?php
					} else {
						// No hay un usuario en sesión, probablemente deberías mostrar un formulario de inicio de sesión
						?>
						<input style="width: 100px; height: 39px;" type="submit" name="inicio_ses" value = "Cerrar sesion">
						<?php
					}
				?>
				<!-- <button type="submit" class="boton1">Iniciar Sesion</button> -->
				<?php
					include("validar_login.php");
				?>
			</form>
			<form method = "post" style="width: 400px; float: center;">
                <input  type="submit" value="Cambiar Color" class = "boton1" name = "cambio_col">
				<?php
					include("cambiar_color.php");	
				?>
                <select id="colores" name ="select_color">
                    <option value="#FF5733">Rojo</option>
                    <option value="#35942d">Verde</option>
                    <option value="#2a0c7c">Azul</option>
                </select>
            </form>
		</div>
	</section>
	
	<section id="main">
		<div class="contenedor">
			<article id="main-col">
					<div>
						<?php
						include("promedio.php");
						?>
					</div>
					<?php 
					if(isset($_SESSION['usuario'])){
						$usuario = $_SESSION['usuario'];
						$sql2 = "SELECT * FROM Docente WHERE usuario = '$usuario' " ;
						$result2 = mysqli_query($conex, $sql2);
						if($result2->num_rows>0){
							?>
							<br>
							<form method = "post" action="">
								<input style="background: #19191a;  width: 300px; "type="submit" name="mos_notas" value="Mostrar promedios por departamento" >
								<h3>Resolucion por ArrayS</h3>
							</form>
							<?php
						}
					}		
					?>
					
				<h1></h1>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa doloribus enim animi voluptatem sit aliquam molestiae praesentium cumque, optio possimus facilis inventore dolore sed esse dolorum blanditiis molestias laboriosam quas.
					</p>
					<img id="main-col" src="img/registro.jpg" width="700">
			</article>
			<aside id="lateral">
				<div class="oscuro">
					
					<h3>Registro</h3>
					<form  method="post">
						<label >Nombre</label>
						<input type="text" name="id_viaje" placeholder="Nombre">
						<br>
						<label >CI</label>
						<input type="text" name="destino" placeholder="CI">
						<br>
						<label >Contraseña</label>
						<input type="password" name="horario" placeholder="Contraseña">
						<br><br><br>
						<input type="submit" name="registrar" value = "Registrar">
						
					</form>		
				</div>
			</aside>
		</div>
		
	</section>
	<?php
	include("footer.php")
	?>
</body>
</html>
