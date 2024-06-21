<?php
global $db_con;
require_once '../controller/config/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_faq = $_POST['id_faq'];
    $titlul = $_POST['titlul'];
    $descriere = $_POST['descriere'];
    $data = $_POST['data'];
    $status = $_POST['status'];

    // Verificăm dacă `id_faq` nu este deja utilizat în baza de date
    $check_query = "SELECT COUNT(*) as count FROM faq WHERE id_faq = ?";
    if ($check_stmt = $db_con->prepare($check_query)) {
        $check_stmt->bind_param('i', $id_faq);
        $check_stmt->execute();
        $check_stmt->bind_result($count);
        $check_stmt->fetch();
        $check_stmt->close();

        if ($count > 0) {
            die("Eroare: `id_faq` deja utilizat.");
        }
    }

    // Crează o interogare pentru a introduce datele în baza de date
    $query = "INSERT INTO faq (id_faq, titlul, descriere, data, status) VALUES (?, ?, ?, ?, ?)";

    // Pregătește declarația
    if ($stmt = $db_con->prepare($query)) {
        // Leagă variabilele la declarația pregătită ca parametri
        $stmt->bind_param('issss', $id_faq, $titlul, $descriere, $data, $status);

        // Execută declarația pregătită
        if ($stmt->execute()) {
            // Redirecționează către pagina FAQ după succes
            header("Location: faq.php");
            exit();
        } else {
            echo "Eroare: " . $stmt->error;
        }

        // Închide declarația
        $stmt->close();
    } else {
        echo "Eroare la pregătirea declarației: " . $db_con->error;
    }

    // Închide conexiunea la baza de date
    $db_con->close();
}
?>
