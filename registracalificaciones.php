<?php
require_once 'php/conexion.php';
?>

<html>  

<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

// Recibimos por POST los datos procedentes del formulario  

$codicali = $_POST["codicali"];  
$calificacion = $_POST["calificacion"];  
$valocali = $_POST["valocali"]; 
// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['codicali']) && !empty($_POST['codicali']) 
   && isset($_POST['calificacion']) && !empty($_POST['calificacion'])
        && isset($_POST['valocali']) && !empty($_POST['valocali'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "INSERT INTO califica (codicali,calificacion,valocali) VALUES ('$codicali','$calificacion','$valocali')"; 
    $obj_conex->ejecutar_query($_GRABAR_SQL); 
    //echo " <p>Los datos han sido guardados con exito.</p>  
    //<p><a href='registro.php'>VOLVER A REGISTRO</a></p>  
    //";  
    //echo "<script>alert('Los datos han sido guardados con exito.');</script>";
    //redirect('registro.php');
    echo "<script>
    
    window.location.href='calificaciones.php';
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


