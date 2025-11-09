<?php include 'include/header.php'; ?>

<h2>Crear Cuenta</h2>

<div class="form-container">
    <form action="index.php">

        <label for="correo">Correo electronico: *</label>
        <input type="email" name="correo" id="correo" required>

        <label for="numero">Numero telefonico : *</label>
        <input type="tel" name="numero" id="numero" required pattern="[0-9]{10}" title="Debe contener 10 dígitos">

        <label for="password">Contraseña:*</label>
        <input type="password" name="password" id="password" required>

        <label for="password_confirm">Confirmar contraseña:*</label>
        <input type="password" name="password_confirm" id="password_confirm" required>


        <label for="nombre">Nombre:*</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="aPaterno">Apellido paterno:*</label>
        <input type="text" name="aPaterno" id="aPaterno" required>

        <label for="aMaterno">Apellido materno:*</label>
        <input type="text" name="aMaterno" id="aMaterno" required>

        <label>Sexo:*</label>
        <label><input type="radio" name="sexo" value="hombre" required> Hombre</label>
        <label><input type="radio" name="sexo" value="mujer"> Mujer</label>

        <label for="fecha">Fecha de nacimiento :*</label>
        <input type="date" name="fecha" id="fecha" required>

        <label for="country">Pais:*</label>
        <select id="country" name="country" required>
            <option value="" disabled selected>Seleccione un país</option>
            <option value="mexico">México</option>
            <option value="canada">Canadá</option>
            <option value="usa">USA</option>
        </select>


        <label for="estado">Estado:*</label>
        <input type="text" name="estado" id="estado" required>

        <label for="municipio">Municipio:*</label>
        <input type="text" name="municipio" id="municipio" required>

        <label for="colonia">Colonia:*</label>
        <input type="text" name="colonia" id="colonia" required>

        <label for="calle">Calle:*</label>
        <input type="text" name="calle" id="calle" required>

        <label for="numExterior">Número exterior:*</label>
        <input type="text" name="numExterior" id="numExterior" required>

        <label for="cp">Código Postal:*</label>
        <input type="text" name="cp" id="cp" required>

        <label for="referencia">Referencia (opcional):</label>
        <input type="text" name="referencia" id="referencia">

        <label for="credencial">credencial (opcional) :</label>
        <input type="file" name="credencial" id="credencial" accept=".pdf,.jpg,.png">

        <label for="foto">Foto de perfil (opcional):</label>
        <input type="file" name="foto" id="foto" accept="image/*">

        <label><input type="checkbox" name="notificaciones"> Deseo recibir notificaciones por correo</label>

        <label>
            <input type="checkbox" name="TC" id="TC" required>
            <a href="TC.php">Términos y condiciones</a>
        </label>

        <input type="reset" value="Restablecer datos">

        <input type="submit" onclick="alert('datos guardados correctamente')" value="Guardar datos">

    </form>
</div>
<script src="js/validaciones.js"></script>


<?php include 'include/footer.php'; ?>