<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";
require_once "../vendor/autoload.php";

class ajaxProductos {

    public $fileProductos;

    public function ajaxCargaMasivaProductos() {

        $respuesta = ProductosControlador:: ctrCargaMasivaProductos($this->fileProductos);

        echo json_encode($respuesta);

    }

}

// Verificar si el archivo 'fileProductos' existe en $_FILES
if(isset($_FILES['fileProductos'])) {

    $archivo_productos = new ajaxProductos();
    $archivo_productos->fileProductos = $_FILES['fileProductos'];
    $archivo_productos->ajaxCargaMasivaProductos();

}
