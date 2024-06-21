<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM programare WHERE id='$id'";
    if (mysqli_query($db_con, $sql)) {
        header("Location: painding_appointment.php");
    } else {
        echo "Eroare la ștergerea programării: " . mysqli_error($db_con);
    }
}
?>
