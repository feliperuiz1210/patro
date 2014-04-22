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

$usuario = $_POST["usuario"];  
$email = $_POST["email"];  
$nombres = $_POST["nombres"];  
$apellidos = $_POST["apellidos"];
$contra = $_POST["contra"];
// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['usuario']) && !empty($_POST['usuario']) 
   && isset($_POST['email']) && !empty($_POST['email'])
   && isset($_POST['nombres']) && !empty($_POST['nombres'])
   && isset($_POST['apellidos']) && !empty($_POST['apellidos'])
   && isset($_POST['contra']) && !empty($_POST['contra'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "INSERT INTO USUARIOS (usuario,email,nombres,apellidos,pass) VALUES ('$usuario','$email','$nombres','$apellidos','$contra')"; 
    $obj_conex->ejecutar_query($_GRABAR_SQL); 
    //echo " <p>Los datos han sido guardados con exito.</p>  
    //<p><a href='registro.php'>VOLVER A REGISTRO</a></p>  
    //";  
    //echo "<script>alert('Los datos han sido guardados con exito.');</script>";
    //redirect('registro.php');
    //alert('Los datos han sido guardados con exito');
    echo "<script>
    
    window.location.href='registro.php';
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


