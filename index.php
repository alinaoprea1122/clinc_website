
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
        <link rel="stylesheet" href="assets/css/cookies.css">
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
                                <h1 class="title-animation"><span>Cabinet veterinar</span> Siguranta pentru animalutul tau</h1>
                            </div>
                            <p class="para-animation margin-top-30"> VetCare ofera diverse servicii pentru blanosul tau </p>
                            <div class="btn-box animate-btn margin-top-30">
                                <a href="doctors.php" class="btn1">Alege medicul veterinar preferat</a>
                                <a href="contact_us.php" class="btn2">Contacteaza-ne</a>
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

    <!-- about area -->
    <div class="about-area padding-top-120 padding-bottom-120">
        <div class="about-shapes">
            <img src="assets/images/fea-vec1.png" alt="" class="vec1">
            <img src="assets/images/fea-vec2.png" alt="" class="vec2">
            <img src="assets/images/medical-report.png" alt="" class="vec3 item-rotate">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6 col-xl-5">
                    <div class="about-left">
                        <img src="assets/images/doctor3.jpg" alt="" class="main-img">
                        <img src="assets/images/iubire.png" alt="" class="img1 item-bounce">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-7">
                    <div class="about-right">
                        <div class="common-title">
                            <h2>Ingrijirea sanatatii animalului de companie incepe cu <span>Medici veterinari profesionisti</span></h2>
                        </div>
                        <p class="margin-top-30">Profesionalismul personalului nostru este completat de aparatura medicală de ultimă generație care ne transformă în una dintre clinicile veterinare de top din Timisoara.</p>

                        <div class="btn-box margin-top-30">
                            <a href="contact_us.php" class="btn1">Contacteaza-ne acum !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us2  padding-bottom-105">
        <div class="about-shapes">
            <img src="assets/images/health.png" alt="" class="vec1 item-animateOne">
            <img src="assets/images/spital.png" alt="" class="vec2 item-zooming">
            <img src="assets/images/pet-care.png" alt="" class="vec3 item-bounce">
            <img src="assets/images/pill.png" alt="" class="vec4 item-rotate2">
            <img src="assets/images/Daco_266143.png" alt="" class="vec5">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-xl-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="about-left">
                        <div class="common-title2">
                            <h2 class="margin-bottom-20">De ce sa ne alegi pe noi ?</h2>
                        </div>
                        <div class="about-list-wrapper margin-top-30">
                            <div class="about-list">
                                <div class="img-box">
                                    <img src="assets/images/veterinary.png" alt="">
                                </div>
                                <div class="cont-box">
                                    <h4 class="margin-bottom-10">Medici Veterinari Profesionisti</h4>

                                </div>
                            </div>
                            <div class="about-list">
                                <div class="img-box">
                                    <img src="assets/images/24-hours.png" alt="">
                                </div>
                                <div class="cont-box">
                                    <h4 class="margin-bottom-10">24/7 suport pentru animalutele noastre</h4>
                                </div>
                            </div>
                            <div class="about-list">
                                <div class="img-box">
                                    <img src="assets/images/search.png" alt="">
                                </div>
                                <div class="cont-box">
                                    <h4 class="margin-bottom-10">Teste de laborator excelente</h4>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-xl-6 fadeInRight">
                    <div class="about-right">
                        <img src="assets/images/doctor7.jpg" alt="" class="main-img">
                        <div class="float-cont">
                            <h4>Consultatii</h4>
                            <h3 class="counter">3468</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service area -->
    <div class="service-area2 padding-top-115 padding-bottom-115">
        <div class="container">
            <div class="row justify-content-center margin-bottom-45">
                <div class="col-lg-7 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="common-title2 text-center">
                        <h2>Serviciile Noastre
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                    <div class="single-service-2 active">
                        <div class="icon-box">
                            <span> <i class="flaticon-healthcare"></i></span>
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="service_details.php">Personal Profesionist</a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow zoomIn" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                    <div class="single-service-2">
                        <div class="icon-box">
                            <span> <i class="flaticon-pharmacy"></i></span>
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="index.php">Farmacie & Petshop</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow zoomIn" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="single-service-2">
                        <div class="icon-box">
                            <span> <i class="flaticon-lamp"></i></span>
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="Sali%20de%20operatii.php">Sali de operatii</a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                    <div class="single-service-2">
                        <div class="icon-box">
                            <span> <i class="flaticon-test-tube"></i></span>
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="Analize1.php">Analize</a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow zoomIn" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                    <div class="single-service-2">
                        <div class="icon-box">
                            <span> <i class="flaticon-cancer-cell"></i></span>
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="Chirurgie1.php">Chirurgie</a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow zoomIn" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                    <div class="single-service-2">
                        <div class="icon-box">
                            <span> <i class="icofont-microscope"></i></span>
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="Ecografii1.php">Ecografii</a></h4>

                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box text-center margin-top-10">
                <a href="404.php" class="btn3">Mai mult</a>
            </div>
        </div>
    </div>

    <!-- team area -->
    <div class="ht-team-area  padding-top-115 padding-bottom-90">
        <div class="team-shapes">
            <img src="assets/images/paw.png" alt="" class="vec1 item-animateOne">
            <img src="assets/images/team-vec3.png" alt="" class="vec2 item-rotate2">
            <img src="assets/images/culoare.png" alt="" class="vec3">
        </div>
        <div class="container">
            <div class="row justify-content-center wow fadeInUp margin-bottom-45" style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-lg-7">
                    <div class="common-title2 text-center">
                        <h2>Personalul Nostru</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="single-team-2">
                        <div class="img-box">
                            <img src="assets/images/veterinar9.jpg" alt="">
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="doctor_details.php">
                                    Dr. Raluca Popescu
                                </a></h4>
                            <h6 class="margin-bottom-10">Medic Veterinar</h6>
                            <a href="doctor_details.php" class="btn3">Afla mai multe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    <div class="single-team-2">
                        <div class="img-box">
                            <img src="assets/images/veterinar12.jpg" alt="">
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="Andrei-Mihai.php">
                                    Dr. Andrei Mihai
                                </a></h4>
                            <h6 class="margin-bottom-10">Medic Chirurg</h6>
                            <a href="Andrei-Mihai.php" class="btn3">Afla mai multe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="single-team-2">
                        <div class="img-box">
                            <img src="assets/images/veterinar11.jpg" alt="">
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="Ioana-Georgescu.php">
                                    Dr. Ioana Georgescu
                                </a></h4>
                            <h6 class="margin-bottom-10">Anestezist</h6>
                            <a href="Ioana-Georgescu.php" class="btn3">Afla mai multe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    <div class="single-team-2">
                        <div class="img-box">
                            <img src="assets/images/veterinar10.jpg" alt="">
                        </div>
                        <div class="cont-box">
                            <h4 class="margin-bottom-10"><a href="Andreea-Ionescu.php">
                                    Andreea Ionescu
                                </a></h4>
                            <h6 class="margin-bottom-10">Asistent</h6>
                            <a href="Andreea-Ionescu.php" class="btn3">Afla mai multe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- testimonial area -->
    <div class="testimonial-area padding-top-115 padding-bottom-145">
        <div class="testi-shapes">
            <img src="assets/images/fea-vec2.png" alt="" class="vec1 item-bounce">
            <img src="assets/images/iubire1.png" alt="" class="vec2 item-rotate">
        </div>
        <div class="container">
            <div class="row justify-content-center margin-bottom-25">
                <div class="col-lg-8">
                    <div class="common-title text-center">
                        <h2 <span>Recenzii</span></h2>

                    </div>
                </div>
            </div>
            <div class="testimonial-slider-active">
                <div class="col-6">
                    <div class="single-testi">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="img-box">
                                    <span class="quote"><i class="icofont-quote-left"></i></span>
                                    <img src="assets/images/Recenzie.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="cont-box">
                                    <p> Servicii de calitate.Mereu doamna Dr.Raluca este mereu pregatita sa ne ofere informatiile necesare. </p>
                                    <h4 class="margin-top-20">Gabriela Pop</h4>
                                    <h6 class="margin-top-10">Mama lui Coco</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single-testi">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="img-box">
                                    <span class="quote"><i class="icofont-quote-left"></i></span>
                                    <img src="assets/images/Recenzie2.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="cont-box">
                                    <p> Pisica mea nu voia sa manance.Am fost la VetCare unde l-am intalnit pe Dr.Andrei Mihai, care mi-a consultat pisica si mi-a dat tratamentul.Acum Kitty se simte foarte bine.</p>
                                    <h4 class="margin-top-20">Iuliana Dobrescu</h4>
                                    <h6 class="margin-top-10">Mama lui Kitty</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single-testi">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="img-box">
                                    <span class="quote"><i class="icofont-quote-left"></i></span>
                                    <img src="assets/images/Recenzie3.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="cont-box">
                                    <p>Profesionalism din partea personalului, din toate punctele de vedere.Servicii de calitate. </p>
                                    <h4 class="margin-top-20">Mihai Costescu</h4>
                                    <h6 class="margin-top-10">Tatal lui Max</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single-testi">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="img-box">
                                    <span class="quote"><i class="icofont-quote-left"></i></span>
                                    <img src="assets/images/Recenzie4.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="cont-box">
                                    <p>Bruno nu se simtea foarte bine , asa ca a trebuit sa ii fac analizele si sa il operam. Datorita doamnei Dr. Raluca , Bruno nu mai are probleme cu stomacul.</p>
                                    <h4 class="margin-top-20">Daniel Oprescu</h4>
                                    <h6 class="margin-top-10">Tatal lui Bruno </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="emergency-area padding-top-120 padding-bottom-120">
        <div class="emer-shapes">
            <img src="assets/images/emergemcy_vec1.png" alt="" class="vec1">
            <img src="assets/images/emergemcy_vec2.png" alt="" class="vec2">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="emergency-cont">
                        <div class="img-box">
                            <img src="assets/images/emergemcy_vec3.png" alt="">
                        </div>
                        <div class="cont-box common-title2">
                            <h2 class="margin-bottom-30">Ai nevoie de ajutor urgent ?</h2>
                            <span class="tel_btn"><span><i class="icofont-telephone"></i></span> +4073677231</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- gallery area -->
    <div class="gallery-area padding-top-115 padding-bottom-110">
        <div class="gallery-shapes">
            <img src="assets/images/hotline.png" alt="" class="vec1 item-zooming">
        </div>
        <div class="container">
            <div class="row justify-content-center margin-bottom-45">
                <div class="col-lg-6">
                    <div class="common-title text-center">
                        <h2>Galeria <span>noastra</span></h2>
                        <p class="margin-top-20">Cateva imagini din cabinetul nostru</p>
                    </div>
                </div>
            </div>
            <div class="gallery-wrapper">
                <div class="row port-galleries">
                    <div class="col-lg-4 col-md-4 col-12">
                        <a href="assets/images/gallery5.png" target="_blank">
                            <div class="single-gallery">
                                <img src="assets/images/gallery5.png" class="img-fluid" alt="">
                                <span><i class="far fa-image"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <a href="assets/images/veterinar6.jpeg" target="_blank">
                            <div class="single-gallery">
                                <img src="assets/images/veterinar6.jpeg" class="img-fluid" alt="">
                                <span><i class="far fa-image"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a href="assets/images/veterinar3.jpeg" target="_blank">
                            <div class="single-gallery">
                                <img class="img-fluid" src="assets/images/veterinar3.jpeg" alt=""> <span><i
                                            class="far fa-image"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a href="assets/images/veterinar4.jpeg" target="_blank">
                            <div class="single-gallery">
                                <img class="img-fluid" src="assets/images/veterinar4.jpeg" alt="">
                                <span><i class="far fa-image"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a href="assets/images/veterinar5.jpeg" target="_blank">
                            <div class="single-gallery">
                                <img class="img-fluid" src="assets/images/veterinar5.jpeg" alt=""> <span><i
                                            class="far fa-image"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="btn-box text-center margin-top-30">
                    <a href="gallery.php" class="btn1">Mai mult</a>
                </div>
            </div>
        </div>
    </div>

    <!-- faq area -->
    <div class="faq-area padding-top-115">
        <div class="faq-shapes">
            <img src="assets/images/circle.png" alt="" class="vec1 item-animateOne">
            <img src="assets/images/adoption.png" alt="" class="vec2 wow zoomIn">
        </div>
        <div class="container">
            <div class="row justify-content-center margin-bottom-45">
                <div class="col-lg-8">
                    <div class="common-title text-center">
                        <h2>Intrebari <span>Frecvente</span></h2>
                        <p class="margin-top-20">Cateva intrebari des intalnite la care am reusit sa raspundem</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="faq-left">
                        <img src="assets/images/Doctor11.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="faq-right">
                        <div id="accordion" class="accordion-wrapper">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h6>
                                        <a href="#" data-toggle="collapse" class="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Trebuie sterilizat animalul neapărat? De ce?
                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>De cele mai multe ori este benefic. Sunt câteva situații în care sterilizarea animalului se impune. La masculii monorhizi sau criptorhizi trebuie realizată sterilizarea pentru că testicolul/lele situat/e în cavitatea abdominală produc mai mult testosteron decât trebuie, de aici rezultând un comportament neadecvat și supărător. În plus, în timp acestea se pot tumoriza. Pentru femele, sterilizarea rezolvă problema sarcinilor nedorite, disconfortul creat de lactațiile nervoase, evident prevenția pentru cancerul mamar și cel mai important endometrita glandulochistică (piometrul).</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h6>
                                        <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Au nevoie de tratament dentar pacienții canini și felini?
                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Cu siguranță și reprezintă o prioritate. Disconfortul determinat de prezența tartrului, halena urât mirositoare, durerea generată de retracțiile gingivale și multe alte situații patologice care apar ca urmare a modului de nutriție fac să fie foarte importantă prezentarea la medicul veterinar pentru o consultație în sfera orală a animalului.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h6>
                                        <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Pot oferi animalului hrană gătită în casă?
                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Da, se poate oferi mâncare de casă animalului dumneavoastră. Trebuie să ne aducem aminte că hrana industrială pentru animalele de companie a fost inventată prin 1960 sub forma unei supe medicamentate, abia după aceea dezvoltându-se rațiile furajere pe care le știm cu toții astăzi. Hrănitul cu mâncare de casă nu este o greșeală, precum nici hrănitul cu hrană industrială nu este o greșeală. Singura greșeală sau obicei alimentar defectuos este hrănitul animalelor în regim mixt, adică și industrial și hrană gătită în același timp. Acest stil de nutriție va duce cu siguranță la apariția multor afecțiuni, unele cu adevărat grave.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h6>
                                        <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Pot verifica autenticitatea rasei la dumneavoastră?

                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Sigur, în situațiile dorite, putem verifica folosindu-ne de analize genetice.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h6>
                                        <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Trebuie făcut un consult regulat?
                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Da, consultul regulat reprezintă premisa observării și identificării de timpuriu a afecțiunilor incipiente. Astfel, putem face prevenție, putem urmări continuu evoluția pacientului și putem împiedica apariția unor afecțiuni sau, dacă sunt deja existente, agravarea acestora.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box text-center margin-top-30">
                            <a href="faq.php" class="btn1">Mai mult</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- appointement area -->
    <div class="appointment-area padding-top-110 padding-bottom-115">
        <div class="appnt-shapes">
            <img src="assets/images/appnt-vec1.png" alt="" class="vec1">
            <img src="assets/images/appnt-vec2.png" alt="" class="vec2">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-9 wow fadeIn">
                    <!-- appnt-left -->
                    <div class="appnt-left">
                        <h3>Ai nevoie de un medic veterinar pentru un control ?</h3>
                        <h2 class="title-animation special margin-top-20">Programare pentru animalutul tau</h2>
                        <p class="para-animation margin-top-20">Fa acum o programare pentru blanosul tau !</p>
                        <div class="btn-box animate-btn margin-top-30">
                            <a href="appointment.php" class="btn1">Programare</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- appnt right -->
            <div class="appnt-right">
                <img src="assets/images/Doctor12.png" alt="" class="main-img">
            </div>
        </div>
    </div>

    <br> <br>

    <!-- blog-area -->
    <div class="blog-area">
        <div class="container">
            <div class="row justify-content-center margin-bottom-25">
                <div class="col-lg-6">
                    <div class="common-title text-center">
                        <h2>Postari <span>recente pe blog</span> </h2>

                    </div>
                </div>
            </div>
            <div class="blog-slider-active">
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="img-box">
                            <img src="assets/images/Blog1.jpeg" alt="">
                        </div>
                        <div class="content-box">
                            <div class="meta-box d-flex justify-content-between">
                                <a href="blog_details.php"><span><i class="icofont-medical-sign"></i></span> Analize </a>
                                <a href="blog_details.php"><span><i class="icofont-ui-calendar"></i></span> 25/07/23</a>
                            </div>

                            <h4 class="margin-top-10"><a href='blog_details.php'>Ce analize sunt necesare pentru animalele de companie ? </a></h4>

                            <a class="link margin-top-10" href="blog_details.php"> Mai mult <span><i
                                            class="icofont-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="img-box">
                            <img src="assets/images/Blog2.jpeg" alt="">
                        </div>
                        <div class="content-box">
                            <div class="meta-box d-flex justify-content-between">
                                <a href="ingrijire.php"><span><i class="icofont-medical-sign"></i></span> Ingrijire</a>
                                <a href="ingrijire.php"><span><i class="icofont-ui-calendar"></i></span> 17/08/23</a>
                            </div>

                            <h4 class="margin-top-10"><a href='ingrijire.php'> Ingrijirea animalutului tau
                                </a></h4>

                            <a class="link margin-top-10" href="ingrijire.php">Mai mult <span><i
                                            class="icofont-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="img-box">
                            <img src="assets/images/Blog3.jpeg" alt="">
                        </div>
                        <div class="content-box">
                            <div class="meta-box d-flex justify-content-between">
                                <a href="protejare%20capuse.php"><span><i class="icofont-medical-sign"></i></span> Protectie </a>
                                <a href="protejare%20capuse.php"><span><i class="icofont-ui-calendar"></i></span> 28/02/24</a>
                            </div>

                            <h4 class="margin-top-10"><a href='protejare%20capuse.php'> Cum protejam animalele impotriva capuselor ?
                                </a></h4>
                            <a class="link margin-top-10" href="protejare%20capuse.php">Mai mult <span><i
                                            class="icofont-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="img-box">
                            <img src="assets/images/Blog4.jpeg" alt="">
                        </div>
                        <div class="content-box">
                            <div class="meta-box d-flex justify-content-between">
                                <a href="control.php"><span><i class="icofont-medical-sign"></i></span> Control medical</a>
                                <a href="control.php"><span><i class="icofont-ui-calendar"></i></span> 19/04/24</a>
                            </div>

                            <h4 class="margin-top-10"><a href='control.php'> Cat de des trebuie sa mergem la control ? </a></h4>

                            <a class="link margin-top-10" href="control.php"> Mai mult <span><i
                                            class="icofont-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="img-box">
                            <img src="assets/images/Blog5.jpeg" alt="">
                        </div>
                        <div class="content-box">
                            <div class="meta-box d-flex justify-content-between">
                                <a href="operatie.php"><span><i class="icofont-medical-sign"></i></span> Operatie </a>
                                <a href="operatie.php"><span><i class="icofont-ui-calendar"></i></span> 10/04/24</a>
                            </div>

                            <h4 class="margin-top-10"><a href='operatie.php'> Cum pregatim animalul inainte de operatie ?
                                </a></h4>
                            <a class="link margin-top-10" href="operatie.php"> Mai mult <span><i
                                            class="icofont-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="img-box">
                            <img src="assets/images/Blog6.jpeg" alt="">
                        </div>
                        <div class="content-box">
                            <div class="meta-box d-flex justify-content-between">
                                <a href="aparatura.php"><span><i class="icofont-medical-sign"></i></span> Aparatura</a>
                                <a href="aparatura.php"><span><i class="icofont-ui-calendar"></i></span> 20/05/24 </a>
                            </div>

                            <h4 class="margin-top-10"><a href='aparatura.php'> Aparatura pe care o folisim la clinica</a></h4>
                            <a class="link margin-top-10" href="aparatura.php"> Mai mult <span><i
                                            class="icofont-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="img-box">
                            <img src="assets/images/animals16.jpeg" alt="">
                        </div>
                        <div class="content-box">

                            <a class="link margin-top-10" href="blogs.php"> Mai multe datelii pe blog <span><i
                                            class="icofont-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!--Cookies-->
<div id="cookies">
    <div class="cookie-container">
        <div class="subcontainer">
            <div class="cookies">
                <p>Site-ul nostru folosește module cookie pentru a-ți oferi o experiență cât mai bună de navigare. Aceste fișiere ne ajută să personalizăm conținutul și reclamele, să furnizăm funcții pentru rețelele sociale și să analizăm traficul.</p>
                <a href="#"> Mai multe informatii.</a>
                <button id="cookies-btn"> Este Ok!</button>
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
    <script src="assets/js/vendor/Cookies.js"></script>
    <script src="assets/js/main.js"></script>
    </body>
    </html>
