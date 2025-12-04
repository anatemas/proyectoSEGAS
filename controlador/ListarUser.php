<?php
require_once "../modelo/Usuario.php";
$usuarios = Usuario::listar();

?>
<table border="1">
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
                <a href="EditarUser.php?id=<?= $u['idUsuario'] ?>">Editar</a>
                <a href="EliminarUser.php?id=<?= $u['idUsuario'] ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>