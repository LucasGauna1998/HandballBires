<?php 
    
    
   
    
    include 'validar_sesion.php';

    

    if(isset($_GET['cerrar_sesion'])) {
        if ($_GET["cerrar_sesion"] == "true") {
            session_destroy();
            $_SESSION = [];
            
            header("Location: http://localhost/handballBairresLimpio/admin/login.php");
        }
    }
    include '../views/header-panel.php'; 
?>