<?php
require_once "../modelo/Usuario.php";

Usuario::eliminar($_GET['id']);

header("Location: ListarUser.php");

exit();
