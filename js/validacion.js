document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (event) {

    const correo = document.getElementById("correo").value.trim();
    const numero = document.getElementById("numero").value.trim();
    const nombre = document.getElementById("nombre").value.trim();
    const aPaterno = document.getElementById("aPaterno").value.trim();
    const aMaterno = document.getElementById("aMaterno").value.trim();
    const cp = document.getElementById("cp").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirm = document.getElementById("password_confirm").value.trim();

    const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const regexTelefono = /^[0-9]{10}$/;
    const regexNombre = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;
    const regexCP = /^[0-9]{5}$/;

    if(!regexCorreo.test(correo)){
        alert("ingrese un correo valido");
        event.preventDefault();
        return;
    }

    if (!regexTelefono.test(numero)) {
      alert("El numero telefónico debe contener exactamente 10 dígitos.");
      event.preventDefault();
      return;
    }

  if (
      !regexNombre.test(nombre) ||
      !regexNombre.test(aPaterno) ||
      !regexNombre.test(aMaterno)
    ) {
      alert("El nombre y apellidos solo deben contener letras.");
      event.preventDefault();
      return;
    }

  if (!regexCP.test(cp)) {
      alert("El código postal debe contener exactamente 5 números.");
      event.preventDefault();
      return;
    }

    if (password !== confirm) {
      alert("Las contraseñas no coinciden.");
      event.preventDefault();
      return;
    }


  event.preventDefault(); 
  alert("Datos validados correctamente.");

  form.reset();

  });
});