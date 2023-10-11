﻿<%@ Page Language="VB" AutoEventWireup="false" CodeFile="Default.aspx.vb" Inherits="_Default" %>


<!DOCTYPE html>
<html>
<head>
	<title>EXAMEN INF 324</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="with=divice-whidth">
	
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<body>
	<header style="background-color: #18191a;">

		<div class="contenedor">
			<nav>
				<ul>
					<li><a href="Default.aspx">Inicio</a></li>
					<li><a href="carrera.aspx">Carrera</a></li>
					<li><a href="kardex.aspx">Kardex</a></li>
					<li><a href="investiga.aspx">instituto de investigacion</a></li>
					<li><a href="login.aspx">Login</a></li>
				</ul>
			</nav>
			<div id="marca">
				<h1><span class="resaltado">INF</span> 324</h1>
			</div>

		</div>
	</header>
	<section id="boletin" >
		<div class="contenedor" >
			<form method = "post" style="width: 600px; float: left;">
				<input style="width: 200px" type="text" name="user" placeholder="Usuario">
				<input style="width: 200px" type="password" name="pass" placeholder="Contraseña">
				
				<input style="width: 100px; height: 39px;" type="submit" name="inicio_ses" value = "Iniciar sesion">
	
			</form>
			<form method = "post" style="width: 400px; float: center;">
                <input  type="submit" value="Cambiar Color" class = "boton1" name = "cambio_col">
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
				<h1></h1>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa doloribus enim animi voluptatem sit aliquam molestiae praesentium cumque, optio possimus facilis inventore dolore sed esse dolorum blanditiis molestias laboriosam quas.
					</p>
					<img id="Img1" src="img/registro.jpg" width="700">
			</article>
			<aside id="lateral">
				<div class="oscuro">
					<h3>Registro</h3>
					<form  method="post">
						<label >Nombre</label>
						<input type="text"  placeholder="Nombre">
						<br>
						<label >CI</label>
						<input type="text"  placeholder="CI">
						<br>
						<label >Contraseña</label>
						<input type="password"  placeholder="Contraseña">
						<br><br><br>
						<input type="submit"  value = "Registrar">
						
					</form>		
				</div>
			</aside>
		</div>
	</section>
	<footer style="background-color: #18191a;">
		<p>Examen INF 324 Progrmacion Multimedial &copy; II/2023</p>
	</footer>
</body>
</html>
