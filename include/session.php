<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: /proyectoSEGAS/index.php");
    exit();
}?>