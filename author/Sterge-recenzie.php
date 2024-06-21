<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM recenzii WHERE id = '$id'";
    if (mysqli_query($db_con, $query)) {
        header('Location: customer_review.php?msg=Recenzie ștearsă cu succes');
        exit();
    } else {
        echo "Eroare: " . mysqli_error($db_con);
    }
} else {
    header('Location: customer_review.php');
    exit();
}

mysqli_close($db_con);
?>
