<?php
$servername = "localhost";
$username = "root";
$password = "Toor123$";
$database = "miweb";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $correo  = $_POST["correo"];
  $numero  = $_POST["numero"];
  $password = $_POST["password"];
  $nombre  = $_POST["nombre"];
  $aPaterno = $_POST["aPaterno"];
  $aMaterno = $_POST["aMaterno"];

  try {

    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO usuario (
                    nombre,
                    apellidoPaterno,
                    apellidoMaterno,
                    correoElectronico,
                    telefono
                ) VALUES (
                    :nombre,
                    :aPaterno,
                    :aMaterno,
                    :correo,
                    :numero
                )";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':aPaterno', $aPaterno);
    $stmt->bindParam(':aMaterno', $aMaterno);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':numero', $numero);

    $stmt->execute();

    echo "Registro guardado correctamente";
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  $conn = null;
}


