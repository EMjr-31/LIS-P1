<?php
    validarCodigo($_POST['codigo']);
    existenciaCodigo($_POST['codigo']);
    
        /*
        if(isset($_FILES['file'])){
            $archivo=$_FILES['file'];
            $archivo_nombre=$archivo['name'];
            $archivo_tipo=$archivo['type'];
            $ext= explode('.',$archivo_nombre);
            $tipos=array("image/jpg","image/png");
    
            if(!in_array($archivo_tipo,$tipos)){
                echo "No se permite ese formato de imagen";
            }
            //directorio 
            if(!is_dir("img")){
                mkdir("img", 8777);
            }
            //mover archivo
            $nuevo_nombre=trim($_POST['codigo']).'.'.$ext[1];
            move_uploaded_file($archivo['tmp_name'], 'img/'.$nuevo_nombre);
            //agregar
            
            $producto=$productos->addChild('producto');
            $producto->addChild('codigo',$_POST['codigo']);
            $producto->addChild('nombre',$_POST['nombre']);
            $producto->addChild('descripcion',$_POST['descripcion']);
            $producto->addChild('img',$nuevo_nombre);
            $producto->addChild('categoria',$_POST['categoria']);
            $producto->addChild('precio',$_POST['precio']);
            $producto->addChild('existencias',$_POST['existencias']);
           
            file_put_contents("productos.xml",$productos->asXML());
        }else{
            echo "no hay nada";
        }*/

    function validarCodigo($codigo){
        if(preg_match("/^(PROD)\d{5}$/",$codigo)){
            echo "Coincide";
        }else{
            echo "No coincide";
        }
    }
    function existenciaCodigo($codigo){
        $productos=simplexml_load_file("productos.xml");
        $i=0;
        $index=-1;
        /*Recorrido para encontrar el producto por codigo*/
        foreach($productos->producto as $prod){
             /*la estructura se detienen hasta que el codigo consida con un producto*/
            if($codigo==$prod->codigo){
                $index=$i;
                break;
            }
            $i++;
        }
        /*Si el producto fue encontrado lo guardamos en el objeto*/
        if($index>=0){
            echo "ya existe el codigo";
        }else{
            echo "no existe";
        }
    }
?>