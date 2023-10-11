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
	<title>EXAMEN INF-324</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="with=divice-whidth">
	<meta name="description" content="Diseño y Desarrollo Web">
	<meta name="keywords" content="diseño web, desarrollo web, seo, posicionamiento web">
	<meta name="author" content="Render2Web">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<body>
<?php
	if(isset($_SESSION['usuario']) && $colorUsuario !== null){
	?>
		<footer style = "background-color: <?php  echo $colorUsuario;?>">
	<?php
    }else{
	?> <footer style = "background-color: #18191a;"> <?php
	}
	?>
		<p>Examen INF 324 Progrmacion Multimedial &copy; II/2023</p>
	</footer>	

</body>
</html>
