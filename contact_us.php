<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Pagina de Contact</title>

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
                    <h2 class="page-title">Contact</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.php">Acasa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- mcontact section -->
    <div class="mcontact-section padding-top-120 padding-bottom-115">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-6  wow fadeInUp">
                    <div class="mcontact-left">
                        <div class="common-title">
                            <h2 class="margin-bottom-20">Lasa-ne<span> sa te ajutam</span></h2>
                        </div>
                        <div class="inner-con margin-bottom-30">
                            <div class="icon-box">
                                <span><i class="icofont-ui-call"></i></span>
                            </div>
                            <div class="cont-box">
                                <h5>Numar de Telefon<span>__</span></h5>
                                <h3> +4073677231</h3>
                            </div>
                        </div>
                        <div class="support-box">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6">
                                    <div class="single-sup">
                                        <div class="icon-box">
                                            <span><i class="icofont-building"></i></span>
                                        </div>
                                        <h4 class="margin-bottom-20">Adresa</h4>
                                        <p><span>Strada Aurel Cosma , 5 </span>, Timisoara , Romania </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="single-sup">
                                        <div class="icon-box">
                                            <span><i class="icofont-live-support"></i></span>
                                        </div>
                                        <h4 class="margin-bottom-20">Suport Online</h4>
                                        <p><span></span>VetCare.suport@yahoo.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6 wow fadeInUp">
                    <div class="mcontact-right">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6853.254389951293!2d21.219441608492325!3d45.78121229643208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474567c6e59aa7b7%3A0x8aa6ff5fe1fd389a!2sFacultatea%20de%20Medicin%C4%83%20Veterinar%C4%83!5e1!3m2!1sro!2sro!4v1715746595733!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- mconform section -->
    <div class="mconform-section padding-bottom-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="mconform-left">
                        <img src="assets/images/doctors.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="common-title margin-bottom-25">
                        <h4 class="margin-bottom-10">Trimite Mesaj</h4>
                        <h2>Hai<span> sa vorbim !</span></h2>
                    </div>
                    <div class="mconform-right">
                        <form action="#">
                            <div class="row">
                                <div class="col-12">
                                    <input placeholder="Nume" required class="inputBox" type="text">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input class="inputBox" placeholder="Adresa de E-mail" required type='email'>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input class="inputBox" placeholder="Numar de Telefon" required type='tel'>
                                </div>
                                <div class="col-12">
                                    <textarea class="inputBox" placeholder="Introduce textul"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn2" type="submit" > <a href="Bot.php">Trimite Acum !</a></button>
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
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/easing.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>