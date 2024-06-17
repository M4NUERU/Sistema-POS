<?php

class Conexion {
    public static function conectar() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=marekt-pos", "root", "mjmanu22", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        } catch (PDOException $e) {
            echo "Error al conectar con la base de datos: " . $e->getMessage();
        }
    }
}