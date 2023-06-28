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
    <link rel="stylesheet" href="../style/index.css">
</head>
<style>
    .container {
        padding: 1rem;
    }

    th {
        padding: 1rem 0;
        background-color: skyblue;
        font-size: 1.2rem;
    }

    table {
        border: 2px solid black;
        width: 80%;
        margin: 10vh auto;
    }

    td {
        text-align: center;
        padding: 0rem 3rem;
    }

    button {
        background-color: green;
        color: #fff;
        border: none;
        padding: 0.7rem 1.2rem;
        cursor: pointer;
    }
</style>

<body>
    <?php include '../Components/navigation.php'; ?>
    <div class="container">
        <h2>Total Candidate:
            <?php echo ($result->num_rows) ?>
        </h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Qualifiacation</th>
                <th>Votes</th>
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
                        <form action="">
                            <button>Vote</button>
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
        </table>
    </div>
</body>

</html>