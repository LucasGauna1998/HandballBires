<?php 

include 'views/header.php';
include 'admin/config.php'; 
include 'funciones.php';
$conexion = conexion($bd_config);

    
   

?>

<section class="ubicacion-info">
    <h3>¿DÓNDE ESTAMOS? </h3>
</section>


   
    
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-6">
                        <form action="admin/mail/formulario-contacto.php" method="post" >
                        <fieldset>
                            <legend class="d-block text-center">CONTACTANOS</legend>    
                            <div class="campos">
                                <div class="campo">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" id="name" placeholder="Ingrese su nombre">
                                </div><!--.campo-->
                                <div class="campo">
                                    <label for="asunto">Asunto</label>
                                    <input type="text" name="asunto" id="" placeholder="asunto">
                                </div><!--.campo-->

                                <div class="campo">
                                    <label for="email">Correo</label>
                                    <input type="email" name="name" id="email" placeholder="Ingrese su Correo">
                                    
                                </div><!--.campo-->
                                <div class="campo">
                                    <label for="name">Tu Consulta</label>
                                    <textarea name="mensaje"></textarea>
                                </div><!--.campo-->
                            </div><!--.campos-->
                            <div class="campo-enviar">
                                <input type="submit" value="enviar" class="btn btn-enviar">
                            </div>
                        </fieldset>    
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <div class="info-contacto mt-3">
                        <h3 class="text-center">Contáctanos</h3>
                        <p><span class="fa fa-phone"></span>   Tel: 11-5107-7803</p>
                        <p><span class="fa fa-envelope"></span>  email: handballbaires@gmail.com</p>
                        <P><span class="fas fa-map-marker-alt"></span> Ubicacion: Quintino Bocayuya 1241</P>
                        <div class="contenedor-mapa">
                            <div id="map">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div>
       
    
<?php 

    include 'views/footer.php';
?>
