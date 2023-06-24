<?php
include "../../Model/connection.php";
$query = "SELECT * FROM candidates";
$result = $connection->query($query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Candidate List</title>
    <link rel="stylesheet" href="../style/index.css">
    <style>
        .container {
            padding: 2rem !important;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <?php include "../Components/Navigation.php" ?>
    <div class="container">
        <h1>Candidate List</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Qualification</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td>
                        <?php echo $row["name"]; ?>
                    </td>
                    <td>
                        <?php echo $row["position"]; ?>
                    </td>
                    <td>
                        <?php echo $row["qualification"]; ?>
                    </td>
                    <td>
                        <a href="../../Controller/edit_candidate.php?id=<?php echo $row["id"]; ?>">Edit</a>
                        <a href="../../Controller/delete_candidate_layor.php?id=<?php echo $row["id"]; ?>">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>