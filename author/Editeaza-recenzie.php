<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM recenzii WHERE id = $id";
    $result = mysqli_query($db_con, $query);

    if (mysqli_num_rows($result) > 0) {
        $recenzie = mysqli_fetch_assoc($result);
    } else {
        echo "Recenzia nu a fost găsită.";
        exit;
    }
}

if (isset($_POST['update'])) {
    $recenzie_text = $_POST['recenzie'];
    $data = $_POST['data'];
    $status = $_POST['status'];

    $update_query = "UPDATE recenzii SET recenzie = '$recenzie_text', data = '$data', status = '$status' WHERE id = $id";

    if (mysqli_query($db_con, $update_query)) {
        header("Location: customer_review.php?msg=Recenzie actualizată cu succes");
        exit();
    } else {
        echo "Eroare la actualizarea recenziei.";
    }
}

mysqli_close($db_con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editează Recenzie</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h2>Editează Recenzie</h2>
    <form method="post">
        <div class="form-group">
            <label for="recenzie">Recenzie</label>
            <textarea class="form-control" id="recenzie" name="recenzie" required><?php echo $recenzie['recenzie']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" class="form-control" id="data" name="data" value="<?php echo $recenzie['data']; ?>" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="activ" <?php if ($recenzie['status'] == 'activ') echo 'selected'; ?>>Activ</option>
                <option value="inactiv" <?php if ($recenzie['status'] == 'inactiv') echo 'selected'; ?>>Inactiv</option>
            </select>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Actualizează</button>
    </form>
</div>
</body>
</html>
