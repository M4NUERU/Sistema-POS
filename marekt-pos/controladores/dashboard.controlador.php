<?php

class DashboardControlador {
    public static function ctrGetDatosDashboard() {
        $datos = DashboardModelo::mdlGetDatosDashboard();
        return $datos;
    }
}
