<?php
global $db_con;
require_once '../controller/config/db_config.php';

// Verifică dacă există un ID în URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Șterge FAQ-ul
    $delete_query = "DELETE FROM `faq` WHERE `id_faq` = $id";

    if (mysqli_query($db_con, $delete_query)) {
        header('Location: faq.php');
        exit;
    } else {
        echo "Eroare la ștergerea FAQ-ului.";
    }
} else {
    echo "ID-ul FAQ-ului nu a fost specificat.";
    exit;
}
?>
