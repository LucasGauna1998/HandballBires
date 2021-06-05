<?php 
    


    include 'header.php';
    include 'slider.php';
    
?>

        <div class="container news">
            <div class="row mt-3">
                <div class="col-12 col-md-8">
                    <h3 class="text-uppercase titular">Noticias</h3>
                    <div class="row">
                      <?php include 'noticias.view.php';?>
                    </div><!--.row-->
                </div><!--.col-12-->
                <div class="col-12 col-md-4">
                    <div class="container tweets">
                        <a data-tweet-limit="3"class="twitter-timeline" href="https://twitter.com/handball_baires?ref_src=twsrc%5Etfw">Tweets by handball_baires</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                     </div><!--.container tweets-->
                </div><!--.col-12 -->
            </div><!--.row-->

            <div class="row">
                <div class="col-8">
                    <?php  include 'paginacion.php'; ?>
                </div><!--.col-8-->
            </div><!--.row-->
            </div><!--.container-news -->
            <div class="container">
                
            </div>
        <div class="container-fluid contactanos my-5">
            <div class="row">
                <div class="col-sm-12 col-md-3 p-0 contenedor-imagen-contacto">
                    <div class="imagen-contacto">
                        <h4 class="">Contacto</h4>
                        <p> <span class="fa fa-envelope"></span> Escribenos</p>
                        <p> <span class="fa fa-phone"></span> Llamanos</p>
                    </div><!--.imagen-contacto-->
                </div><!--.col-sm-12-->

                <div class="col-sm-12 col-md-3 p-0 img-direccion">
                    <h4>Club Nueva Generacíon</h4>
                    <p>Quintino Bocayuba 1241, CABA</p>
                    <div class="contenedor-mapa">
                        <div id="map">
                        
                        </div>
                    </div>
                </div><!--.col-sm-12-->

                <div class="col-sm-12 col-md-3 p-0">
                    <div class="video">
                        <video autoplay loop muted>
                            <source src="img/video-index.mp4" type="video/mp4">
                            <source src="img/video-index.webm" type="video/web">
                            <source src="img/video-index.ogv" type="video/ogv">
                        </video>
                    </div>
                </div><!--.col-sm-12-->

                <div class="col-sm-12 col-md-3 p-0">
                    <div class="sociales">
                        <h4 class="text-center text-uppercase">Seguínos</h4>
                        <ul class="redes-sociales">
                            <li class="social-icon twitter-icon"><i class="fab fa-twitter"></i></li>
                            <li class="social-icon instagram-icon"><i class="fab fa-instagram"></i></li>
                            <li class="social-icon facebook-icon"><i class="fab fa-facebook-f"></i></li>
                            <li class="social-icon youtube-icon"><i class="fab fa-youtube"></i></li>
                            <li class="social-icon tiktok-icon"><i class="fab fa-tiktok"></i></li>
                            <li class="social-icon twitch-icon"><i class="fab fa-twitch"></i></li>
                        </ul>
                    </div><!--.sociales -->
                </div><!--.col-3 -->
            </div><!--.row -->
        </div><!-- .container -->

<?php 
    
    include 'sponsors.php';
    include 'footer.php';
    
?>

