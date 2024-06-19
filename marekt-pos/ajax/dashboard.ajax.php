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

    public function getVentasMesActual() {
        $ventasMesActual = DashboardControlador::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }
}

// Verificar la acción solicitada
if (isset($_POST['accion']) && $_POST['accion'] == 1) {
    // Llamar al método correspondiente para obtener las ventas del mes actual
    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual->getVentasMesActual(); // Aquí faltaban los paréntesis y el punto y coma
} else {
    // Llamar al método correspondiente para obtener los datos del dashboard
    $datos = new AjaxDashboard();
    $datos->getDatosDashboard();
}
