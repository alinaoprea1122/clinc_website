<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $recenzie = $_POST['recenzie'];
    $data = $_POST['data'];
    $status = $_POST['status'];

    $query = "INSERT INTO recenzii (id, recenzie, data, status) VALUES ('$id', '$recenzie', '$data', '$status')";
    if (mysqli_query($db_con, $query)) {
        header('Location: customer_review.php?msg=Recenzie adăugată cu succes');
        exit();
    } else {
        echo "Eroare: " . mysqli_error($db_con);
    }
}

mysqli_close($db_con);
?>
