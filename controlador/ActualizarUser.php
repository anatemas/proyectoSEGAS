<?php
require_once "../modelo/Usuario.php";


Usuario::actualizar(
    $_POST['id'],
    $_POST['nombre'],
    $_POST['aPaterno'],
    $_POST['aMaterno'],
    $_POST['correo'],
    $_POST['telefono']
);

header("Location: ListarUsuarios.php");
exit();
