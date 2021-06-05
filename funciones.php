<?php 
    function conexion ($bd_config) {

        try {
            $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass'] );

            return $conexion;
    
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    };

    function limpiarDatos ($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);

        return $datos;
    };
    
    function pagina_actual(){
        return isset($_GET['p']) ? (int)$_GET['p'] : 1;  
    };

    function obtenerNoticias ($post_por_pagina, $conexion) {
        $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina  : 0;

        $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM noticias LIMIT $inicio, $post_por_pagina");

        $sentencia->execute();

        return $sentencia->fetchAll();   
    };

    function id_noticia ($id_noticia) {
        return (int)limpiarDatos($id_noticia);
    }

    function obtenerNoticia($conexion, $id) {
        $resultado = $conexion->query("SELECT * FROM noticias WHERE id_noticia = $id LIMIT 1");

        $resultado = $resultado->fetchAll();

        return ($resultado) ? $resultado : false;
    }

    function fecha($fecha) {
        $timestamp = strtotime($fecha);
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ];

        $dia = date('d', $timestamp);

        $mes = date('m', $timestamp) - 1;

        $year = date('Y', $timestamp);

        $fecha = "$dia de " . $meses[$mes]  . " del $year";

        return $fecha;
    }

    function numero_paginas($post_por_pagina,$conexion) {
        $total_post = $conexion->prepare ("SELECT count(*) FROM noticias as total");
        $total_post->execute();
        $total_post = (int) $total_post->fetch()['count(*)'];


       
        $numeros_paginas = ceil ($total_post / $post_por_pagina);

        return $numeros_paginas;
    }

    function insertarNoticia ($noticia, $conexion) {
        try {
            

            $stmt = $conexion->prepare('INSERT INTO noticias (id_noticia, titulo_noticia, extracto_noticia,fecha_noticia, texto_noticia, imagen_noticia, imagen_mini) VALUES( null, :titulo_noticia, :extracto_noticia, null , :texto_noticia, :imagen_noticia, :imagen_mini) ');


            $stmt->execute(array (
                ":titulo_noticia" => $noticia['titulo'],
                ":extracto_noticia" => $noticia['extracto'],
                ":texto_noticia" => $noticia['noticia'],
                ":imagen_noticia" => $noticia['imagen'],
                ":imagen_mini" => $noticia['imagen_mini']
            ));

            if ($stmt->rowCount()) {
                $respuesta = array(
                    "respuesta" => "correcto"
                );
            }
           return true;

        } catch (Exception $e) {
            echo $e->getMessage();
        } 
    }

    function editarNoticia($id, $noticia, $conexion) {
        $stmt = $conexion->prepare("UPDATE noticias SET titulo_noticia = :titulo_noticia, extracto_noticia =:extracto_noticia, texto_noticia = :texto_noticia, imagen_noticia = :imagen_noticia, imagen_mini = :imagen_mini WHERE id_noticia = $id");
        print_r($noticia);

        $stmt->execute(array(
            ":titulo_noticia" => $noticia['titulo'],
                ":extracto_noticia" => $noticia['extracto'],
                ":texto_noticia" => $noticia['noticia'],
                ":imagen_noticia" => $noticia['imagen'],
                ":imagen_mini" => $noticia['imagen_mini'])
        );
        return true;
    }
    function elimarNotcia($id, $conexion){
        $stmt = $conexion->prepare("DELETE FROM noticias WHERE id_noticia = $id");


        if($stmt->execute()) {
            return true;
        }


        
    }
    function noticiasSlider($conexion){
        $resultado = $conexion->query("SELECT * FROM noticias LIMIT 3");

        $noticiasSlider = $resultado->fetchAll();
        return $noticiasSlider;
    }

  
?>