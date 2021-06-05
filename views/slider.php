<?php 
  

 $noticias_slide = obtenerNoticias(3,$conexion);

?>

        <div class="container-fluid hero p-0">
            
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <?php $clase = "active";?>
                  <?php foreach($noticias_slide as $noticia_slide):?>
                    
                    <div class="carousel-item <?php echo $clase;?> ">
                      <a href="noticia.php?id=<?php echo $noticia_slide['id_noticia'];?>">
                        <?php 
                          if($clase == "active"){
                            $clase = "";
                          }
                        ?>
                        <img class="d-block w-100 img-fluid" src="<?php echo $noticia_slide['imagen_noticia'];?>" alt="First slide">
                        <h3 class="carousel-caption text-uppercase">
                          <?php echo $noticia_slide['titulo_noticia']?>
                        </h3>
                      </div><!--.carousel-item-->
                    <?php endforeach;?>
                    </a>
            </div><!--.carouselExampleIndicators-->

                  
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!--.carousel-inner -->
             
        </div><!--.HERO-->
       
       