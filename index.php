<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_menu_pie.css">
    <link rel="stylesheet" href="css/estilos_tienda.css">
    <link rel="stylesheet" href="css/estilos_modal.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>TextilExport</title>
</head>
<body>
    <header>
        <h1>TextilExport</h1>
        <span class="material-symbols-outlined">local_mall</span>
    </header>
    <div class="contenedor">
        <div class="contenedor__filtros">
            <div class="contenedor__filtros__buscador">
                <label for="filtro__buscador" class="material-symbols-outlined">search</label>
                <input type="text" name="" id="filtro__buscador" onkeyup="filtrobuscar(this.value);" placeholder="Producto">
            </div>
        </div>
    </div>
    <div class="contenedor">
        <div id="contenedor_articulos" >
            <?php
            $productos=simplexml_load_file("productos.xml");
            foreach($productos->producto as $proc){
            ?>
            <div class="articulos" id="articulo" data-id="<?=$proc->codigo?>" onclick="abrir(this);event.preventDefault();">
                    <img src="img/<?=$proc->img?>" alt="">
                    <div class="artiulo_descripcion">
                        <h3 class="artiuclo_nombre"><?=$proc->nombre?></h3>
                        <p class="<?=$proc->existencias>0?'p_disponible':'p_nodisponible'?>"><?=$proc->existencias>0?'Disponible':'Producto no disponible'?></p>
                    </div>
            </div>
            <?php }
            ?>

        </div>
        <div class="modal__contenedor" id="modal__contenedor">
            <div class="modal">
                <div class="modal_contenedor__img">
                    <img src="" alt="prodc" id="modal__img">
                </div>
                <div class="desc_modal">
                <a href="" class="btn__cerrar" id="btn__cerrar" onclick="event.preventDefault();"><span class="material-symbols-outlined">close</span></a>
                    <h2 id="modal__nombre">Prueba</h2>
                    <p id="modal__cat"></p>
                    <p id="modal__prec"></p>
                    <p id="modal__exis"></p>
                    <p id="modal__desc"></p>
                </div>

            </div>
        </div>
    </div>
    <footer>
        <p>Eduardo Martinez - MC190242</p>
        <a href="admin.php"><span class="material-symbols-outlined">admin_panel_settings</span></a>
    </footer>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/modal.js"></script>
    <script src="js//filtro_busqueda.js"></script>
</body>
</html>