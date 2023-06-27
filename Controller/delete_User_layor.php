<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $uid = $_GET["id"];
    echo '<script>
            var confirmDelete = confirm("Are you sure you want to delete this candidate?");
            if (confirmDelete) {
                window.location.href = "../Model/delete-User.php?id=' . $uid . '";
            }else{
                window.location.href = "../View/Pages/voters.php";    
            }
        </script>';
}
?>