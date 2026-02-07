<nav class="menu">
    <ul>
        <li><a href="/proyectoSEGAS/inicio.php">Inicio</a></li>
        <li><a href="/proyectoSEGAS/funcionamiento.php">Funcionamiento</a></li>
        <li><a href="/proyectoSEGAS/Caracterisitcas.php">Características</a></li>
        <li><a href="/proyectoSEGAS/acercaDe.php">Acerca de</a></li>
        <?php if ($_SESSION['rol'] === 'admin'): ?>
    <li><a href="/proyectoSEGAS/controlador/ListarUser.php">Usuarios</a></li>
<?php endif; ?>

    </ul>
</nav>