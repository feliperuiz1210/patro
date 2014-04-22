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

$nombre = $_POST["nombre"];  
$descripcion = $_POST["descripcion"];  
$imagen = $_POST["imagen"];  
$contacto = $_POST["contacto"];
$valor = $_POST["valor"];
// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['nombre']) && !empty($_POST['nombre']) 
   && isset($_POST['descripcion']) && !empty($_POST['descripcion'])
   && isset($_POST['imagen']) && !empty($_POST['imagen'])
   && isset($_POST['contacto']) && !empty($_POST['contacto'])
   && isset($_POST['valor']) && !empty($_POST['valor'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "INSERT INTO articulos (nombre,descripcion,imagen,contacto,valor) VALUES ('$nombre','$descripcion','$imagen','$contacto','$valor')"; 
    $obj_conex->ejecutar_query($_GRABAR_SQL); 
    //echo " <p>Los datos han sido guardados con exito.</p>  
    //<p><a href='registro.php'>VOLVER A REGISTRO</a></p>  
    //";  
    //echo "<script>alert('Los datos han sido guardados con exito.');</script>";
    //redirect('registro.php');
    echo "<script>
    
    window.location.href='cargar.php';
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


