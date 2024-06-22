<?php

require_once "conexion.php";
use PhpOffice\PhpSpreadsheet\IOFactory;

class ProductosModelo {

    static public function mdlCargaMasivaProductos($fileProductos) {

        // Verificar si el archivo se ha cargado correctamente
        if (isset($fileProductos['tmp_name']) && !empty($fileProductos['tmp_name'])) {
            $nombreArchivo = $fileProductos['tmp_name'];

            try {
                $documento = IOFactory::load($nombreArchivo);
                
                // Acceder a la primera hoja del documento
                $hojaCategorias = $documento->getSheet(0);

                // Obtener el número de filas con datos en la primera hoja
                $numeroFilasCategorias = $hojaCategorias->getHighestDataRow();

                var_dump($numeroFilasCategorias);
                
            } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
                // Manejo de errores de lectura del archivo
                echo 'Error al cargar el archivo: ',  $e->getMessage();
            }
        } else {
            echo 'No se ha cargado ningún archivo.';
        }
    }
}
?>
