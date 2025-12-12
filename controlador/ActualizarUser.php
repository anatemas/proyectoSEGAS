<?php
require_once "../modelo/Usuario.php";

$id       = $_POST['id'];
$nombre   = $_POST['nombre'];
$aPaterno = $_POST['aPaterno'];
$aMaterno = $_POST['aMaterno'];
$correo   = $_POST['correo'];
$telefono = $_POST['telefono'];

Usuario::actualizar($id, $nombre, $aPaterno, $aMaterno, $correo, $telefono);

header("Location: ListarUser.php");
exit();
