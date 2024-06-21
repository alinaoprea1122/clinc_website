<?php
global $db_con;
require_once '../controller/config/db_config.php';

// Verifică dacă există un ID în URL
if (isset($_GET['id'])) {
    $id_doctor = $_GET['id'];
    $query = "SELECT * FROM doctori WHERE id_doctor = '$id_doctor'";
    $result = mysqli_query($db_con, $query);

    if ($result) {
        $doctor = mysqli_fetch_assoc($result);
    } else {
        echo "Eroare la preluarea datelor doctorului.";
        exit;
    }
} else {
    echo "ID-ul doctorului nu a fost specificat.";
    exit;
}

// Actualizează datele doctorului
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_doctor = $_POST['id_doctor'];
    $nume = $_POST['nume'];
    $id_serviciu = $_POST['id_serviciu'];
    $serviciu = $_POST['serviciu'];
    $număr_doctor_contact = $_POST['număr_doctor_contact'];
    $salariu_doctor = $_POST['salariu_doctor'];
    $data_angajare = $_POST['data_angajare'];
    $departament = $_POST['departament'];
    $doctor_status = $_POST['doctor_status'];

    $doctor_img = $_FILES['doctor_img']['name'];
    $target = "../assets/uploaded/doctor/" . basename($doctor_img);

    if ($doctor_img) {
        if (move_uploaded_file($_FILES['doctor_img']['tmp_name'], $target)) {
            $img_query = ", doctor_img='$doctor_img'";
        } else {
            echo "Eroare la încărcarea imaginii.";
            exit;
        }
    } else {
        $img_query = "";
    }

    $update_query = "UPDATE doctori SET 
                    nume='$nume', 
                    id_serviciu='$id_serviciu', 
                    serviciu='$serviciu', 
                    număr_doctor_contact='$număr_doctor_contact', 
                    salariu_doctor='$salariu_doctor', 
                    data_angajare='$data_angajare', 
                    departament='$departament', 
                    doctor_status='$doctor_status' 
                    $img_query
                  WHERE id_doctor='$id_doctor'";

    if (mysqli_query($db_con, $update_query)) {
        header('Location: our_doctors.php?msg=Doctor actualizat cu succes');
        exit();
    } else {
        echo "Eroare: " . mysqli_error($db_con);
    }
}

mysqli_close($db_con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Editare Doctor</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h2>Editare Doctor</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_doctor" value="<?php echo $doctor['id_doctor']; ?>">

        <div class="form-group">
            <label for="nume">Nume Doctor</label>
            <input type="text" class="form-control" id="nume" name="nume" value="<?php echo $doctor['nume']; ?>" required>
        </div>
        <div class="form-group">
            <label for="id_serviciu">Id Serviciu</label>
            <input type="text" class="form-control" id="id_serviciu" name="id_serviciu" value="<?php echo $doctor['id_serviciu']; ?>" required>
        </div>
        <div class="form-group">
            <label for="serviciu">Serviciu</label>
            <input type="text" class="form-control" id="serviciu" name="serviciu" value="<?php echo $doctor['serviciu']; ?>" required>
        </div>
        <div class="form-group">
            <label for="număr_doctor_contact">Numar Doctor</label>
            <input type="text" class="form-control" id="număr_doctor_contact" name="număr_doctor_contact" value="<?php echo $doctor['număr_doctor_contact']; ?>" required>
        </div>
        <div class="form-group">
            <label for="salariu_doctor">Salariul Doctorului</label>
            <input type="number" class="form-control" id="salariu_doctor" name="salariu_doctor" value="<?php echo $doctor['salariu_doctor']; ?>" required>
        </div>
        <div class="form-group">
            <label for="data_angajare">Data Angajare</label>
            <input type="date" class="form-control" id="data_angajare" name="data_angajare" value="<?php echo $doctor['data_angajare']; ?>">
        </div>
        <div class="form-group">
            <label for="doctor_img">Doctor Imagine</label>
            <input type="file" accept="image/*" class="form-control" id="doctor_img" name="doctor_img">
        </div>
        <div class="form-group">
            <label for="departament">Departament</label>
            <input type="text" class="form-control" id="departament" name="departament" value="<?php echo $doctor['departament']; ?>" required>
        </div>
        <div class="form-group">
            <label for="doctor_status">Status Doctor</label>
            <select class="form-control" id="doctor_status" name="doctor_status" required>
                <option value="1" <?php if($doctor['doctor_status'] == 1) echo 'selected'; ?>>Activ</option>
                <option value="0" <?php if($doctor['doctor_status'] == 0) echo 'selected'; ?>>Inactiv</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Salvează</button>
    </form>
</div>
</body>
</html>
