<?php 
    include 'views/header.php';
    include 'admin/config.php'; 
    include 'funciones.php';
    $conexion = conexion($bd_config);
 
   

    $noticias = obtenerNoticias(6, $conexion);


    

?>


                
            <h3 class="text-uppercase mt-5 title-noticias">Noticias Handball Baires </h3>

                <div class="container">
                
                    <div class="row">
                        <div class="col-12 col-md-8">
                        <div class="noticia-contenido mt-3">
                         <div class="row">
                        <?php foreach($noticias as $noticia):?>
                            <div class="noticia-article row mb-3">
                                <div class="col-8">
                                    <a href="noticia.php?id=<?php echo $noticia['id_noticia']?>">
                                    <img src="<?php echo $noticia['imagen_noticia'];?>" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <h3><?php echo $noticia['titulo_noticia'];?></h3>
                                    <p><?php echo $noticia['extracto_noticia'];?></p>
                                </div>
                            </div>
                            <?php endforeach;?>  
                            </div><!--.row -->
                        </div><!--.noticia-contenido -->
                        </div>
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
                                <p><i class="far fa-clock"></i> Publicado el:  <?php echo fecha($noticia['fecha_noticia']);?></p>
                            </div><!-- col-8 -->
                        <hr>
            
                        <?php endforeach;?>
                    </div>
                        </div>
                    </div>
                    
                     
                </div><!--.container -->
    
<?php 
    include 'views/footer.php';
?>