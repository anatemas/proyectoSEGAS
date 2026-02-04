<?php
session_start();
require_once "../modelo/Usuario.php";

if (!isset($_POST['correo']) || !isset($_POST['password'])) {
    header("Location: ../index.php?error=1");
    exit();
}

$correo = trim($_POST['correo']);
$password = trim($_POST['password']);

$usuario = Usuario::login($correo, $password);


if ($usuario === "correo") {
    header("Location: ../index.php?error=1");
    exit();
}

if ($usuario === "password") {
    header("Location: ../index.php?error=2");
    exit();
}

if (is_array($usuario)) {
    $_SESSION['id'] = $usuario['idUsuario'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['rol'] = $usuario['rol'];

    header("Location: ../inicio.php");
    exit();
}

header("Location: ../index.php?error=1");
exit();
