<?php

class ProductosControlador {
    
    static public function ctrCargaMasivaProductos($fileProductos) {
        
        // Llama al método del modelo para manejar la carga masiva de productos
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);

        return $respuesta;
    }
}

