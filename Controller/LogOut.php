<?php
session_start();

if (isset($_POST['logout_button'])) {
    session_unset();
    session_destroy();

    header("Location: ../View/Pages/index.php");
    exit();
}
?>