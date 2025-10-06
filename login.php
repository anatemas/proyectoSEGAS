<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<?php include 'header.php'; ?>

<!DOCTYPE html>
<header>
    <style>
        h2,
        form {
            text-align: center;
        }
    </style>
</header>

<body>
    <h2> Inicio sesion</h2>
<div>
    <form action="index.php">
        <label for="user">Nombre de Usuario :</label><br>
        <input type="text" name="user" id="user"> <br><br>
        <label for="password">Contraseña :</label> <br>
        <input type="password" name="password" id="password"> <br>
        <input type="checkbox" name="TC" id="TC">
        <label for="TC"> <a href="TC.php">Terminos y condiciones</a></label> <br>
        <input type="submit" value="entrar">

    </form>
</div>

</body>

</html>