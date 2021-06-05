
    
       
            <?php foreach ($noticias as $noticia): ?>
                <div class="col-sm-12  col-md-4 mt-3 ">
                    <div class="noticia">
                        <a href="noticia.php?id=<?php echo $noticia['id_noticia'];?>">
                        <div class="imagen">
                            <img src="<?php echo $noticia['imagen_mini']; ?>" alt="" class="img-fluid">
                            <p class="text-noticia"><?php echo $noticia['titulo_noticia'];?></p>
                        </div>
                        </a>
                    </div><!--.noticia-->
                </div>
            <?php endforeach; ?>
       

    









