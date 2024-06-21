<?php
global $db_con;
require_once '../controller/config/db_config.php';

// Verifică dacă există un ID în URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obține datele articolului de blog
    $query = "SELECT * FROM `stirile_noastre` WHERE `id_stiri` = $id";
    $result = mysqli_query($db_con, $query);

    if ($result) {
        $blog = mysqli_fetch_assoc($result);
    } else {
        echo "Eroare la preluarea datelor articolului de blog.";
        exit;
    }
} else {
    echo "ID-ul articolului de blog nu a fost specificat.";
    exit;
}

// Actualizează datele articolului de blog
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titlul = $_POST['titlul'];
    $categorie_stire = $_POST['categorie_stire'];
    $data_publicarii = $_POST['data_publicarii'];
    $scurta_istorie = $_POST['scurta_istorie'];

    $update_query = "UPDATE `stirile_noastre` SET 
                     `titlul` = '$titlul', 
                     `categorie_stire` = '$categorie_stire', 
                     `data_publicarii` = '$data_publicarii', 
                     `scurta_istorie` = '$scurta_istorie' 
                     WHERE `id_stiri` = $id";

    if (mysqli_query($db_con, $update_query)) {
        header('Location: news_blog.php');
        exit;
    } else {
        echo "Eroare la actualizarea articolului de blog.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Editează Blog</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h2>Editează Blog</h2>
    <form method="post">
        <div class="form-group">
            <label for="titlul">Titlul</label>
            <input type="text" class="form-control" id="titlul" name="titlul" value="<?php echo $blog['titlul']; ?>" required>
        </div>
        <div class="form-group">
            <label for="categorie_stire">Categorie Stire</label>
            <select class="form-control" id="categorie_stire" name="categorie_stire" required>
                <option value="Sanatate" <?php if ($blog['categorie_stire'] == 'Sanatate') echo 'selected'; ?>>Sanatate</option>
                <option value="Ingrijire" <?php if ($blog['categorie_stire'] == 'Ingrijire') echo 'selected'; ?>>Ingrijire</option>
            </select>
        </div>
        <div class="form-group">
            <label for="data_publicarii">Data Publicarii</label>
            <input type="date" class="form-control" id="data_publicarii" name="data_publicarii" value="<?php echo $blog['data_publicarii']; ?>" required>
        </div>
        <div class="form-group">
            <label for="scurta_istorie">Scurta Descriere</label>
            <input type="text" class="form-control" id="scurta_istorie" name="scurta_istorie" value="<?php echo $blog['scurta_istorie']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvează</button>
    </form>
</div>
</body>
</html>
