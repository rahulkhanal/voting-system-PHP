<?php
include "./connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    if (strlen($email) > 0 && strlen($password) > 0) {
        $result = $connection->query($query);
        if ($result->num_rows === 0) {
            die("No User Found");
        } else {
            header("Location: ../View/Pages/home.php");
            exit();
        }
    } else {
        return;
    }
}
?>