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
				<li><A href="indexlog.php" >Principal</A></li>
			
				<li><A href="cargar.php" >Administraci&oacute;n</A></li>
				<li><A href="contactenos.php" >Contacto</A></li>
			</ul>
		</nav>
		<section id="seccion">
			<h1>Calificaciones</h1>
				<article id="registro">
                                       <form method="POST" action="registracalificaciones.php">  
                                            <p><label>Codigo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="codicali" class="cajas" />  </p>
                                            <p><label>Calificacion:&nbsp;</label> <input class="textbox" type="text" name="calificacion" class="cajas" />  </p>
                                            <p><label>Valor:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="valocali" class="cajas" />  </p>
                                	    <button type="submit" class="btn">Crear Calificacion</button>
                                        </form>  
				</article>
		</section>
                <aside id="columna">
			<blockquote><A href="calificaciones.php" ><label>Calificaciones</label></A></blockquote>
			<blockquote><A href="estados.php" ><label>Estados</label></A></blockquote>
			<blockquote><A href="registro.php" ><label>Usuarios</label></A></blockquote>
			<blockquote><A href="cargar.php" ><label>Articulos</label></A></blockquote>

		</aside>	
                <section id="seccion1">
                    <div class="CSSTableGenerator" >
                    <?php
                        $obj_conex=new Conexion();
                        $sql="select * from califica";
                        $datos=$obj_conex->get_resultados_query($sql);
                        $control=0;
                        if (! $datos){
                           echo "La consulta SQL contiene errores.";
                           exit();
                        }else {
                            echo "<table><tr><td>CodiCali</td><td>Calificacion</td><td>Valor</td><td></td>
                                 </tr><tr>";
                        //obtenemos los datos resultado de la consulta
                            foreach ($datos as $fila){
                                        $control=$control+1;
                                        echo "<td>".$fila["codicali"]."</td><td>".$fila["calificacion"]."</td><td>".$fila["valocali"]."</td>
                                        <td><a href='borracalificaciones.php?codicali=".$fila["codicali"]."'>Borrar</a></td>";
                                           echo "</tr><tr>"; 
                                           $control=1;
                                     }
                                    echo "</tr></table>";
                                }
                    ?>
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