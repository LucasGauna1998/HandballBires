





document.addEventListener('click', (event) =>{
    let btn = event.target;
   
    if (btn.textContent == "ELIMINAR"){
        event.preventDefault();
        let noticia = event.target;
        let idNoticia = noticia.getAttribute('data-id');
        
    swal({
        title: "Desea Eliminar La Noticia?",
        text: "Una vez eliminada la noticia no podra recuperarse!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
        swal("La noticia fue eliminada con exito!", {
            icon: "success",
            
        });
        setTimeout(()=>{
            window.location.href = `borrar.php?id=${idNoticia}`;
        },2000)
        } else {
        swal("La noticia no fue eliminada!");
        }
    });
    }
    
    
    
});

