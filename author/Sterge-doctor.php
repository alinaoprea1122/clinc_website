<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id_doctor = $_GET['id'];

    $query = "DELETE FROM doctori WHERE id_doctor = '$id_doctor'";
    if (mysqli_query($db_con, $query)) {
        header('Location: our_doctors.php?msg=Doctor șters cu succes');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db_con);
    }
} else {
    header('Location: our_doctors.php');
    exit();
}

mysqli_close($db_con);
?>
