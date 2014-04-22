<?php
require_once 'php/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8"/>
	<title>Loquesea.com</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="agrupar">
		<header id="cabecera">
			Loquesea.com		
		</header>
		<nav id="menu">
			<ul>
				<li><A href="index.php" >Principal</A></li>
			
                                <li><A href="registrouser.php" >Registrese</A></li>
				<li><A href="contactenos.php" >Contacto</A></li>
			</ul>
		</nav>
		<section id="seccion">
			<h1>Registrar Usuarios</h1>
				<article id="registro">
                                       <form method="POST" action="registrauser.php">  
                                            <p><label>Nombres:&nbsp;&nbsp;</label> <input class="textbox" type="text" name="nombres" class="cajas" />  </p>
                                            <p><label>Apellidos:&nbsp;</label> <input class="textbox" type="text" name="apellidos" class="cajas" />  </p>
                                            <p><label>E-mail:&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="email" name="email" class="cajas" />  </p>
                                            <p><label>Usuario:&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="usuario" class="cajas" />  </p>
                                            <p><label>Contrase&ntilde;a:</label> <input class="textbox" type="password" name="contra" class="cajas"/> </p>
					<button type="submit" class="btn">Crear Cuenta</button>
                                        </form>  
				</article>
		</section>
	

 	
                <footer id="pie">
			<small>Derechos Reservados &copy; 2014 </small>
			<address>
				<a href=âhttp://www.loquesea.comâ>Carlos Campos & Jose Dussan</a>
			</address>
		</footer>
     </div>
</body>
</html>