<?php 

    
    include '../funciones.php';
    include 'config.php';
    
    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location: error.php');
    }
    
    // $noticia = $noticia[0];
    
    $id_noticia = (int)$_GET['id'];
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $titulo = $_POST['titulo_noticia'];
        $extracto = $_POST['extracto_noticia'];
        $texto = $_POST['texto_noticia'];
        $thumb_guardada1 = $_POST['thumb1_guardada'];
        $thumb1 = $_FILES['thumb-editada-1']['name'];
        $thumb_guardada2 = $_POST['thumb2_guardada'];
        $thumb2 = $_FILES['thumb-editada-2']['name'];
        echo $thumb1;
        echo $thumb2;

        if ($thumb1 == "") {
            $archivo_subido1 = $thumb_guardada1;
        }else {
            echo $thumb1;
            $archivo_subido1 = 'img/imagenes-noticias/'.$_FILES['thumb-editada-1']['name'];
            move_uploaded_file($_FILES['thumb-editada-1']['tmp_name'], $archivo_subido1);
           
        }
        if ($thumb2 == "") {
            $archivo_subido2 = $thumb_guardada2;
        }else {
            echo $thumb2;
            $archivo_subido2 = 'img/imagenes-noticias/' . $_FILES['thumb-editada-2'] ['name'];
            move_uploaded_file($_FILES['thumb-editada-2']['tmp_name'], $archivo_subido2);
            
        }

        $noticia_editada = array(
            'titulo' => $titulo,
            'extracto' => $extracto,
            'noticia' => $texto,
            'imagen' => $archivo_subido1,
            'imagen_mini' => $archivo_subido2
        );
        if(editarNoticia($id_noticia,$noticia_editada,$conexion)){
            header("location: http://localhost/handballBairresLimpio/admin/noticia.panel.php");
        }
        
    }else {
        
        if (empty($id_noticia)){
            header('Location: index.php');
        }
        
    }
    $noticia = obtenerNoticia($conexion,$id_noticia);
    $noticia = $noticia[0];
    if(!$noticia) {
        
    }
    include '../views/editar.view.php';
    
?>


