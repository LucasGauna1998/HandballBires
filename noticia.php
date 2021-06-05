
<?php
    include 'admin/config.php'; 
    include 'funciones.php';
    $conexion = conexion($bd_config);
    $id_noticia = id_noticia($_GET['id']);
    if (empty($id_noticia)) {
        header('Location: index.php');
    }
    require 'views/header.php';
    

   

    

    
    if (!$conexion) {
        header('Location: error.php');
    }

    $noticia = obtenerNoticia($conexion,$id_noticia);
    $noticia = $noticia[0];
    if(!$noticia) {
        header ('Location: index.php');
    }
    $noticias = obtenerNoticias( 3 , $conexion);


    

?>

    <div class="container-fluid mx-0 contenedor-imagen">
        <img src="<?php echo $noticia['imagen_noticia'];?>" alt="" class="img-fluid fondo-editado">
        <p class="texto-portada-noticia mx-0"><?php echo $noticia['titulo_noticia'];?></p>
    </div>
    
    <div class="container text-center py-5">
       <div class="row">
           <div class="col-12 col-md-8 noticia-contenedor">
               <h2 class="titulo-noticia text-uppercase text-center display-4"><?php echo $noticia['titulo_noticia'];?></h2>
           
                <img src="<?php echo $noticia['imagen_mini']; ?>" alt="" class="img-fluid imagen-noticia">
          
         
                <p class="texto-noticia pt-4"><?php echo $noticia['texto_noticia']; ?></p>
                <p class="fecha">Publicado el <?php echo fecha($noticia['fecha_noticia']);?></p>
            </div><!-- .col-8 -->

            <div class="col-12 col-md-4">
                <h3 class="text-center text-uppercase recientes">Publicados Recientemente</h3>
                <div class="row px-2 ">
                    <?php  foreach($noticias as $noticia):?>
                        
                        <div class="col-4 mb-2">
                            <a href="noticia.php?id=<?php echo $noticia['id_noticia'];?>" class="d">
                            <img src="<?php echo $noticia["imagen_mini"];?>" alt="" class="img-fluid img-sidebar">
                            </a>
                        </div><!-- .col-4  -->

                        <div class="col-8 text-left">
                        <h4 class="titulo-sidebar"><?php echo $noticia['titulo_noticia'];?> </h4>
                            <p class="texto-sidebar"><?php echo $noticia['extracto_noticia']?>...</p>
                            <p><i class="far fa-clock"></i> Publicado el <?php echo fecha($noticia['fecha_noticia']);?></p>
                        </div><!-- col-8 -->
                       <hr>
        
                    <?php endforeach;?>
                </div>
            </div><!--.col-4-->
       </div><!--.row--> 
    </div><!--.container-->

    <div class="container">
        <div class="row text-center">
                <h4 class="text-center">Visita Nuestro Canal</h4>
            <div class="col-sm-12 col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/BmuBGBqzxGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm-12 col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/aROxonY-nmM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    
<?php 

    include 'views/footer.php';
?>


