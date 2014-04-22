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

$asunto = $_POST["asunto"];  
$nombre = $_POST["nombre"];  
$email = $_POST["email"]; 
$telefono = $_POST["telefono"]; 
$detalle = $_POST["detalle"]; 

// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['asunto']) && !empty($_POST['asunto']) 
   && isset($_POST['nombre']) && !empty($_POST['nombre'])
   && isset($_POST['email']) && !empty($_POST['email'])
   && isset($_POST['telefono']) && !empty($_POST['telefono'])
   && isset($_POST['detalle']) && !empty($_POST['detalle'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "INSERT INTO contactenos (asunto,nombre,email,telefono,detalle) VALUES ('$asunto','$nombre','$email','$telefono','$detalle')"; 
    $obj_conex->ejecutar_query($_GRABAR_SQL); 
    //echo " <p>Los datos han sido guardados con exito.</p>  
    //<p><a href='registro.php'>VOLVER A REGISTRO</a></p>  
    //";  
    //echo "<script>alert('Los datos han sido guardados con exito.');</script>";
    //redirect('registro.php');
    echo "<script>
    
    window.location.href='contactenos.php';
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


