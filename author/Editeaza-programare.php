<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Preluare informații programare pentru editare
    $query = "SELECT * FROM `programare` WHERE id = ?";
    $stmt = $db_con->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $programare = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Actualizare informații programare
        $nume = $_POST['nume'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $data_programarii = $_POST['data_programarii'];
        $ora_programarii = $_POST['ora_programarii'];
        $id_servicii = $_POST['id_servicii'];
        $id_doctor = $_POST['id_doctor'];
        $status_programare = $_POST['status_programare'];

        $update_query = "UPDATE `programare` SET nume = ?, email = ?, telefon = ?, data_programarii = ?, ora_programarii = ?, id_servicii = ?, id_doctor = ?, status_programare = ? WHERE id = ?";
        $update_stmt = $db_con->prepare($update_query);
        $update_stmt->bind_param('ssssssisi', $nume, $email, $telefon, $data_programarii, $ora_programarii, $id_servicii, $id_doctor, $status_programare, $id);
        $update_stmt->execute();

        header("Location: approve_appointment.php");
        exit();
    }
} else {
    // Redirecționare dacă nu există ID în URL
    header("Location: approve_appointment.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Editează Programare</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h2>Editează Programare</h2>
    <form method="post">
        <div class="form-group">
            <label>Nume</label>
            <input type="text" name="nume" class="form-control" value="<?php echo $programare['nume']; ?>" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $programare['email']; ?>" required>
        </div>
        <div class="form-group">
            <label>Telefon</label>
            <input type="text" name="telefon" class="form-control" value="<?php echo $programare['telefon']; ?>" required>
        </div>
        <div class="form-group">
            <label>Data Programării</label>
            <input type="date" name="data_programarii" class="form-control" value="<?php echo $programare['data_programarii']; ?>" required>
        </div>
        <div class="form-group">
            <label>Ora Programării</label>
            <input type="time" name="ora_programarii" class="form-control" value="<?php echo $programare['ora_programarii']; ?>" required>
        </div>
        <div class="form-group">
            <label>ID Servicii</label>
            <input type="text" name="id_servicii" class="form-control" value="<?php echo $programare['id_servicii']; ?>" required>
        </div>
        <div class="form-group">
            <label>ID Doctor</label>
            <input type="text" name="id_doctor" class="form-control" value="<?php echo $programare['id_doctor']; ?>" required>
        </div>
        <div class="form-group">
            <label>Status Programare</label>
            <input type="text" name="status_programare" class="form-control" value="<?php echo $programare['status_programare']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvează</button>
    </form>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
