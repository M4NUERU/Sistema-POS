<?php

// Incluir los archivos necesarios
include_once __DIR__ . "/../controladores/dashboard.controlador.php";
include_once __DIR__ . "/../modelos/dashboard.modelo.php";

class AjaxDashboard {
    public function getDatosDashboard() {
        // Llamada correcta al método estático de la clase DashboardControlador
        $datos = DashboardControlador::ctrGetDatosDashboard();
        echo json_encode($datos);
    }
}

// Instanciación de la clase y llamada al método
$datos = new AjaxDashboard();
$datos->getDatosDashboard();
