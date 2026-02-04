<?php
include '../include/session_admin.php';
require_once "../modelo/Usuario.php";

if (
    !isset($_POST['id'], $_POST['nombre'], $_POST['aPaterno'], $_POST['aMaterno'],
            $_POST['correo'], $_POST['telefono'], $_POST['rol'])
) {
    header("Location: listaUser.php");
    exit();
}

Usuario::actualizar(
    $_POST['id'],
    $_POST['nombre'],
    $_POST['aPaterno'],
    $_POST['aMaterno'],
    $_POST['correo'],
    $_POST['telefono'],
    $_POST['rol']
);

header("Location: listaUser.php");
exit();
