<?php
    if(isset($_FILES['file'])){
        $archivo=$_FILES['file'];
        $archivo_nombre=$archivo['name'];
        $archivo_tipo=$archivo['type'];
        $tipos=array("image/jpg","image/png");

        if(!in_array($archivo_tipo,$tipos)){
            echo "No se permite ese formato de imagen";
        }
        //directorio 
        if(!is_dir("img")){
            mkdir("img", 8777);
        }
        //mover archivo
        move_uploaded_file($archivo['tmp_name'], 'img/'.'productonuevo.');
    }else{
        echo "no hay nada";
    }
?>