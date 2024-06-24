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
                $hojaCategorias = $documento->getSheet(1);

                // Obtener el número de filas con datos en la primera hoja
                $numeroFilasCategorias = $hojaCategorias->getHighestDataRow();

                var_dump($numeroFilasCategorias);

                $categoriasRegistradas = 0;

                for ($i = 2; $i <= $numeroFilasCategorias; $i++) {
                    $categoria = $hojaCategorias->getCellByColumnAndRow(1, $i)->getValue();
                    $aplica_peso = $hojaCategorias->getCellByColumnAndRow(2, $i)->getValue();
                    $fecha_actualizacion = date("y-m-d");

                    if (!empty($categoria)) {
                        $stmt = Conexion::conectar()->prepare(
                            "INSERT INTO categorias(nombre_categoria, aplica_peso, fecha_actualizacion_categoria)
                             VALUES (:nombre_categoria, :aplica_peso, :fecha_actualizacion_categoria);"
                        );
                        $stmt->bindParam(":nombre_categoria", $categoria, PDO::PARAM_STR);
                        $stmt->bindParam(":aplica_peso", $aplica_peso, PDO::PARAM_STR);
                        $stmt->bindParam(":fecha_actualizacion_categoria", $fecha_actualizacion, PDO::PARAM_STR);

                        if ($stmt->execute()) {
                            $categoriasRegistradas += 1;
                        } else {
                            $categoriasRegistradas = 0;
                        }
                    }
                }

                return $categoriasRegistradas;
                
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
