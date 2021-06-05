<?php 

    $destinatario = "handballbaires@gmail.com";
    $nombre = $_POST["name"];
    $apellido = $_POST["apellido"];
    $correo  = $_POST["email"];
    $telefono = $_POST["telefono"];
    $nombreEquipo = $_POST["nombre_equipo"];
    $header = "Enviado desde Handballbaires.com";
    $mensajeCompleto = $mensaje. "\nEmail: " . $correo . "\nNombre: " .$nombre;  

    $enviado = mail($destinatario, $asunto, $mensajeCompleto, $header);

    if($enviado) {
        echo "<div class='mensaje-correcto'> 
                <h3>Su consulta fue enviada con exito!</h3>
             </div>";
        echo "<script>
                setTimeout(()=> {
                    location.reload();
                },2000)
            </script>";
    }


?>