
<?php

class DashboardControlador {
    // Método para obtener los datos del dashboard
    public static function ctrGetDatosDashboard() {
        $datos = DashboardModelo::mdlGetDatosDashboard();
        return $datos;
    }

    // Método para obtener las ventas del mes actual
    public static function ctrGetVentasMesActual() {
        $ventasMesActual = DashboardModelo::mdlGetVentasMesActual();
        return $ventasMesActual;
    }
// Método para obtener productos mas vendidos
public static function ctrProductosMasVendidos(){
    try {
        $productosMasVendidos = DashboardModelo::mdlProductosMasVendidos();

        // Verificar que el resultado no esté vacío o no sea nulo
        if (empty($productosMasVendidos)) {
            throw new Exception("No se encontraron productos más vendidos.");
        }

        return $productosMasVendidos;
    } catch (Exception $e) {
        // Manejo básico de errores: puedes registrar el error o devolver un mensaje de error personalizado
        error_log($e->getMessage()); // Registrar el error en el log de PHP
        return ["error" => $e->getMessage()]; // Devolver un array con el mensaje de error
    }
}

public static function ctrProductosPocoStock() {
    try {
        $productosPocoStock = DashboardModelo::mdlProductosPocoStock();

        // Verificar que el resultado no esté vacío o no sea nulo
        if (!is_array($productosPocoStock) || empty($productosPocoStock)) {
            throw new Exception("No se encontraron productos con poco stock.");
        }

        return $productosPocoStock;
    } catch (PDOException $e) {
        // Capturar excepciones específicas de PDO (si mdlProductosPocoStock() las lanza)
        error_log("Error PDO en ctrProductosPocoStock: " . $e->getMessage());
        return ["error" => "Error de base de datos al obtener productos poco stock."];
    } catch (Exception $e) {
        // Capturar otras excepciones generales
        error_log("Error en ctrProductosPocoStock: " . $e->getMessage());
        return ["error" => $e->getMessage()]; // Devolver un array con el mensaje de error
    }
}



}

