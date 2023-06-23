<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ஜ۞ஜ मतदान ஜ۞ஜ</title>
    <link rel="stylesheet" href="./style/index.css">
    <style>
        h1 span {
            color: red;
        }

        h1 {
            color: blue;
            border: 2px solid red;
            width: 50%;
            padding: 1rem;
            font-size: 3rem;
        }

        body {
            font-family: sans-serif;
            background-color: #fff;
            box-sizing: border-box;
            padding: 2rem;
        }

        form {
            width: 50%;
            margin: 20vh auto;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: left;
            box-shadow: 0 0 8px gray;
            border-radius: 7px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        button {
            background-color: blue;
            color: white;
            padding: 10px 2rem;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
        }

        button:hover {
            background-color: #0069ec;
        }
    </style>
</head>

<body>
    <center>
        <h1><span>ஜ۞ஜ</span> मतदान <span>ஜ۞ஜ</span></h1>
        <form method="post" action="../../Model/authentication.php">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email address">
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" placeholder="Enter your password">
            <br>
            <br>
            <button type="submit">Login</button>
        </form>
    </center>
</body>

</html>