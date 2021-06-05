<?php 
    
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        include 'funciones.php';
        include 'admin/config.php';
        $conexion = conexion($bd_config);

        $titulo = $_POST['titulo_noticia'];

        $extracto = $_POST['extracto_noticia'];

        $texto_noticia = $_POST['texto_noticia'];

        $thumb1 = $_FILES['thumb1']['tmp_name'];

        $archivo_subido1 = 'img/imagenes-noticias/' . $_FILES['thumb1'] ['name'];

        $thumb2 = $_FILES['thumb2']['tmp_name'];

        $archivo_subido2 = 'img/imagenes-noticias/' . $_FILES['thumb2'] ['name'];

        move_uploaded_file($thumb1, $archivo_subido1);
        move_uploaded_file($thumb2, $archivo_subido2);

        $noticia = array(
            "titulo" => $titulo,
            "extracto" => $extracto,
            "noticia" => $texto_noticia,
            "imagen" => $archivo_subido1,
            "imagen_mini" => $archivo_subido2
        );
           
        if (insertarNoticia($noticia, $conexion)){
            header("Location: http://localhost/handballBairresLimpio/admin/noticia.panel.php");
        }
        
    }
?>