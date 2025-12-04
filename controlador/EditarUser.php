<?php
require_once "../modelo/Usuario.php";
$u = Usuario::obtener($_GET['id']);
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $u['idUsuario'] ?>">
    <input type="text" name="nombre" value="<?= $u['nombre'] ?>">
    <input type="text" name="aPaterno" value="<?= $u['aPaterno'] ?>">
    <input type="text" name="aMaterno" value="<?= $u['aMaterno'] ?>">
    <input type="email" name="correo" value="<?= $u['correoElectronico'] ?>">
    <input type="text" name="telefono" value="<?= $u['telefono'] ?>">
    <button type="submit">Actualizar</button>
</form>