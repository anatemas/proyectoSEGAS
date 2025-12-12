<?php
include '../include/header.php';
require_once "../modelo/Usuario.php";

$usuarios = Usuario::listar();
?>

<link rel="stylesheet" href="../css/estilos.css">

<div class="tabla-container">
    <table class="tabla-usuarios">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= $u['idUsuario'] ?></td>
                <td><?= $u['nombre'] ?></td>
                <td><?= $u['aPaterno'] ?></td>
                <td><?= $u['correoElectronico'] ?></td>
                <td>
                    <a class="btn-accion btn-editar" href="EditarUser.php?id=<?= $u['idUsuario'] ?>">Editar</a>
                    <a class="btn-accion btn-eliminar" href="EliminarUser.php?id=<?= $u['idUsuario'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>