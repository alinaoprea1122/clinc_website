
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>VetCare</title>

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

<!-- hero area -->
<div class="hero-slider-active">
    <div class="hero-area" style="background: url('assets/images/background3.jpeg');">
        <div class="hero-shapes">
            <img src="assets/images/heart.png" alt="" class="vec1 item-animateOne">
            <img src="assets/images/med.png" alt="" class="vec2 item-animateTwo">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-left">
                        <div class="common-title">
                            <h1 class="title-animation"><span>Analize</span></h1>
                        </div>
                        <p class="para-animation margin-top-30"> VetCare ofera diverse servicii pentru blanosul tau </p>
                        <div class="btn-box animate-btn margin-top-30">
                        </div>
                    </div>
                </div>
                <div class="hero-right">
                    <img src="assets/images/pngegg1%20-%20copie.png" alt="" class="main-img animate-img">
                    <img src="assets/images/clipart12806.png" alt="" class="bg-shapes">
                </div>
            </div>
        </div>
    </div>
    <div class="hero-area" style="background: url('assets/images/background1.jpeg');">
        <div class="hero-shapes">
            <img src="assets/images/heart.png" alt="" class="vec1 item-animateOne">
            <img src="assets/images/med.png" alt="" class="vec2 item-animateTwo">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-left">
                        <div class="common-title">
                            <h1 class="title-animation"><span>Avem grija</span> de sanatatea animalutului tau </h1>
                        </div>
                        <p class="para-animation margin-top-30">Obiectivul fiecărui stăpân este ca animalul său de companie să trăiască o viață lungă, fericită și sănătoasă. Cabinetul Veterinar VetCare ia foarte în serios acest obiectiv și pune pe primul loc sănătatea prietenilor noștri blănoși, cu accent, nu doar pe tratamente și servicii de calitate, ci și pe educare și PREVENȚIE.  </p>
                        <div class="btn-box animate-btn margin-top-30">
                            <a href="doctors.php" class="btn1">Alege medicul veterinar preferat</a>
                            <a href="contact_us.php" class="btn2">Contacteaza-ne</a>
                        </div>
                    </div>
                </div>
                <div class="hero-right">
                    <img src="assets/images/animals.png" alt="" class="main-img animate-img">
                    <img src="assets/images/clipart12806.png" alt="" class="bg-shapes">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- booking-area -->
<div class="booking-area wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="booking-form padding-bottom-40">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="input-wrapper">
                                    <input class="form-item2" type="text" placeholder="Nume intreg">
                                    <span class="icon"><i class="icofont-ui-user"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-wrapper">
                                    <input class="form-item2" type="tel" placeholder="Numarul de telefon">
                                    <span class="icon"><i class="icofont-phone"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-item2 input-wrapper">
                                    <option value="">Alegeti serviciul</option>
                                    <option value="">Consultatii de specialitate</option>
                                    <option value="">Tratamente specifice</option>
                                    <option value="">Vaccinari</option>
                                    <option value="">Deparazitari interne si externe</option>
                                    <option value="">Sterilizari</option>
                                    <option value="">Hemodializa veterinara-Dializa peritoneala</option>
                                    <option value="">Radiologie veterinara</option>
                                    <option value="">Anestezie inhalatorie</option>
                                    <option value="">Stomatologie veterinara</option>
                                    <option value="">Analize</option>
                                    <option value="">Ecografii</option>
                                    <option value="">Chirurgie</option>
                                    <option value="">Nutritie</option>
                                    <option value="">Microchipare-inregistrare RECS si Eliberare Pasaport UE</option>
                                    <option value="">Deplasare la domiciliu</option>
                                    <option value="">Internare-pensiune</option>
                                    <option value="">Farmacie veterinara si petshop</option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <a href="appointment.php" class="btn1">Programeaza Acum !</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- faq area -->
