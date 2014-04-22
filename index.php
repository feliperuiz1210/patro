<?php
    require_once 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="iso-8859-1"/>
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
				<li><A href="index.php">Principal</A></li>
				<li><A href="registrouser.php" >Registrese</A></li>
			</ul>
		</nav>
		<section id="seccion">
                 <h1>Articulos</h1>   
                    <?php
                        $obj_conex=new Conexion();
                        $sql="select * from articulos";
                        $datos=$obj_conex->get_resultados_query($sql);
                        foreach ($datos as $fila){                    
                           echo " 
                            <article>
				<div>
                                    <hgroup>
                                        ";
                                            echo '<img class="imagprin" src="img/'.$fila["imagen"].'">';
                                            echo $fila["nombre"]."<br>";
                                            echo $fila["descripcion"]."<br>";
                                            echo $fila["contacto"]."<br>";
                                            echo $fila["valor"]."<br>";                                                  
                                        echo " 
                                        </hgroup>	
				</div>

                            </article>";                                       
                            }
                        ?>
		</section>
		<aside id="columna">
			<article id="registro1">
                            <form method="POST" action="ingreso.php">
				<p><label>Usuario:&nbsp;</label> <input class="textbox1" type="text" name="codiusua" class="cajas1" />  </p>
				<p><label>Pass:&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox1" type="password" name="pass" class="cajas1" />  </p>
				<button type="submit" class="btn1">Enviar</button>
                            </form> 
			</article>
		</aside>		
		<footer id="pie">
			<small>Derechos Reservados &copy; 2014 </small>
			<address>
				<a href=”http://www.loquesea.com”>Carlos Campos & Jose Dussan</a>
			</address>
		</footer>
	</div>
</body>
</html>