<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style/index.css">

</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    header {
        position: sticky;
        top: 0;
        background-color: blue;
        padding: 10px;
        z-index: 100;
    }

    .navbar {
        display: flex;
        justify-content: center;
    }

    .navbar-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .navbar-list li {
        display: inline-block;
        margin-right: 10px;
    }

    .navbar-list li a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    .navbar-list li a:hover {
        background-color: red;
    }
</style>

<body>
    <header>
        <nav class="navbar">
            <ul class="navbar-list">
                <li><a href="../Pages/home.php">Home</a></li>
                <li><a href="../Pages/registerVoters.php">Register Users</a></li>
                <li><a href="../Pages/registerCandidate.php">Register Candidates</a></li>
                <li><a href="#vote-page">Vote</a></li>
                <li><a href="#view-voters">View Users</a></li>
                <li><a href="../Pages/candidates.php">Candidates</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>