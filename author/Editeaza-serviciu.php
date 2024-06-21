<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id_servicii = $_GET['id'];
    $query = "SELECT * FROM servicii WHERE id_servicii = $id_servicii";
    $result = mysqli_query($db_con, $query);

    if (mysqli_num_rows($result) > 0) {
        $serviciu = mysqli_fetch_assoc($result);
    } else {
        echo "Serviciu nu a fost găsit.";
        exit;
    }
}

if (isset($_POST['update'])) {
    $nume_serviciu = $_POST['nume_serviciu'];
    $scurta_descriere = $_POST['scurta_descriere'];
    $id_doctor = $_POST['id_doctor'];
    $serviciu_status = $_POST['serviciu_status'];

    $update_query = "UPDATE servicii SET 
                     nume_serviciu = '$nume_serviciu', 
                     scurta_descriere = '$scurta_descriere', 
                     id_doctor = '$id_doctor', 
                     serviciu_status = '$serviciu_status' 
                     WHERE id_servicii = $id_servicii";

    if (mysqli_query($db_con, $update_query)) {
        header("Location: our_services.php?msg=Serviciu actualizat cu succes");
        exit();
    } else {
        echo "Eroare la actualizarea serviciului.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editează Serviciu</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h2>Editează Serviciu</h2>
    <form method="post">
        <div class="form-group">
            <label for="nume_serviciu">Nume Serviciu</label>
            <input type="text" class="form-control" id="nume_serviciu" name="nume_serviciu" value="<?php echo $serviciu['nume_serviciu']; ?>" required>
        </div>
        <div class="form-group">
            <label for="scurta_descriere">Scurta Descriere</label>
            <textarea class="form-control" id="scurta_descriere" name="scurta_descriere" required><?php echo $serviciu['scurta_descriere']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="id_doctor">ID Doctor</label>
            <input type="number" class="form-control" id="id_doctor" name="id_doctor" value="<?php echo $serviciu['id_doctor']; ?>" required>
        </div>
        <div class="form-group">
            <label for="serviciu_status">Serviciu Status</label>
            <select class="form-control" id="serviciu_status" name="serviciu_status" required>
                <option value="activ" <?php if ($serviciu['serviciu_status'] == 'activ') echo 'selected'; ?>>Activ</option>
                <option value="inactiv" <?php if ($serviciu['serviciu_status'] == 'inactiv') echo 'selected'; ?>>Inactiv</option>
            </select>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Actualizează</button>
    </form>
</div>
</body>
</html>
