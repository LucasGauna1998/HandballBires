<?php 



function usuario_autenticado(){
    if(!revisar_usuario()){
        header("location: http://localhost/handballBairresLimpio/admin/login.php");
        exit();
    }
}

function revisar_usuario() {
    if($_SESSION['login'] == "true") {
        return true;
    }
}

session_start();
usuario_autenticado();