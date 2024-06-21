<?php

require_once __DIR__ . '/conexion.php';

class DashboardModelo {
    public static function mdlGetDatosDashboard() {
        try {
            $stmt = Conexion::conectar()->prepare('CALL prc_ObtenerDatosDashboard()');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo "Error en mdlGetDatosDashboard: " . $e->getMessage();
        }
    }



static public function mdlGetVentasMesActual(){

    try {
        $stmt = Conexion::conectar()->prepare('CALL prc_ObtenerVentasMesActual()');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $e) {
        echo "Error en mdlGetDatosDashboard: " . $e->getMessage();
    }

    
   }
   static public function mdlProductosMasVendidos(){
    try {
        $stmt = Conexion::conectar()->prepare('CALL prc_ListaProductosMasVendidos()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $e) {
        // Lanzar la excepción nuevamente para que quien llame a este método pueda manejarla adecuadamente
        throw new Exception("Error en mdlProductosMasVendidos: " . $e->getMessage());
    }
}
public static function mdlProductosPocoStock() {
    try {
        $conn = Conexion::conectar();
        $stmt = $conn->prepare('CALL prc_ListarProductosPocoStock()');

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        // Cerrar explícitamente el statement y la conexión
        $stmt->closeCursor();
        // Cerrar la conexión aquí podría no ser necesario si se gestiona automáticamente o se espera usarla después
        // $conn = null;

        return $result;

    } catch (PDOException $e) {
        // Mantener la excepción de tipo PDOException para información específica de errores de base de datos
        throw new PDOException("Error en mdlProductosPocoStock: " . $e->getMessage());
    }
}





}

