<?php session_start(); ?>
<?php include 'include/header.php'; ?>


<h2>Inicio de Sesión</h2>

<div class="form-container">
    <form action="controlador/LoginUser.php" method="post">
        <label for="correo">Correo electronico:</label>
        <input type="email" name="correo" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>

        <label>
            <input type="checkbox" name="TC" id="TC" required>
            <a href="TC.php" target="blank">Términos y condiciones</a>
        </label>
        <a href="/proyectoSEGAS/registro.php">Crear cuenta</a>
        <input type="submit" value="Entrar">
    </form>
    <?php if (isset($_GET['error'])): ?>
        <p style="color:red; text-align:center; margin-top:10px;">
            <?php
            if ($_GET['error'] == 1) {
                echo "El correo no existe.";
            } elseif ($_GET['error'] == 2) {
                echo "La contraseña es incorrecta.";
            }
            ?>
        </p>
    <?php endif; ?>

</div>



<?php include 'include/footer.php'; ?>