<?php
require_once "Conexion";

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
}
