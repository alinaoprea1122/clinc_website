<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM `date_utilizator` WHERE id = ?";
    $stmt = $db_con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: contact_us.php?message=deleted");
    } else {
        header("Location: contact_us.php?message=error");
    }
    $stmt->close();
    $db_con->close();
} else {
    header("Location: contact_us.php");
}
?>
