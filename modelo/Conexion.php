<?php
class Conexion
{
    public static function conectar()
    {
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $database   = "miweb";

        try {
            $conn = new PDO(
                "mysql:host=$servername;dbname=$database;charset=utf8",
                $username,
                $password
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
