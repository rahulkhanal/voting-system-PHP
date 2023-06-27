<?php
include "./connection.php";
if ($_SERVER) {
    $uid = $_GET["id"];
    if ($uid) {
        $name = $_POST["name"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        $query = "UPDATE users SET name=?, address=?, email=?, password=?, role=? WHERE id=?";
        try {
            $statement = $connection->prepare($query);
            $statement->bind_param("sssssi", $name, $address, $email, $password, $role, $uid);
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
    else {
        $name = $_GET["name"];
        $address = $_GET["address"];
        $email = $_GET["email"];
        $password = $_GET["password"];
        $role = $_GET["role"];
        $query = "INSERT INTO users(name,address, email,password, role) VALUES (?,?,?,?,?)";
        try {
            $statement = $connection->prepare($query);
            $statement->bind_param("sssss", $name, $address, $email, $password, $role);
            $statement->execute();
            if ($statement->affected_rows > 0) {
                echo '<script>alert("Voters inserted successfully");</script>';
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
}
?>