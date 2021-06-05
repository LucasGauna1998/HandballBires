<?php 

    include 'admin/config.php';
    include 'funciones.php';

    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location: error.php');
    }

    $noticias = obtenerNoticias($blog_config['post_por_pagina'], $conexion);
    
    include 'views/index.views.php';

?>