<div class="faq-area padding-top-115">
    <div class="faq-shapes">
        <img src="assets/images/iubire.png" alt="" class="vec1 item-animateOne">
        <img src="assets/images/paw.png" alt="" class="vec2 wow zoomIn">
    </div>
    <div class="container">
        <div class="row justify-content-center margin-bottom-45">

        </div>
        <div class="row">

            <div class="col-lg-7 col-12">
                <div class="faq-right">
                    <div id="accordion" class="accordion-wrapper">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h6>
                                    <a href="#" data-toggle="collapse" class="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Analize de Laborator Veterinare - IDEXX
                                    </a>
                                </h6>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Hemoleucograma LaserCyte Dx - CBC5R : 125 RON</p>
                                    <p>Biochimie VetTest - 12 parametri - General Health Profile : 375 RON</p>
                                    <p>Biochimie VetTest - 12 parametri - Diagnostic Health Profile : 385 RON</p>
                                    <p>Biochimie VetTest - 6 parametri - Profil Preanestezic - PAP : 235 RON</p>
                                    <p>Biochimie VetTest - 6 parametri - NSAID : 185 RON</p>
                                    <p>Biochimie VetTest - 1 parametru individual : 70-90 RON</p>
                                    <p>Biochimie Catalyst One : 17 parametrii - Chem 17 CLIP : 500 RON</p>
                                    <p>Biochimie Catalyst One : 15 parametrii - Chem 15 CLIP : 600 RON</p>
                                    <p>Biochimie Catalyst One : 10 parametrii - Chem 10 CLIP : 335 RON</p>
                                    <p>Biochimie Catalyst One : 6 parametrii - NSAID 6 CLIP : 265 RON</p>
                                    <p>Biochimie Catalyst One : 17 parametrii - Chem 17 CLIP + SDMA : 725 RON</p>
                                    <p>Biochimoe Catalyst One : 15 parametrii - Chem 15 CLIP + SDMA : 700 RON</p>
                                    <p>Biochimie Catalyst One : 10 parametrii - Chem 10 CLIP + SDMA : 600 RON</p>
                                    <p>Biochimie Catalyst One : 6 parametrii - NSAID 6 CLIP + SDMA : 600 RON</p>
                                    <p>Biochimie Catalyst One - SDMA : 425 RON</p>
                                    <p>Biochimie Catalyst One - Bile Acids : 235 RON</p>
                                    <p>Biochimie Catalyst One - C Reactive Protein (CRP) : 285 RON</p>
                                    <p>Biochimie Catalyst One - Total T4 : 285 RON</p>
                                    <p>Biochimie Catalyst One - Fructostamine : 300 RON</p>
                                    <p>Biochimie Catalyst One - Phenobarbital : 340 RON</p>
                                    <p>Biochimie Catalyst One - Raport proteine urinare/creatinina urinara : 240 RON</p>
                                    <p>Biochimie Catalyst One - 4 parametrii - Lyte 4 CLIP : 165 RON</p>
                                    <p>Timp Coagulare COAG DX - aPTT : 300 RON</p>
                                    <p>Timp Coagulare COAG DX - PT : 300 RON</p>
                                    <p>Analiza urina VetLab - UA Strip : 45 RON</p>
                                    <p>analize gaze sanguine si electroliti VetStat - Gaze sanguine : 210 RON</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h6>
                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Analize de Laborator Veterinare - LOCMEDT
                                    </a>
                                </h6>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                  <p>Locmedt - Diagnostic Panel 22 Parametrii : 235 RON</p>
                                    <p>Locmedt - Health Check Panel : 16 Parametrii : 175 RON</p>
                                    <p>Locmedt - Critical Care Panel 13 Parametrii : 215 RON</p>
                                    <p>Locmedt - Preanesthetic Panel 11 Parametrii : 155 RON </p>
                                    <p>Locmedt - Electrolytes Panel 9 Parametrii : 155 RON</p>
                                    <p>Locmedt - Liver And Kidney Function Panel 14 Parametrii : 175 RON</p>
                                    <p>Locmedt - Liver Function Panel 13 Parametrii : 175 RON</p>
                                    <p>Locmedt - Kidney Function Panel 9 Parametrii : 145 RON</p>
                                </div>
                            </div>
                        </div>
                    </div>
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


