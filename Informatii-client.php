<!DOCTYPE html>
<html lang="ro">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>VetCare</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/paws.png">

    <!-- CSS File -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awsome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/informatii-client.css">

</head>

<body>
<?php require_once 'include/header.php' ?>
<div class="container-pay">
    <h2>Informații client</h2>
    <form id="customer-info-form">
        <div class="form-group">
            <label for="name">Nume:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Adresa de livrare:</label>
            <textarea id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="phone">Telefon:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="country">Țară:</label>
            <input type="text" id="country" name="country" required>
        </div>
        <div class="form-group">
            <label for="region">Județ:</label>
            <input type="text" id="region" name="region" required>
        </div>
        <div class="form-group">
            <label for="city">Oraș:</label>
            <input type="text" id="city" name="city" required>
        </div>
        <div class="form-group">
            <label for="postal-code">Cod poștal:</label>
            <input type="text" id="postal-code" name="postal-code" required>
        </div>

        <!-- Alte informații necesare -->
        <a href="Plata.php" class="button"> Trimite Comanda</a>

    </form>
</div>

<?php require_once 'include/footer.php' ?>
<!-- scroll to up -->
<div class="scrollup"><i class="fas fa-angle-double-up"></i></div>

<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/counterup.min.js"></script>
<script src="assets/js/vendor/jquery.meanmenu.min.js"></script>
<script src="assets/js/vendor/isotope.pkgd.min.js"></script>
<script src="assets/js/vendor/waypoints.min.js"></script>
<script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="assets/js/vendor/easing.min.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/vendor/informatii-client.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>

