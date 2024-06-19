
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
}

