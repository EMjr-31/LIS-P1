const d=document;
function filtrobuscar(value){
    //console.log(value);
    d.querySelectorAll(".artiuclo_nombre").forEach(
        texto=>(texto.textContent.toLowerCase().includes(value.toLowerCase()))
        ?((texto.parentNode).parentNode).classList.remove("articulos__filtro")
        :((texto.parentNode).parentNode).classList.add("articulos__filtro")
    );
}