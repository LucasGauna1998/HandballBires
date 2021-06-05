<?php 

    include '../funciones.php';
    include 'config.php';

    $conexion = conexion($bd_config);

    $id = limpiarDatos($_GET['id']);

    if (!$id) {
        header('Location: index.php');
    }

    if (elimarNotcia($id,$conexion)) {
       
     
        header("Location: http://localhost/handballBairresLimpio/admin/noticia.panel.php");
    }

?>