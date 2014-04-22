<?php   

  require_once 'php/conexion.php';

$nombre = $_POST["nombre"];  
$descripcion = $_POST["descripcion"];  
$imagen = $_POST["imagen"];  
$contacto = $_POST["contacto"];
$valor = $_POST["valor"];

if(isset($_POST['nombre']) && !empty($_POST['nombre']) 
   && isset($_POST['descripcion']) && !empty($_POST['descripcion'])
   && isset($_POST['contacto']) && !empty($_POST['contacto'])
   && isset($_POST['valor']) && !empty($_POST['valor'])
        ) 
{
       $status = "";
        if ($_POST["action"] == "upload") {
            // obtenemos los datos del archivo
            $tamano = $_FILES["imagen"]['size'];
            $tipo = $_FILES["imagen"]['type'];
            $archivo = $_FILES["imagen"]['name'];
            $prefijo = substr(md5(uniqid(rand())),0,6);
            $bolean = 0;
            
            if ($archivo != "") {

                $archivo = $prefijo.$archivo;
                $destino =  "img/".$archivo;
                if (move_uploaded_file($_FILES['imagen']['tmp_name'],$destino)) {


                    $con = new conexion();
                    $query = "INSERT INTO articulos (nombre,descripcion,imagen,contacto,valor) VALUES ('$nombre','$descripcion','".$archivo."','$contacto','$valor')"; 
                    $respuesta = $con->ejecutar_query($query);

                    if($respuesta){
                        
                        echo "<script>
                            window.location.href='cargar.php';
                        </script>";
                        
                    }else{
                        echo "<script>
                            window.location.href='cargar.php';
                        </script>";
                    }
                    
                    
                } else {
                   echo "<script>
                            window.location.href='cargar.php';
                        </script>";
                }
            } else {
                echo "<script>
                            window.location.href='cargar.php';
                        </script>";
            }


        }
    }else {

            //echo "Error, no ha introducido todos los datos";
        //echo "<script>alert('Error, no ha introducido todos los datos.');</script>";
        //redirect('javascript:history.go(-1)');
        echo "<script>
        alert('Error, no ha introducido todos los datos');
        window.location.href='javascript:history.go(-1)';
        </script>";
        }
        ?>







