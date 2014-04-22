<?php
require_once 'php/conexion.php';
if ($_POST['subirBtn']) {
	include_once("class_imgUpldr.php"); 
	$subir = new imgUpldr;
	
	$subir->init($_FILES['imagen']);
}
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

				<li><A href="index.php" >Principal</A></li>
        			<li><A href="cargar.php" >Administraci&oacute;n</A></li>
				<li><A href="contactenos.php" >Contacto</A></li>
			</ul>
		</nav>
		<section id="seccion">
			<h1>Cargar Articulos</h1>
				<article id="registro">
                                    <form id="subirImg" name="subirImg" enctype="multipart/form-data" method="post" action="">
                                    <label for="imagen">Subir imagen:</label>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                    <input type="file" name="imagen" id="imagen" />
                                    <input type="submit" name="subirBtn" id="subirBtn" value="Subir imagen" />
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