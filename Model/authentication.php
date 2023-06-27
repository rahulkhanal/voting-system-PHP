<?php
session_start();

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
            $user = $result->fetch_assoc();
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            header("Location: ../View/Pages/home.php");
            exit();
        }
    } else {
        return;
    }
}
?>