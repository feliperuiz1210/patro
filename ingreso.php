<?php
require_once 'php/conexion.php';
?>

<html>  

<head>  
<title>Borramos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

// Recibimos por POST los datos procedentes del formulario  

$codiusua = $_POST["codiusua"];
$pass = $_POST["pass"];  

// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['codiusua']) && !empty($_POST['codiusua']) 
   && isset($_POST['pass']) && !empty($_POST['pass'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "select codiusua,pass,usuario from USUARIOS where usuario='".$codiusua."' and pass='".$pass."'"; 
    $datos=$obj_conex->get_resultados_query($_GRABAR_SQL);
    if (! $datos){
                     echo "<script>
                            window.location.href='index.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                            window.location.href='indexlog.php';
                            </script>";
                        }
    //echo " <p>Los datos han sido guardados con exito.</p>  
    //<p><a href='registro.php'>VOLVER A REGISTRO</a></p>  
    //";  
    //echo "<script>alert('Los datos han sido guardados con exito.');</script>";
    //redirect('registro.php');
    //<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> 
    } 
    else {

            //echo "Error, no ha introducido todos los datos";
        //echo "<script>alert('Error, no ha introducido todos los datos.');</script>";
        //redirect('javascript:history.go(-1)');
        echo "<script>
        
        window.location.href='javascript:history.go(-1)';
        </script>";
        }

?>  
</body>  

</html> 


