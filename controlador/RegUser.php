<?php
require_once "../modelo/Usuario.php";

$usuario = new Usuario(
    $_POST['nombre'],
    $_POST['aPaterno'],
    $_POST['aMaterno'],
    $_POST['correo'],
    $_POST['numero'],
    $_POST['password']
);

$usuario->registrar();
header("Location: ../index.php");
exit();
