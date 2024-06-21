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

    public function getProductosMasVendidos(){

         $productosMasVendidos = DashboardControlador::ctrProductosMasVendidos();

         echo json_encode($productosMasVendidos);

    }

    public function getProductosPocoStock(){

        $productosPocoStock = DashboardControlador::ctrProductosPocoStock();

        echo json_encode($productosPocoStock);
    }

}

// Verificar la acción solicitada
if (isset($_POST['accion']) && $_POST['accion'] == 1) { // parámetros ventas mes

    // Llamar al método correspondiente para obtener las ventas del mes actual
    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual->getVentasMesActual(); 

} elseif (isset($_POST['accion']) && $_POST['accion'] == 2) { // parámetros productos más vendidos

    // Llamar al método correspondiente para obtener los productos más vendidos
    $productosMasVendidos = new AjaxDashboard();
    $productosMasVendidos->getProductosMasVendidos(); // Aquí se llama al método correcto para productos más vendidos

} elseif (isset($_POST['accion']) && $_POST['accion'] == 3) { // parámetros productos poco stock

    // Llamar al método correspondiente para obtener los productos más vendidos
    $productosPocoStock = new AjaxDashboard();
    $productosPocoStock->getProductosPocoStock(); // Aquí se llama al método correcto para productos más vendidos

} else {
    // Llamar al método correspondiente para obtener los datos del dashboard
    $datos = new AjaxDashboard();
    $datos->getDatosDashboard();
}

