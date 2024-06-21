<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_query = "DELETE FROM programare WHERE id = $id";
    if (mysqli_query($db_con, $delete_query)) {
        header("Location: approve_appointment.php?status=success&message=Programare ștearsă cu succes");
    } else {
        header("Location: approve_appointment.php?status=error&message=Eroare la ștergerea programării");
    }
} else {
    header("Location: approve_appointment.php?status=error&message=ID invalid");
}
?>
