<?php

global $db_con;
require_once '../controller/config/db_config.php';

if(isset($_GET['id'])) {
    $id_servicii = $_GET['id'];
    $delete_query = "DELETE FROM servicii WHERE id_servicii = $id_servicii";

    if(mysqli_query($db_con, $delete_query)) {
        header("Location: our_services.php?");
    } else {
        echo "Eroare la ștergerea serviciului.";
    }
}
?>
