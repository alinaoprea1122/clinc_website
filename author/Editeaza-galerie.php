<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM galerie WHERE id_galerie = ?";
    $stmt = $db_con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $galerie = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id_galerie'];
    $titlul = $_POST['titlul'];
    $status = $_POST['status'];

    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $img = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], "author/assets/images/users/" . $img);
    } else {
        $img = $_POST['current_img'];
    }

    $update_query = "UPDATE galerie SET titlul = ?, img = ?, status = ? WHERE id_galerie = ?";
    $stmt = $db_con->prepare($update_query);
    $stmt->bind_param("sssi", $titlul, $img, $status, $id);
    $stmt->execute();

    header("Location: gallery.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editează Galerie</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h2>Editează Galerie</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_galerie" value="<?php echo $galerie['id_galerie']; ?>">
        <div class="form-group">
            <label for="titlul">Titlul:</label>
            <input type="text" class="form-control" id="titlul" name="titlul" value="<?php echo $galerie['titlul']; ?>" required>
        </div>
        <div class="form-group">
            <label for="img">Imagine:</label>
            <input type="file" class="form-control" id="img" name="img">
            <input type="hidden" name="current_img" value="<?php echo $galerie['img']; ?>">
            <img src="author/assets/images/users/<?php echo $galerie['img']; ?>" alt="<?php echo $galerie['img']; ?>" width="100">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="activ" <?php echo $galerie['status'] == 'activ' ? 'selected' : ''; ?>>Activ</option>
                <option value="inactiv" <?php echo $galerie['status'] == 'inactiv' ? 'selected' : ''; ?>>Inactiv</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="update">Actualizează Galerie</button>
    </form>
</div>
</body>
</html>
