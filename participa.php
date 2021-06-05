<?php 
    include 'views/header.php';
?>


    <div class="container-fluid mx-0 px-0 participa-hero hero-portada">
        <div class="contenedor-hero">
            <p>Participa</p>
        </div>
    </div>

    <div class="container my-5">
        
        <div class="formulario">
            <h4>FORMULARIO DE INSCRIPCIÓN</h4>

        <p class="descarga">1) Descarga el archivo excel para completar tu lista de buena fe aquí. <a href="formulario-inscripcion.xlsx" download="formulario-de-buenaFe">
        <img src="img/imagens para WEB/excel-logo-0.png" alt="" class="img-fluid logo-excel"> 
        </a></p>
        <p>2) Completá tus datos.  </p>
            <form action="#" class="form">
                <div class="campos">
                    <div class="campo form-group">
                        <label for="name">Nombre *</label>
                        <input type="text" id="name" placeholder="Ingrese su Nombre" class="form-control">
                    </div>
                    <div class="campo form-group">
                        <label for="surname">Apellido *</label>
                        <input type="text" id="surname" placeholder="Ingrese su Apellido" class="form-control">
                    </div>
                    <div class="campo form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" placeholder="Ingrese su Email" class="form-control">
                    </div>
                    <div class="campo form-group">
                        <label for="tel">Teléfono *</label>
                        <input type="tel" id="tel" placeholder="Ingrese su Teléfono" class="form-control">
                    </div>
                    <div class="campo form-group">
                        <label for="name-team">Nombre del equipo *</label>
                        <input type="text" id="name-team" placeholder="Ingrese nombre del equipo" class="form-control">
                    </div>
                    <div class="campo form-group">
                        <label for="name">Nombre *</label>
                        <input type="text" id="name" placeholder="Ingrese su Nombre" class="form-control">
                    </div>
                </div>
                <div class="campo">
                <label for="thumb1" class="mt-3">Adjuntar Archivo</label>
                    <input type="file" name="thumb2" class="d-block" required>
                </div>
                <div class="campo-enviar">
                        <input type="button" class="btn-enviar" value="Enviar">
                </div>
            </form>
        </div>
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