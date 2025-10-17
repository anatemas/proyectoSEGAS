<?php include 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Cuenta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label,
        input {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <h2>Crear Cuenta</h2>

    <div class="form-container">
        <form action="index.php">

            <label for="correo">Correo electronico:</label>
            <input type="text" name="correo" id="correo">

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">

            <label for="password">Confirmar contraseña:</label>
            <input type="password" name="password" id="password">

            <label for="user">Nombre de Usuario:</label>
            <input type="text" name="user" id="user">

            <label for="country">Pais:</label>
            <select id="country" name="country">
                <option value="mexico">México</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>

            <label for="estado">Ingrese su estado:</label>
            <input type="text" name="estado" id="estado">

            <label for="municipio">Ingrese su municipio:</label>
            <input type="text" name="municipio" id="municipio">

            <label for="cp">Ingrese su código postal:</label>
            <input type="text" name="cp" id="cp">

            <label for="calle">Ingrese su calle:</label>
            <input type="text" name="calle" id="calle">

            <label for="credencial ">credencial (opcional) :</label>
            <input type="file" name="credencial" id="credencial">

            <label>
                <input type="checkbox" name="TC" id="TC">
                <a href="TC.php">Términos y condiciones</a>
            </label>


            <input type="submit" onclick="alert('datos guardados correctamente')" value="Guardar datos">

        </form>
    </div>

</body>

</html>
<?php include 'include/footer.php'; ?>