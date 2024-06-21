<?php
require_once '../controller/config/db_config.php';

global $db_con;

if(isset($_GET['id'])) {
    $id_programare = $_GET['id'];

    $sql = "SELECT * FROM `programare` WHERE id = $id_programare";
    $result = mysqli_query($db_con, $sql);
    $programare = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nume = $_POST['nume'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $data_programarii = $_POST['data_programarii'];
        $id_servicii = $_POST['id_servicii'];
        $id_doctor = $_POST['id_doctor'];
        $status_programare = $_POST['status_programare'];

        $sql_update = "UPDATE `programare` SET 
                        nume='$nume', 
                        email='$email', 
                        telefon='$telefon', 
                        data_programarii='$data_programarii', 
                        id_servicii='$id_servicii', 
                        id_doctor='$id_doctor', 
                        status_programare='$status_programare' 
                        WHERE id=$id_programare";

        if (mysqli_query($db_con, $sql_update)) {
            header('Location: painding_appointment.php');
            exit();
        } else {
            echo "Error: " . $sql_update . "<br>" . mysqli_error($db_con);
        }
    }
} else {
    echo "ID programare invalid!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editează Programare</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h2>Editează Programare</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="nume">Nume Client:</label>
            <input type="text" class="form-control" id="nume" name="nume" value="<?php echo $programare['nume']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $programare['email']; ?>">
        </div>
        <div class="form-group">
            <label for="telefon">Numar de Telefon:</label>
            <input type="text" class="form-control" id="telefon" name="telefon" value="<?php echo $programare['telefon']; ?>" required>
        </div>
        <div class="form-group">
            <label for="data_programarii">Data Programarii:</label>
            <input type="date" class="form-control" id="data_programarii" name="data_programarii" value="<?php echo $programare['data_programarii']; ?>" required>
        </div>
        <div class="form-group">
            <label for="id_servicii">Departament/Serviciu:</label>
            <input type="text" class="form-control" id="id_servicii" name="id_servicii" value="<?php echo $programare['id_servicii']; ?>" required>
        </div>
        <div class="form-group">
            <label for="id_doctor">Doctor:</label>
            <input type="text" class="form-control" id="id_doctor" name="id_doctor" value="<?php echo $programare['id_doctor']; ?>" required>
        </div>
        <div class="form-group">
            <label for="status_programare">Status:</label>
            <select class="form-control" id="status_programare" name="status_programare">
                <option value="0" <?php echo $programare['status_programare'] == 0 ? 'selected' : ''; ?>>In Asteptare</option>
                <option value="1" <?php echo $programare['status_programare'] == 1 ? 'selected' : ''; ?>>Confirmata</option>
                <option value="2" <?php echo $programare['status_programare'] == 2 ? 'selected' : ''; ?>>Anulata</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvează</button>
    </form>
</div>
</body>
</html>
