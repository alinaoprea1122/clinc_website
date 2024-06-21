<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Șterge înregistrarea din baza de date
    $query = "DELETE FROM galerie WHERE id_galerie = ?";
    $stmt = $db_con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: gallery.php");
}
?>
