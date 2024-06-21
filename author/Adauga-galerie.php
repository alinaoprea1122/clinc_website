<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_POST['submit'])) {
    $titlul = $_POST['titlul'];
    $status = $_POST['status'];
    $img = $_FILES['img']['name'];
    $target = "author/assets/images/users/" . basename($img);

    // Obținerea celei mai mari valori de id_galerie și incrementarea acesteia
    $result = mysqli_query($db_con, "SELECT MAX(id_galerie) AS max_id FROM galerie");
    $row = mysqli_fetch_assoc($result);
    $max_id = $row['max_id'] + 1;

    // Verificăm dacă fișierul a fost încărcat corect
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
        $query = "INSERT INTO galerie (id_galerie, titlul, img, status) VALUES ('$max_id', '$titlul', '$img', '$status')";
        if (mysqli_query($db_con, $query)) {
            header('Location: gallery.php');
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
