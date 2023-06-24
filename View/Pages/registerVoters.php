<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 90%;
            margin: 10vh auto;
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

        .form-group input {
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
    </style>
</head>

<body>
    <?php include '../Components/navigation.php'; ?>
    <div class="container">
        <h2>Register User</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <span class="error" id="name-error"></span>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
                <span class="error" id="address-error"></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <span class="error" id="email-error"></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <span class="error" id="password-error"></span>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <input type="text" id="role" name="role" required>
                <span class="error" id="role-error"></span>
            </div>
            <div class="form-group">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function (event) {
            var nameInput = document.getElementById('name');
            var addressInput = document.getElementById('address');
            var emailInput = document.getElementById('email');
            var passwordInput = document.getElementById('password');
            var roleInput = document.getElementById('role');
            var nameError = document.getElementById('name-error');
            var addressError = document.getElementById('address-error');
            var emailError = document.getElementById('email-error');
            var passwordError = document.getElementById('password-error');
            var roleError = document.getElementById('role-error');
            var nameRegex = /^[a-zA-Z\s]+$/;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var passwordRegex = /^.{8,}$/;

            if (!nameRegex.test(nameInput.value)) {
                nameError.textContent = 'Name is invalid.';
                event.preventDefault();
            } else {
                nameError.textContent = '';
            }

            if (addressInput.value.trim() === '') {
                addressError.textContent = 'Address is required.';
                event.preventDefault();
            } else {
                addressError.textContent = '';
            }

            if (!emailRegex.test(emailInput.value)) {
                emailError.textContent = 'Email is invalid.';
                event.preventDefault();
            } else {
                emailError.textContent = '';
            }

            if (!passwordRegex.test(passwordInput.value)) {
                passwordError.textContent = 'Password must be at least 8 characters long.';
                event.preventDefault();
            } else {
                passwordError.textContent = '';
            }

            if (roleInput.value.trim() === '') {
                roleError.textContent = 'Role is required.';
                event.preventDefault();
            } else {
                roleError.textContent = '';
            }
        });
    </script>
</body>

</html>