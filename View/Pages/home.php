<?php session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../Pages/index.php");
    exit();
} ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style/index.css">
</head>
<style>
    span {
        color: red;
    }

    h1 {
        color: blue;
        border: 2px solid red;
        width: 50%;
        padding: 1rem;
        font-size: 3rem;
    }

    .container {
        padding: 1rem;
    }

    table,
    td {
        border: 2px solid black;
        width: 80%;
        margin: 10vh auto;
        padding: 7px;
    }

    button {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        padding: 0.5rem 1rem;
        cursor: pointer;
        color: #fff;
        background-color: red;
        font-size: 1.5rem;
        border: none;
        box-shadow: 0 0 8px blue;
        border-radius: 7px;
    }
</style>

<body>
    <?php include '../Components/navigation.php'; ?>
    <div class="container">
        <center>
            <h1><span>ஜ۞ஜ</span> मतदान <span>ஜ۞ஜ</span></h1>
        </center>
        <h2>Total Candidate: 9</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Votes</th>
            </tr>
            <tr>
                <td>Rahul Khanal</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Rahul Khanal</td>
                <td>90</td>
            </tr>
        </table>
    </div>
    <form action="../../Controller/LogOut.php" method="post">
        <button type="submit" name="logout_button">Log Out</button>
    </form>
</body>

</html>