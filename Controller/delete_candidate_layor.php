<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $candidateId = $_GET["id"];
    echo '<script>
            var confirmDelete = confirm("Are you sure you want to delete this candidate?");
            if (confirmDelete) {
                window.location.href = "../Model/delete_candidate.php?id=' . $candidateId . '";
            }else{
                window.location.href = "../View/Pages/candidates.php";    
            }
        </script>';
}
?>