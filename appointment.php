<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Programare</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/paws.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awsome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!-- header -->
    <?php require_once 'include/header.php' ?>
    

    <!-- breadcrumb area -->
    <div class="breadcrumb-area" style="background-image: url('assets/images/background6.jpeg');">
        <div class="container">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Programeaza-te</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.php">Acasa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Programeaza-te</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- ht-appnt area -->
    <div class="ht-appnt-area padding-top-120 padding-bottom-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 wow fadeInLeft">
                    <div class="appnt-left">
                        <img src="assets/images/doctors1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight">
                    <div class="appnt-right">
                        <div class="common-title">
                            <h2>Programeaza-te !</h2>
                        </div>
                        <form action="#">
                            <div class="row form-wrapper margin-top-30">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Nume" class="input-box">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Introduceti E-mail" class="input-box">
                                </div>
                                <div class="col-lg-6">
                                    <input type="tel" placeholder="Introduceti Numarul de Telefonr" class="input-box">
                                </div>
                                <div class="col-lg-6">
                                    <input type="date" class="input-box">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Departament" class="input-box">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Doctor" class="input-box">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Introduce Mesajul" class="input-box input-box2"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn1">Programeaza Acum</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php require_once 'include/footer.php' ?>


    <!-- scroll to up -->
    <div class="scrollup"><i class="fas fa-angle-double-up"></i></div>

    <!-- Javascript Files -->
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
    <script src="assets/js/main.js"></script>
</body>

</html>