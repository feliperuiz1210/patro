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

$codicome = $_GET["codicome"];
$codiarti = $_GET["codiarti"];
 
// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_GET['codicome']) && !empty($_GET['codicome'])) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "delete from comenarti where codicome='".$codicome."'"; 
    $obj_conex->ejecutar_query($_GRABAR_SQL); 
    //echo " <p>Los datos han sido guardados con exito.</p>  
    //<p><a href='registro.php'>VOLVER A REGISTRO</a></p>  
    //";  
    //echo "<script>alert('Los datos han sido guardados con exito.');</script>";
    //redirect('registro.php');
    echo "<script>
    window.location.href='comenta.php?codiarti=$codiarti';
    </script>";
    //<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> 
    } 
    else {

            //echo "Error, no ha introducido todos los datos";
        //echo "<script>alert('Error, no ha introducido todos los datos.');</script>";
        //redirect('javascript:history.go(-1)');
        echo "<script>
        alert('Error, no ha introducido todos los datos');
        window.location.href='javascript:history.go(-1)';
        </script>";
        }

?>  
</body>  

</html> 


