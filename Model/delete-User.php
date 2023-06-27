<?php
include "./connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $userid = $_GET["id"];
    $query = "DELETE FROM users WHERE id = ?";
    try {
        $statement = $connection->prepare($query);
        $statement->bind_param("i", $userid);
        $statement->execute();

        if ($statement->affected_rows > 0) {
            header("Location: ../View/Pages/voters.php");
            exit();
        } else {
            header("Location: ../View/Pages/voters.php");
            exit();
        }
        // $statement->close();
    } catch (\Throwable $th) {
        echo $th;
    }
}
?>