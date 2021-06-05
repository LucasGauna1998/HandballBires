<?php include '../views/header-panel.php';?>
       

        </div>
        <div class="container">
            <div class="formulario">
                <form action="../nueva-noticia.php" method="POST" enctype="multipart/form-data" required>
                    <div class="form-group">
                        <label for="titulo">Titulo De La Noticia</label>
                        <input type="text" class="form-control" id="titulo" name="titulo_noticia" placeholder="Ingrese titulo de noticia">
                        <label for="extracto">Extracto De La Noticia</label>
                        <input type="text" class="form-control" id="extracto" name="extracto_noticia" placeholder="Ingrese extracto de noticia">
                        <label for="texto_noticia">Noticia</label>
                        <textarea name="texto_noticia" id="texto_noticia" class="form-control"></textarea>
                        <label for="thumb1" class="mt-3">*Imagen Portada</label>
                        <input type="file" name="thumb1" class="d-block" required>
                        <label for="thumb2" class="mt-3">*Imagen Muestra</label>
                        <input type="file" name="thumb2" class="d-block" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="SUBIR NOTICIA">
                </form>
            </div>
        </div>
<?php include '../views/footer-panel.php';?>