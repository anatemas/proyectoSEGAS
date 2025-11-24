<?php
$servername = "localhost";
$username = "usuario";
$password = "Toor123$";
$database   = "proyecto";

try {
  $sql = "INSERT INTO usuario (
    
    nombre,
    apellidoPaterno,
    apellidoMaterno,
    correoElectronico,
    telefono) 
VALUES
('Cristian', 'Hernandez', 'Flores', 'ccris.@123.com', '5552223344') ";

  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec($sql);
  echo "New record created successfully";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
