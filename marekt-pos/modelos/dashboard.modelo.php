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
}

