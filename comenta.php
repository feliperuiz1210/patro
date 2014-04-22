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
                 <h1>Articulo</h1>   
                    <?php
                        $codiarti = $_GET["codiarti"];
                        $obj_conex=new Conexion();
                        
                        $sql="select * from articulos where codiarti='".$codiarti."'";
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
                            <h2>Hola: </h2>
			</article>
		</aside>		
		<section id="seccion">
			<h1>Comentarios</h1>
				<article id="registro">
                                    <form method="POST" action="registracomentarios.php"> 
					<p><label>Comentario:</label> <input class="textbox" type="text" name="comentario" class="cajas" />  </p>
					<p><label>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="email" name="email" class="cajas" />  </p>
                                        <input type="hidden" name="codiarti" value="<?=$codiarti?>" />                                        
                                        <button type="submit" class="btn" name="action" value="upload">Guardar</button>
                                    </form> 
                              
                                </article>
		</section>
                <section id="seccion1">
                    <div class="CSSTableGenerator" >
                    <?php
                            
                        $obj_conex=new Conexion();
                        $sql="select * from comenarti where codiarti='".$codiarti."'";
                        $datos=$obj_conex->get_resultados_query($sql);
                        $control=0;
                        if (! $datos){
                           echo "No hay registros";
                           exit();
                        }else {
                            echo "<table><tr><td>CodiCome</td><td>CodiArti</td><td>Comentario</td><td>Email</td><td></td>
                                 </tr><tr>";
                        //obtenemos los datos resultado de la consulta
                            foreach ($datos as $fila){
                                        $control=$control+1;
                                        echo "<td>".$fila["codicome"]."</td><td>".$fila["codiarti"]."</td>
                                      <td>".$fila["comentario"]."</td><td>".$fila["email"]."</td><td><a href='borracomentarios.php?codicome=".$fila["codicome"]."?&codiarti=".$fila["codiarti"]."'>Borrar</a></td>";
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
				<a href=”http://www.loquesea.com”>Carlos Campos & Jose Dussan</a>
			</address>
		</footer>
	</div>
</body>
</html>