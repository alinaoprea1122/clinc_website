<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `date_utilizator` WHERE id = $id";
    $result = mysqli_query($db_con, $query);
    $user = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nume = $_POST['nume'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $numar_telefon = $_POST['numar_telefon'];
    $mesaj = $_POST['mesaj'];

    $updateQuery = "UPDATE `date_utilizator` SET 
                    nume='$nume', 
                    data='$data', 
                    email='$email', 
                    `numar-telefon`='$numar_telefon', 
                    mesaj='$mesaj' 
                    WHERE id = $id";

    if (mysqli_query($db_con, $updateQuery)) {
        header("Location: contact_us.php");
    } else {
        echo "Error updating record: " . mysqli_error($db_con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editează Contact</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h2>Editează Contact</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="form-group">
            <label for="nume">Nume:</label>
            <input type="text" class="form-control" id="nume" name="nume" value="<?php echo $user['nume']; ?>" required>
        </div>
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="text" class="form-control" id="data" name="data" value="<?php echo $user['data']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="numar_telefon">Număr de Telefon:</label>
            <input type="text" class="form-control" id="numar_telefon" name="numar_telefon" value="<?php echo $user['numar-telefon']; ?>" required>
        </div>
        <div class="form-group">
            <label for="mesaj">Mesaj:</label>
            <textarea class="form-control" id="mesaj" name="mesaj" required><?php echo $user['mesaj']; ?></textarea>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Actualizează</button>
    </form>
</div>
</body>
</html>
