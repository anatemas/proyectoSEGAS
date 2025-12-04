<?php
require_once "Conexion.php";

class Usuario
{

    private $nombre;
    private $aPaterno;
    private $aMaterno;
    private $correo;
    private $telefono;
    private $password;

    public function __construct($nombre, $aPaterno, $aMaterno, $correo, $telefono, $password)
    {
        $this->nombre   = $nombre;
        $this->aPaterno = $aPaterno;
        $this->aMaterno = $aMaterno;
        $this->correo   = $correo;
        $this->telefono = $telefono;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }


    public function registrar()
    {
        $conn = Conexion::conectar();

        $sql = "INSERT INTO usuario 
        (nombre, aPaterno, aMaterno, correoElectronico, telefono, password)
        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $this->nombre,
            $this->aPaterno,
            $this->aMaterno,
            $this->correo,
            $this->telefono,
            $this->password
        ]);
    }

    public static function listar()
    {
        $conn = Conexion::conectar();

        $sql = "SELECT * FROM usuario";
        $stmt = $conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function obtener($id)
    {
        $conn = Conexion::conectar();
        $sql = "SELECT * FROM usuario WHERE idUsuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public static function actualizar($id, $nombre, $aPaterno, $aMaterno, $correo, $telefono)
    {
        $conn = Conexion::conectar();
        $sql = "UPDATE usuario SET 
                    nombre = ?, 
                    aPaterno = ?, 
                    aMaterno = ?, 
                    correoElectronico = ?, 
                    telefono = ?
                WHERE idUsuario = ?";

        $stmt = $conn->prepare($sql);
        return $stmt->execute([$nombre, $aPaterno, $aMaterno, $correo, $telefono, $id]);
    }

    public static function eliminar($id)
    {
        $conn = Conexion::conectar();
        $sql = "DELETE FROM usuario WHERE idUsuario = ?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
