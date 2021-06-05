<?php 
    include 'config.php';
    include '../funciones.php';
    $conexion = conexion($bd_config);

    $email = $_POST['email'];

    $password = $_POST['password'];

    $accion = $_POST['accion'];
    


    if ($accion == "login") {

        if($conexion){
            $stmt = $conexion->prepare("SELECT * FROM users WHERE email = :email");

            $stmt->execute(array(
                ":email" => $email
            ) );
            
            
            $respuesta = $stmt->fetch();
            
            $passwordDB = $respuesta['password'];
            
            if ($password == $passwordDB) {
                session_start();

                $_SESSION["login"] = "true";

                header("Location: http://localhost/handballBairresLimpio/admin/index.php");
            }else {
                header("Location: http://localhost/handballBairresLimpio/admin/login.php");
            }
            

        }

        

        




        

    }


?>

