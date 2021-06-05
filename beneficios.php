<?php 

    include 'views/header.php';
    
?>
    <div class="container-fluid mx-0 px-0 beneficio-hero hero-portada">
        <div class="contenedor-hero">
            <p>beneficios</p>
        </div>
    </div>

    <div class="container beneficios"> 
            <h4 class="text-center display-2 text-uppercase">Beneficios</h4>
        <div class="row">

            <div class="col-12 col-md-6 mb-5">
                <div class="contenedor-beneficio">
                    <img src="img/imagens para WEB/camisetas-promo.jpg" alt="" class="img-fluid">
                    
                    <div class="info-beneficio">
                        <p class="text-beneficio">Indumentaria</p>
                        <p class="descuento-beneficio">10%</p>
                    </div>
        
                    <a href="#" class="btn-beneficio" data-toggle="modal" data-target="#modal-indumentaria">Quiero Mi Beneficio</a>
                </div>
                <div id="modal-indumentaria" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-center"> Beneficios en indumentaria</h3>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST">

                                    <input type="text" placeholder="ingrese su nombre" name="name">
                                    <hr>
                                    <input type="text" placeholder="Ingrese su email para recibir su beneficio">
                                    <hr>
                                    <input type="submit" name="" id="" value="Quiero Mi Beneficio" class="btn btn-enviar">
                                    <hr>
                                    <input type="hidden" value="INDUMENTARIA" name="beneficio">
                                </form>
                            </div>
                        </div>
                    </div><!--.modal-dialog -->
                </div><!--#modal-indumentaria -->
            </div> <!--.col-12 -->

            <div class="col-12 col-md-6 mb-5">
                <div class="contenedor-beneficio">
                    <img src="img/imagens para WEB/fundas.jpg" alt="" class="img-fluid">
                    
                    <div class="info-beneficio">
                        <p class="text-beneficio">Celulares</p>
                        <p class="descuento-beneficio">10%</p>
                    </div>

                    <a href="#" class="btn-beneficio" data-toggle="modal" data-target="#modal-funda">Quiero Mi Beneficio</a>
                </div>
                <div id="modal-funda" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h3 class="modal-title text-center"> Beneficios en Fundas</h3>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST">

                                    <input type="text" placeholder="ingrese su nombre" name="name">
                                    <hr>
                                    <input type="text" placeholder="Ingrese su email para recibir su beneficio">
                                    <hr>
                                    <input type="submit" name="" id="" value="Quiero Mi Beneficio" class="btn btn-enviar">
                                    <hr>
                                    <input type="hidden" value="FUNDAS" name="beneficio">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div><!--.col-12 -->

            <div class="col-12 col-md-6 mb-5">
                <div class="contenedor-beneficio">
                    <img src="img/imagens para WEB/iphone.jpg" alt="" class="img-fluid">
                    
                    <div class="info-beneficio">
                        <p class="text-beneficio">Celulares</p>
                        <p class="descuento-beneficio">10%</p>
                    </div>
                    
                    <a href="#" class="btn-beneficio" data-toggle="modal" data-target="#modal-celulares">Quiero Mi Celulares</a>
                </div>
                <div id="modal-celulares" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h3 class="modal-title text-center"> Beneficios en Celulares</h3>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST">

                                    <input type="text" placeholder="ingrese su nombre" name="name">
                                    <hr>
                                    <input type="text" placeholder="Ingrese su email para recibir su beneficio">
                                    <hr>
                                    <input type="submit" name="" id="" value="Quiero Mi Beneficio" class="btn btn-enviar">
                                    <hr>
                                    <input type="hidden" value="CELULARES" name="beneficio">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--.col-12 -->

            <div class="col-12 col-md-6 mb-5">
                <div class="contenedor-beneficio">
                    <img src="img/imagens para WEB/sushi.jpg" alt="" class="img-fluid">
                    
                    <div class="info-beneficio">
                        <p class="text-beneficio">Sushi</p>
                        <p class="descuento-beneficio">10%</p>
                    </div>
                    
                    <a href="#" class="btn-beneficio" data-toggle="modal" data-target="#modal-sushi">Quiero Mi Beneficio</a>
                </div>
                <div id="modal-sushi" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h3 class="modal-title text-center"> Beneficios en Sushi</h3>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST">

                                    <input type="text" placeholder="ingrese su nombre" name="name">
                                    <hr>
                                    <input type="text" placeholder="Ingrese su email para recibir su beneficio">
                                    <hr>
                                    <input type="submit" name="" id="" value="Quiero Mi Beneficio" class="btn btn-enviar">
                                    <hr>
                                    <input type="hidden" value="sushi" name="beneficio">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!--.col-12 -->
            <div class="col-12 col-md-6 mb-5">
                <div class="contenedor-beneficio">
                    <img src="img/imagens para WEB/depilacion.jpg" alt="" class="img-fluid">
                    
                    <div class="info-beneficio">
                        <p class="text-beneficio">Belleza</p>
                        <p class="descuento-beneficio">10%</p>
                    </div>
                    
                    <a href="#" class="btn-beneficio" data-toggle="modal" data-target="#modal-belleza">Quiero Mi Beneficio</a>
                </div>
                <div id="modal-belleza" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h3 class="modal-title text-center"> Beneficios en Belleza</h3>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST">

                                    <input type="text" placeholder="ingrese su nombre" name="name">
                                    <hr>
                                    <input type="text" placeholder="Ingrese su email para recibir su beneficio">
                                    <hr>
                                    <input type="submit" name="" id="" value="Quiero Mi Beneficio" class="btn btn-enviar">
                                    <hr>
                                    <input type="hidden" value="BELLEZA" name="beneficio">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--.col-12 -->
        </div><!-- .row -->
        
    </div>
    <div class="container sponsors">
           
            <div class="row align-items-center justify-content-center">
                <div class="col-2">
                    <img src="img/imagens para WEB/LOGO GO7 FONDO BLANCO.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="img/imagens para WEB/LOGO HAKEN GOLD FONDO BLANCO.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="img/imagens para WEB/logo-pelotas-tipografianegra_edited.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="img/imagens para WEB/InShot_20200826_080240963_edited.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="img/imagens para WEB/LOGO LUDIS JOYAS.png" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    <img src="img/imagens para WEB/LOGO HANDBALL CONNECT.jpg" alt="" class="img-fluid">
                </div>
            </div>
            
 </div><!--.sponsosrs-->

<?php 
    
    include 'views/footer.php';
?>