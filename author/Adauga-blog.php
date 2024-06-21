<?php
global $db_con;
require_once '../controller/config/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_stiri = $_POST['id_stiri'];
    $titlul = $_POST['titlul'];
    $categorie_stire = $_POST['categorie_stire'];
    $data_publicarii = $_POST['data_publicarii'];
    $scurta_istorie = $_POST['scurta_istorie'];

    $insert_query = "INSERT INTO `stirile_noastre` (`id_stiri`, `titlul`, `categorie_stire`, `data_publicarii`, `scurta_istorie`)
                     VALUES ('$id_stiri', '$titlul', '$categorie_stire', '$data_publicarii', '$scurta_istorie')";

    if (mysqli_query($db_con, $insert_query)) {
        header('Location: news_blog.php');
        exit;
    } else {
        echo "Eroare la adăugarea articolului de blog.";
    }
}
?>
