<?php
	include("con_db.php");
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}	
	$colorUsuario = "";
	if(isset($_SESSION['usuario']) ){
		$usuario = $_SESSION['usuario']; // Supongo que 'usuario' es el nombre del campo en el que se guarda el nombre de usuario
		$sql = "SELECT color FROM Estudiante WHERE usuario = '$usuario'"; // Ajusta el nombre de tu tabla
		$sql1 = "SELECT color FROM Docente WHERE usuario = '$usuario'"; // Ajusta el nombre de tu tabla
		$resultado = mysqli_query($conex, $sql);
		$resultado2 = mysqli_query($conex, $sql1);
		if ($resultado->num_rows>0) {
			$fila = mysqli_fetch_assoc($resultado);
			$colorUsuario = $fila['color'];
		}elseif($resultado2->num_rows>0){
			$fila = mysqli_fetch_assoc($resultado2);
			$colorUsuario = $fila['color'];
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>EXAMEN INF 324</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="with=divice-whidth">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<body>
	<?php
	if(isset($_SESSION['usuario']) && $colorUsuario !== null){
	?>
		<header style = "background-color: <?php  echo $colorUsuario;?>">
	<?php
    }else{
	?> <header style = "background-color: #18191a;"> <?php
	}
	?>
	
		<div class="contenedor">
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="carrera.php">Carrera</a></li>
					<li><a href="kardex.php">Kardex</a></li>
					<li><a href="investiga.php">instituto de investigacion</a></li>
					<?php
					if(!isset($_SESSION['usuario'])){
						?><li><a href="login.php">Login</a></li><?php
					} else {
						?>
						<li><a href="login.php"><?php echo "".$_SESSION['usuario']."";?></a></li>
						<?php
					}
					?>
					
				</ul>
			</nav>
			<div id="marca">
				<h1><span class="resaltado">INF</span> 324</h1>
			</div>
			
		</div>		
	</header>
	
</body>
</html>
