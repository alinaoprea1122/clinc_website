<?php
global $db_con;
require_once '../controller/config/db_config.php';

// Verifică dacă există un ID în URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obține datele FAQ-ului
    $query = "SELECT * FROM `faq` WHERE `id_faq` = $id";
    $result = mysqli_query($db_con, $query);

    if ($result) {
        $faq = mysqli_fetch_assoc($result);
    } else {
        echo "Eroare la preluarea datelor FAQ.";
        exit;
    }
} else {
    echo "ID-ul FAQ-ului nu a fost specificat.";
    exit;
}

// Actualizează datele FAQ-ului
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titlul = $_POST['titlul'];
    $descriere = $_POST['descriere'];
    $data = $_POST['data'];
    $status = $_POST['status'];

    $update_query = "UPDATE `faq` SET 
                     `titlul` = '$titlul', 
                     `descriere` = '$descriere', 
                     `data` = '$data', 
                     `status` = '$status' 
                     WHERE `id_faq` = $id";

    if (mysqli_query($db_con, $update_query)) {
        header('Location: faq.php');
        exit;
    } else {
        echo "Eroare la actualizarea FAQ-ului.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Editează FAQ</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h2>Editează FAQ</h2>
    <form method="post">
        <div class="form-group">
            <label for="titlul">Titlul</label>
            <input type="text" class="form-control" id="titlul" name="titlul" value="<?php echo $faq['titlul']; ?>" required>
        </div>
        <div class="form-group">
            <label for="descriere">Descriere</label>
            <textarea class="form-control" id="descriere" name="descriere" required><?php echo $faq['descriere']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" class="form-control" id="data" name="data" value="<?php echo $faq['data']; ?>" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Activ" <?php if ($faq['status'] == 'Activ') echo 'selected'; ?>>Activ</option>
                <option value="Inactiv" <?php if ($faq['status'] == 'Inactiv') echo 'selected'; ?>>Inactiv</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvează</button>
    </form>
</div>
</body>
</html>
