





<?php include 'header-panel.php';?>
        <div class="container">
            <h3>Editar Noticia</h3>
            <div class="formulario">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titulo">Titulo De La Noticia</label>
                        <input type="text" class="form-control" id="titulo" name="titulo_noticia" value="<?php echo $noticia['titulo_noticia'];?>">
                        <input type="hidden" value="<?php echo $noticia['id_noticia']?>" name="id">
                        <label for="extracto">Extracto De La Noticia</label>
                        <input type="text" class="form-control" id="extracto" name="extracto_noticia" value="<?php echo $noticia['extracto_noticia'];?>">
                        <label for="texto_noticia">Noticia</label>
                        <textarea name="texto_noticia" id="texto_noticia" class="form-control"><?php echo $noticia['texto_noticia'];?></textarea>
                        <label for="thumb1" class="mt-3">*Imagen Portada</label>
                        <input type="hidden" name="thumb1_guardada" value="<?php echo $noticia['imagen_noticia'];?>">
                        <input type="file" name="thumb-editada-1" class="d-block">
                        <label for="thumb2" class="mt-3">*Imagen Muestra</label>
                        <input type="hidden" name="thumb2_guardada" value="<?php echo $noticia['imagen_mini'];?>">
                        <input type="file" name="thumb-editada-2" class="d-block">
                    </div>
                    <input type="submit" class="btn btn-primary" value="MODIFICAR NOTICIA">
                </form>
            </div>
        </div>
<?php include 'footer-panel.php';?>