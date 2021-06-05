<?php
    
    // include 'validar_sesion.php';
 
 
    include 'validar_sesion.php';
    include 'config.php';
    include '../funciones.php';
    $conexion = conexion ($bd_config);
    
    $noticias = obtenerNoticias($blog_config['post_por_pagina'],$conexion);
    // print_r($noticias);
?>

        <?php include '../views/header-panel.php';?>
        <div class="container">
            <a href="formulario-crear-noticia.php" class="btn btn-success">AÑADIR NOTICIA</a>
            <div class="row">
            <?php  foreach($noticias as $noticia) :?>
                <div class="col-12 mt-3">
                    <div class="noticia">
                        <div class="row">
                            <div class="col-6">
                                <div class="imagen-noticia">
                                    <img src="../<?php echo$noticia['imagen_noticia']?>" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="contenido-noticia">
                                    <h2><?php echo $noticia['titulo_noticia'];?></h2>
                                    <p class="texto-noticia"><?php echo $noticia['texto_noticia']; ?></p>
                                    <a href="editar.php?id=<?php echo $noticia['id_noticia'];?>" class="btn btn-warning">EDITAR</a>
                                    <a href="editar-noticia.php?id=" class="btn btn-primary">VER</a>
                                    <a href="borrar.php?id=<?php echo $noticia['id_noticia'];?>" class="btn btn-danger btn-eliminar" id="btn-eliminar" data-id="<?php echo $noticia['id_noticia'];?>">ELIMINAR</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col-12-->
            <?php endforeach; ?>
            </div>

        </div> 
        <!--Optional JavaScript-->
        <!--jQuery first, then Popper.js, then Bootstrap JS-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../js/alert.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>