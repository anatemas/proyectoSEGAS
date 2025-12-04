<?php
include 'include/header.php';
include 'include/nav.php';
?>


<h2>Usuarios Registrados</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($lista as $u): ?>
        <tr>
            <td><?= $u["idUsuario"] ?></td>
            <td><?= $u["nombre"] . " " . $u["apellidoPaterno"] ?></td>
            <td><?= $u["correoElectronico"] ?></td>
            <td><?= $u["telefono"] ?></td>
            <td>
                <a href="../controlador/EditarUsuario.php?id=<?= $u['idUsuario'] ?>">Editar</a> |
                <a href="../controlador/EliminarUsuario.php?id=<?= $u['idUsuario'] ?>"
                    onclick="return confirm('¿Seguro que deseas eliminar?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>

</html>







include 'include/footer.php';