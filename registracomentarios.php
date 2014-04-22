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

$codiarti = $_POST["codiarti"];  
$comentario = $_POST["comentario"];  
$email = $_POST["email"]; 
// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['codiarti']) && !empty($_POST['codiarti']) 
   && isset($_POST['comentario']) && !empty($_POST['comentario'])
        && isset($_POST['email']) && !empty($_POST['email'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "INSERT INTO comenarti (codiarti,comentario,email) VALUES ('$codiarti','$comentario','$email')"; 
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


