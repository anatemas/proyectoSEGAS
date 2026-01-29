<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>

<main>
    <h2 class="titulo-principal">Funcionamiento del Sistema SEGAS</h2>
    <p>El funcionamiento de SEGAS se basa en un proceso automatizado de detección y notificación ante fugas de gas. El sistema integra sensores de tipo MQ-2 conectados a un microcontrolador ESP32, que analiza en tiempo real la concentración de gases inflamables en el ambiente.</p>

    <h2>Etapas del Proceso</h2>
    <ol>
        <li><b>Detección:</b> El sensor MQ-2 mide continuamente los niveles de gases como butano, propano o metano.</li>
        <li><b>Procesamiento:</b> El microcontrolador ESP32 recibe los datos del sensor y determina si existe una concentración peligrosa.</li>
        <li><b>Alerta:</b> En caso de riesgo, el sistema activa alarmas visuales y sonoras, además de enviar una notificación digital.</li>
        <li><b>Comunicación:</b> Los datos son enviados al servidor mediante conexión Wi-Fi para su registro y monitoreo.</li>
        <li><b>Respuesta:</b> Los usuarios reciben la notificación a través de la app móvil y la página web, y se notifica a las autoridades.</li>
    </ol>

    <h2>Componentes Principales</h2>
    <ul>
        <li>Sensor MQ-2 para detección de gas.</li>
        <li><img src="imagenes/MQ-2-1-1024x762.avif" alt="sensor MQ-2"></li>
        <li>Microcontrolador ESP32 con Wi-Fi integrado.</li>
        <li><img src="imagenes/arduino.avif" alt="Módulo Arduino ESP32 utilizado en SEGAS"></li>
        <li>Servidor web y base de datos para registro de eventos.</li>
        <li>Aplicación móvil y sitio web para monitoreo y control.</li>
    </ul>
</main>

<?php include 'include/footer.php'; ?>