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
			<h1>Contactenos</h1>
			<article id="registro">
			<form method="POST" action="registracontacto.php"> 	
                            <p><label>Asunto:&nbsp;&nbsp;</label> <input class="textbox" type="text" name="asunto" class="cajas" />  </p>
				<p><label>Nombre:&nbsp;</label> <input class="textbox" type="text" name="nombre" class="cajas" />  </p>
				<p><label>E-mail:&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="email" name="email" class="cajas" />  </p>
				<p><label>Telefono:&nbsp;</label> <input class="textbox" type="tel" name="telefono" class="cajas" />  </p>
				<p><label>Detalle:&nbsp&nbsp&nbsp</label> <input class="textbox" type="text" name="detalle" class="cajas"/> </p>
				<button type="submit" class="btn">Enviar</button>
			</form>
                        </article>
		</section>
		<aside id="columna">
			<figure>
				<img src="img/contactenos.jpg">
			</figure>
		</aside>		
                <section id="seccion1">
                    <div class="CSSTableGenerator" >
                    <?php
                        $obj_conex=new Conexion();
                        $sql="select * from contactenos";
                        $datos=$obj_conex->get_resultados_query($sql);
                        $control=0;
                        if (! $datos){
                           echo "La consulta SQL contiene errores.";
                           exit();
                        }else {
                            echo "<table><tr><td>CodiComent</td><td>Asunto</td><td>Nombre</td><td>email</td><td>Telefono</td><td>Detalle</td><td>Borrar</td>
                                 </tr><tr>";
                        //obtenemos los datos resultado de la consulta
                            foreach ($datos as $fila){
                                        $control=$control+1;
                                        echo "<td>".$fila["codicont"]."</td>
                                      <td>".$fila["asunto"]."</td><td>".$fila["nombre"]."</td><td>".$fila["email"]."</td><td>".$fila["telefono"]."</td><td>".$fila["detalle"]."</td><td><a href='borracontactenos.php?codicont=".$fila["codicont"]."'>Borrar</a></td>";
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
				<a href=Ã¢ÂÂhttp://www.loquesea.comÃ¢ÂÂ>Carlos Campos & Jose Dussan</a>
			</address>
		</footer>
	</div>
</body>
</html>