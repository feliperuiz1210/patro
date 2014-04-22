<?php
require_once 'php/conexion.php';
?>


<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8"/>
	<title>Loquesea.com</title>
	<link rel="stylesheet" href="css/style.css">

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
			<h1>Cargar Articulos</h1>
				<article id="registro">
                                    <form action="upload.php" method="post" enctype="multipart/form-data"> 
					<p><label>Producto:&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="nombre" class="cajas" />  </p>
					<p><label>Descripci&oacuten: </label> <input class="textbox" type="text" name="descripcion" class="cajas" />  </p>
					
					<p><label>Contacto:&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="contacto" class="cajas" />  </p>
					<p><label>Valor:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="valor" class="cajas" />  </p>
					<p><label>Imagen:&nbsp;&nbsp;&nbsp;&nbsp;</label> <input type="file" name="imagen" />  </p>
                                        
                                        <button type="submit" class="btn" name="action" value="upload">Cargar Articulo</button>
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
                        $sql="select * from articulos";
                        $datos=$obj_conex->get_resultados_query($sql);
                        $control=0;
                        if (! $datos){
                           echo "La consulta SQL contiene errores.";
                           exit();
                        }else {
                            echo "<table><tr><td>CodiArt</td><td>Nombre</td><td>Descripcion</td><td>Imagen</td><td>Contacto</td><td>Valor</td><td></td>
                                 </tr><tr>";
                        //obtenemos los datos resultado de la consulta
                            foreach ($datos as $fila){
                                        $control=$control+1;
                                        echo "<td>".$fila["codiarti"]."</td><td>".$fila["nombre"]."</td>
                                      <td>".$fila["descripcion"]."</td><td>".$fila["imagen"]."</td><td>".$fila["contacto"]."</td><td>".$fila["valor"]."</td><td><a href='borraarticulos.php?codiarti=".$fila["codiarti"]."'>Borrar</a></td>";
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