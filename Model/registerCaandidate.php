<?php
include "./connection.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    $position = $_GET["position"];
    $qualification = $_GET["qualification"];
    $query = "INSERT INTO candidates(name,position, qualification,image) VALUES (?,?,?,'')";
    try {
        $statement = $connection->prepare($query);
        $statement->bind_param("sss", $name, $position, $qualification);
        $statement->execute();
        if ($statement->affected_rows > 0) {
            echo '<script>alert("Candidate inserted successfully");</script>';
            header("Location: ../View/Pages/registerCandidate.php");
            exit();
        } else {
            echo '<script>alert("Failed to insert into database");</script>';
            header("Location: ../View/Pages/registerCandidate.php");
            exit();
        }
        // $statement->close();
    } catch (\Throwable $th) {
        die($th);
    }
}
?>