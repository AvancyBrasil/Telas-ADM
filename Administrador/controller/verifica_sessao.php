<?php
session_start();

if (!isset($_SESSION['token'])) {
    header("Location: ../view/login.php");
    exit();
}
?>