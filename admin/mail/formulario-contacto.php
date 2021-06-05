<?php 

    $destinatario = "handballbaires@gmail.com";
    $nombre = $_POST["name"];
    $asunto = $_POST["asunto"];
    $correo  = $_POST["email"];
    $mensaje = $_POST["mensaje"];
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