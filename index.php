<?php session_start(); ?>
<?php include 'include/header.php'; ?>


<h2>Inicio de Sesión</h2>

<div class="form-container">
    <form action="inicio.php" method="post">
        <label for="user">Correo electronico:</label>
        <input type="text" name="user" id="user" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <label>
            <input type="checkbox" name="TC" id="TC" required>
            <a href="TC.php" target="blank">Términos y condiciones</a>
        </label>
        <a href="/proyectoSEGAS/formulario.php">Crear cuenta</a>
        <input type="submit" value="Entrar">
    </form>
</div>



<?php include 'include/footer.php'; ?>