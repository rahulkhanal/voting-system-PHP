<?php
include "./connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $candidateId = $_GET["id"];
    $query = "DELETE FROM candidates WHERE id = ?";
    try {
        $statement = $connection->prepare($query);
        $statement->bind_param("i", $candidateId);
        $statement->execute();

        if ($statement->affected_rows > 0) {
            header("Location: ../View/Pages/candidates.php");
            exit();
        } else {
            header("Location: ../View/Pages/candidates.php");
            exit();
        }
        // $statement->close();
    } catch (\Throwable $th) {
        echo $th;
    }
}
?>