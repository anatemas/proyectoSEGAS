<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<main>
    <section>
        <h2>Funcionamiento del sistema</h2>
        <article>
            <h3>Cómo opera SEGAS</h3>
            <p>El sistema cuenta con un sensor MQ-2 que detecta concentraciones de gas en el ambiente. Cuando se
                detecta una fuga, se activa una alarma sonora y se envía una notificación al usuario.</p>
        </article>
        <article>
            <h3>Componentes principales</h3>
            <ul>
                <li>Sensor MQ-2</li>
                <li>Microcontrolador ESP32</li>
                <li>Aplicación móvil</li>
                <li>Sirena de alarma</li>
            </ul>
        </article>
    </section>

    <aside>
        <h4>Información adicional</h4>
        <p>SEGAS está diseñado para hogares brindando seguridad en caso de fugas de gas</p>
    </aside>
</main>

<?php include 'footer.php'; ?>