<?php session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../Pages/index.php");
    exit();
} ?>
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

        tr {
            text-align: center;
        }

        th {
            background-color: red;
            color: #fff;
        }

        th,
        tr {
            border: 1px solid black;
            padding: 8px;
        }

        .dangerBtn {
            background-color: red;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1.1rem;
        }

        .successBtn {
            background-color: green;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1.1rem;
        }

        button {
            cursor: pointer;
        }

        td:last-child {
            padding: 0.5rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
            /* border: none; */
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
                        <a href="../../View/Pages/updateCandidate.php?id=<?php echo $row["id"]; ?>"><button
                                class="successBtn">Edit</button></a>
                        <a href="../../Controller/delete_candidate_layor.php?id=<?php echo $row["id"]; ?>"><button
                                class="dangerBtn">Delete</button></a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>