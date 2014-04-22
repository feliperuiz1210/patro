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
				<li><A href="indexlog.php">Principal</A></li>
				<li><A href="cargar.php" >Administraci&oacute;n</A></li>
				<li><A href="contactenos.php" >Contacto</A></li>
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
                                <div>
                                         
                                        <p><a href='comenta.php?codiarti=".$fila["codiarti"]."'>Comentarios</a></p>
                                </div>
                             </article>";                                       
                            }
                        ?>
		</section>
		<aside id="columna">
			<article id="registro1">
                            <h2>Hola: </h2>
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