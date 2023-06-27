<?php
include "./connection.php";
if ($_SERVER) {
    $cid = $_GET["id"];
    echo $cid;
    if ($cid) {
        echo $cid;
        $name = $_POST["name"];
        $position = $_POST["position"];
        $qualification = $_POST["qualification"];
        $query = "UPDATE candidates SET name=?, position=?, qualification=? WHERE id=?";
        try {
            $statement = $connection->prepare($query);
            $statement->bind_param("sssi", $name, $position, $qualification, $cid);
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
    } else {
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