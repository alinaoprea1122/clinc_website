<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_POST['submit'])) {
    $id_doctor = $_POST['id_doctor'];
    $nume = $_POST['nume'];
    $id_serviciu = $_POST['id_serviciu'];
    $serviciu = $_POST['serviciu'];
    $numar_doctor_contact = $_POST['numar_doctor_contact'];
    $salariu_doctor = $_POST['salariu_doctor'];
    $data_angajare = $_POST['data_angajare'];
    $departament = $_POST['departament'];
    $doctor_status = $_POST['doctor_status'];

    $doctor_img = $_FILES['doctor_img']['name'];
    $target = "../assets/uploaded/doctor/" . basename($doctor_img);

    // Verificăm dacă fișierul a fost încărcat corect
    if (move_uploaded_file($_FILES['doctor_img']['tmp_name'], $target)) {
        $query = "INSERT INTO doctori (id_doctor, nume, id_serviciu, serviciu, număr_doctor_contact, salariu_doctor, data_angajare, doctor_img, departament, doctor_status) 
                  VALUES ('$id_doctor', '$nume', '$id_serviciu', '$serviciu', '$numar_doctor_contact', '$salariu_doctor', '$data_angajare', '$doctor_img', '$departament', '$doctor_status')";
        if (mysqli_query($db_con, $query)) {
            header('Location: our_doctors.php?msg=Doctor adăugat cu succes');
            exit();
        } else {
            echo "Eroare: " . $query . "<br>" . mysqli_error($db_con);
        }
    } else {
        echo "Eroare la încărcarea imaginii.";
    }
}

mysqli_close($db_con);
?>
