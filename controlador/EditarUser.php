<?php
include '../include/header.php';
require_once "../modelo/Usuario.php";

$u = Usuario::obtener($_GET['id']);
?>

<h2>Editar Usuario</h2>

<div class="form-container">
    <form action="ActualizarUser.php" method="POST">

        <input type="hidden" name="id" value="<?= $u['idUsuario'] ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?= $u['nombre'] ?>" required>

        <label for="aPaterno">Apellido Paterno:</label>
        <input type="text" id="aPaterno" name="aPaterno" value="<?= $u['aPaterno'] ?>" required>

        <label for="aMaterno">Apellido Materno:</label>
        <input type="text" id="aMaterno" name="aMaterno" value="<?= $u['aMaterno'] ?>" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" value="<?= $u['correoElectronico'] ?>" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" value="<?= $u['telefono'] ?>" required>

        <input type="submit" value="Actualizar">
    </form>
</div>