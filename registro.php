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
			<h1>Registrar Usuarios</h1>
				<article id="registro">
                                       <form method="POST" action="registra.php">  
                                            <p><label>Nombres:&nbsp;&nbsp;</label> <input class="textbox" type="text" name="nombres" class="cajas" />  </p>
                                            <p><label>Apellidos:&nbsp;</label> <input class="textbox" type="text" name="apellidos" class="cajas" />  </p>
                                            <p><label>E-mail:&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="email" name="email" class="cajas" />  </p>
                                            <p><label>Usuario:&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="usuario" class="cajas" />  </p>
                                            <p><label>Contrase&ntilde;a:</label> <input class="textbox" type="password" name="contra" class="cajas"/> </p>
					<button type="submit" class="btn">Crear Cuenta</button>
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
                        $sql="select * from usuarios";
                        $datos=$obj_conex->get_resultados_query($sql);
                        $control=0;
                        if (! $datos){
                           echo "La consulta SQL contiene errores.";
                           exit();
                        }else {
                            echo "<table><tr><td>CodiUsua</td><td>Usuario</td><td>Email</td><td>Nombres</td><td>Apellidos</td><td>Contraseña</td><td>Estado</td><td></td>
                                 </tr><tr>";
                        //obtenemos los datos resultado de la consulta
                            foreach ($datos as $fila){
                                        $control=$control+1;
                                        echo "<td>".$fila["codiusua"]."</td><td>".$fila["usuario"]."</td>
                                      <td>".$fila["email"]."</td><td>".$fila["nombres"]."</td><td>".$fila["apellidos"]."</td><td>".$fila["pass"]."</td><td>".$fila["codiesta"]."</td><td><a href='borra.php?codiusua=".$fila["codiusua"]."'>Borrar</a></td>";
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