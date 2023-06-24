<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style/index.css">

    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 80%;
            margin: 12vh auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .form-group input[type="submit"] {
            background-color: blue;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: darkblue;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        #image {
            display: none;
        }

        img {
            width: 100px;
        }
    </style>
</head>

<body>
    <?php include '../Components/navigation.php'; ?>
    <div class="container">
        <h2>Add Candidate</h2>
        <div class="form-group">
            <label for="image">
                <center style="padding: 1rem 0">
                    <img src="./user.png" />
                </center>
            </label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <span class="error" id="name-error"></span>
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" id="position" name="position" required>
                <span class="error" id="position-error"></span>
            </div>
            <div class="form-group">
                <label for="qualification">Qualification:</label>
                <textarea id="qualification" name="qualification" required></textarea>
                <span class="error" id="qualification-error"></span>
            </div>
            <div class="form-group">
                <input type="submit" value="Add">
            </div>
        </form>
    </div>
</body>

</html>