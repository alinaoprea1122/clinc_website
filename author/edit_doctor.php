<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Cabinet Veterinar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include_once "include/topbar.php" ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include_once "include/sidebar.php" ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row page-title">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb" class="float-right mt-1">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">D</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pagina</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                </ol>
                            </nav>
                            <h4 class="mb-1 mt-0">Profil</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center mt-3">
                                        <img src="assets/images/users/Raluca-Popescu.jpg" alt=""
                                            class="avatar-lg rounded-circle" />
                                        <h5 class="mt-2 mb-0">Dr. Raluca Popescu</h5>
                                        <h6 class="text-muted font-weight-normal mt-2 mb-0">Experienta Utilizatorului
                                        </h6>
                                        <h6 class="text-muted font-weight-normal mt-1 mb-4">Timisoara , Ro</h6>

                                        <div class="progress mb-4" style="height: 14px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <span class="font-size-12 font-weight-bold">Profilul Tau Este <span
                                                        class="font-size-11">60%</span> Completat</span>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary btn-sm mr-1">Urmareste</button>
                                        <button type="button" class="btn btn-white btn-sm">Mesaj</button>
                                    </div>

                                    <!-- profile  -->
                                    <div class="mt-5 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">Despre</h4>
                                        <p class="text-muted mb-4">Ca medic veterinar, Raluca manifestă o răbdare extraordinară în lucrul cu animalele și în rezolvarea problemelor de sănătate ale acestora. Ea înțelege că unele tratamente sau proceduri pot fi stresante pentru animale și lucrează cu atenție și calm pentru a reduce disconfortul lor.

                                            De asemenea , Raluca este extrem de atentă la detalii în timpul diagnosticării și tratării animalelor. Ea nu trece cu vederea nicio informație relevantă și este dedicată în asigurarea unei îngrijiri complete și precise.

                                            Raluca se angajează să ofere cea mai bună îngrijire posibilă pentru animalele pe care le tratează și respectă standardele etice și profesionale cele mai ridicate în exercitarea profesiei sale.</p>
                                    </div>
                                    <div class="mt-3 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">Informatii Contact</h4>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0 text-muted">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td> popescu.raluca@yahoo.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Numar de Telefon</th>
                                                        <td> +40322145768 </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Adresa</th>
                                                        <td>Strada Florilor , nr. 20, Timisoara, Romania</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="mt-3 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">Abilitati</h4>
                                        <label class="badge badge-soft-primary">Iubire pentru Animale</label>
                                        <label class="badge badge-soft-primary">Comunicare buna cu clientii</label>
                                        <label class="badge badge-soft-primary">Relatie buna cu echipa</label>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->

                        </div>

                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills navtab-bg nav-justified" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-activity-tab" data-toggle="pill"
                                                href="#pills-activity" role="tab" aria-controls="pills-activity"
                                                aria-selected="true">
                                                Activitate
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-messages-tab" data-toggle="pill"
                                                href="#pills-messages" role="tab" aria-controls="pills-messages"
                                                aria-selected="false">
                                                Mesaje
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-projects-tab" data-toggle="pill"
                                                href="#pills-projects" role="tab" aria-controls="pills-projects"
                                                aria-selected="false">
                                               Proiecte
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-tasks-tab" data-toggle="pill"
                                                href="#pills-tasks" role="tab" aria-controls="pills-tasks"
                                                aria-selected="false">
                                                Cerinte
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-files-tab" data-toggle="pill"
                                                href="#pills-files" role="tab" aria-controls="pills-files"
                                                aria-selected="false">
                                               Fisiere
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-activity" role="tabpanel"
                                            aria-labelledby="pills-activity-tab">
                                            <h5 class="mt-3">Saptamana Aceasta</h5>
                                            <div class="left-timeline mt-3 mb-3 pl-4">
                                                <ul class="list-unstyled events mb-0">
                                                    <li class="event-list">
                                                        <div class="pb-4">
                                                            <div class="media">
                                                                <div class="event-date text-center mr-4">
                                                                    <div
                                                                        class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                                       Acum 1h</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Consultații Generale</h6>
                                                                    <p class="text-muted font-size-14">Efectuarea consultațiilor generale pentru animalele de companie, incluzând evaluarea stării de sănătate și diagnosticarea afecțiunilor comune.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="pb-4">
                                                            <div class="media">
                                                                <div class="event-date text-center mr-4">
                                                                    <div
                                                                        class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                                        Acum 5h </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Imagistică Medicală:</h6>
                                                                    <p class="text-muted font-size-14">nterpretarea rezultatelor radiografiilor și ecografiilor și discutarea opțiunilor de tratament cu proprietarii.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="pb-4">
                                                            <div class="media">
                                                                <div class="event-date text-center mr-4">
                                                                    <div
                                                                        class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                                        Acum 8h</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Educație pentru Proprietari:</h6>
                                                                    <p class="text-muted font-size-14">Organizarea și susținerea atelierelor și sesiunilor de informare pentru proprietarii de animale despre nutriție, prevenirea bolilor și îngrijirea animalelor.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <h5 class="mt-4">Saptamana Trecuta</h5>
                                            <div class="left-timeline mt-3 pl-4">
                                                <ul class="list-unstyled events mb-0">
                                                    <li class="event-list">
                                                        <div class="pb-4">
                                                            <div class="media">
                                                                <div class="event-date text-center mr-4">
                                                                    <div
                                                                        class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                                        Luni , ora 17:00</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Actualizarea Dosarelor Medicale:</h6>
                                                                    <p class="text-muted font-size-14">Asigurarea că toate dosarele medicale sunt actualizate și completate corespunzător după fiecare consultație și procedură.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="pb-4">
                                                            <div class="media">
                                                                <div class="event-date text-center mr-4">
                                                                    <div
                                                                        class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                                       Miercuri , ora 8:00</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Consultanță pentru Achiziții:</h6>
                                                                    <p class="text-muted font-size-14">Evaluarea necesităților de echipamente medicale și propunerea de noi achiziții pentru îmbunătățirea serviciilor oferite de clinică.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="pb-4">
                                                            <div class="media">
                                                                <div class="event-date text-center mr-4">
                                                                    <div
                                                                        class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                                        Vineri , ora 14:30</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Garda de Urgență:</h6>
                                                                    <p class="text-muted font-size-14">Gestionarea cazurilor de urgență, asigurându-se că pacienții primesc îngrijirea necesară rapid și eficient.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <h5 class="mt-4">Luna Trecuta</h5>
                                            <div class="left-timeline mt-3 pl-4">
                                                <ul class="list-unstyled events mb-0">
                                                    <li class="event-list">
                                                        <div class="pb-4">
                                                            <div class="media">
                                                                <div class="event-date text-center mr-4">
                                                                    <div
                                                                        class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                                     18 Mai , ora 16:15</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Educație și formare continuă:</h6>
                                                                    <p class="text-muted font-size-14">Participarea la cursuri și conferințe pentru a se menține la curent cu ultimele noutăți în medicina veterinară.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="pb-4">
                                                            <div class="media">
                                                                <div class="event-date text-center mr-4">
                                                                    <div
                                                                        class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                                        22 Mai , ora 17:30</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Revizuirea Programului de Vaccinare:</h6>
                                                                    <p class="text-muted font-size-14">Revizuiește și actualizează protocolul de vaccinare pentru câini și pisici, asigurându-te că respectă cele mai recente recomandări și standarde veterinare.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="event-list">
                                                        <div class="pb-4">
                                                            <div class="media">
                                                                <div class="event-date text-center mr-4">
                                                                    <div
                                                                        class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                                        30 Mai , ora 13:20</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Participarea la Campanii de Sănătate Publică:</h6>
                                                                    <p class="text-muted font-size-14">Implicarea în campanii de sănătate publică și programe de sterilizare.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- messages -->
                                        <div class="tab-pane" id="pills-messages" role="tabpanel"
                                        aria-labelledby="pills-messages-tab">
                                            <h5 class="mt-3">Mesaje</h5>
                                            <ul class="list-unstyled">
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Ioana-Georgescu.jpg" alt=""
                                                                class="avatar-md rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Dr. Ioana Georgescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Am discutat cu proprietarul despre un program de fizioterapie personalizat.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Elena-Diaconescu.jpeg" alt=""
                                                                class="avatar-md rounded-circle">

                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Dr. Elena Diaconescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Absolut, fizioterapia este crucială pentru recuperarea completă. Recent, am avut un alt caz de artrită la un pisoi senior. Terapia cu laser și-a dovedit eficiența. Crezi că ar fi utilă și în cazul Golden Retriever-ului?</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Alexandra-Bucur.jpeg" alt=""
                                                                 class="avatar-md rounded-circle">

                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Dr. Alexandra Bucur</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">Excelentă idee. Educația proprietarilor este esențială. Și cred că ar trebui să ne concentrăm și pe nutriție. Mulți dintre pacienții noștri ar beneficia de o dietă echilibrată.
                                                                </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Ana-Maria-Cristescu.jpeg" alt=""
                                                                class="avatar-md rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Ana-Maria Cristescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">Andrei, am citit un articol interesant despre noile metode de anestezie pentru animalele de companie. Ar trebui să discutăm despre implementarea acestor tehnici la VetCare.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Andreea-Ionescu.jpg" alt=""
                                                                 class="avatar-md rounded-circle">
                                                        </div>

                                                        <!--<div class="avatar-md rounded-circle bg-soft-primary mr-3">
                                                            <span
                                                                class="font-size-18 avatar-title text-primary font-weight-semibold">
                                                                R
                                                            </span>
                                                        </div>-->
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Andreea Ionescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Sună bine. Putem programa o sesiune de training pentru echipă. Îmbunătățirea constantă a serviciilor noastre este esențială pentru a oferi cea mai bună îngrijire</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Alexandru-Adamescu.jpeg" alt=""
                                                                class="avatar-md rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Dr. Alexandru Adamescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Și eu sunt de aceeași părere. Este unul dintre motivele pentru care îmi place să lucrez aici. Hai să ne coordonăm și să facem un plan concret pentru seminar. Sunt sigur că va fi un succes!</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <!--<div class="avatar-md rounded-circle bg-soft-primary mr-3">
                                                            <span
                                                                class="font-size-18 avatar-title text-primary font-weight-semibold">
                                                                B
                                                            </span>
                                                        </div>-->
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Horia-Preda.jpeg" alt=""
                                                                 class="avatar-md rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Dr. Horia Preda</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">Cu plăcere, Maria! Abia aștept să vedem rezultatele. Este întotdeauna o plăcere să lucrăm împreună pentru a îmbunătăți sănătatea animalelor noastre.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Andrei-Mihai.jpg" alt=""
                                                                class="avatar-md rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Dr. Andrei Mihai</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Mulțumesc ! O zi bună!</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="text-center">
                                                <a href="#" class="btn btn-primary btn-sm">Mai Multe</a>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-projects" role="tabpanel"
                                            aria-labelledby="pills-projects-tab">

                                            <h5 class="mt-3">Proiecte</h5>

                                            <div class="row mt-3">
                                                <div class="col-xl-4 col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="badge badge-success float-right">Complet</div>
                                                            <p class="text-success text-uppercase font-size-12 mb-2">Sanatatea Animalelor
                                                                </p>
                                                            <h5><a href="#" class="text-dark">Campanii de Vaccinare si Sterilizare</a>
                                                            </h5>
                                                            <p class="text-muted mb-4">Vaccinarea este esențială pentru prevenirea bolilor contagioase la animale, precum rabia, parvoviroza și distemperul. Dr. Popescu și echipa sa au organizat sesiuni de vaccinare gratuite în diverse puncte ale orașului. Proprietarii de animale au fost informați prin afișe, anunțuri radio și social media despre importanța vaccinării și despre locațiile unde se desfășurau aceste sesiuni.


                                                            </p>

                                                            <div>
                                                                <a href="javascript: void(0);">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-sm m-1 rounded-circle">
                                                                </a>
                                                                <a href="javascript: void(0);">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-sm m-1 rounded-circle">
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="card-body border-top">
                                                            <div>
                                                                <div>
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Data">
                                                                                <i class="uil uil-calender mr-1"></i> 27
                                                                               August
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i>75
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Comentarii">
                                                                                <i
                                                                                    class="uil uil-comments-alt mr-1"></i>
                                                                               193
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="100% complet">
                                                                        <div class="progress-bar bg-success"
                                                                            role="progressbar" style="width: 100%;"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card -->
                                                </div>

                                                <div class="col-xl-4 col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="badge badge-success float-right">Complet</div>
                                                           <!-- <p class="text-warning text-uppercase font-size-12 mb-2">
                                                                Adoptie</p>-->
                                                            <p class="text-success text-uppercase font-size-12 mb-2">Sanatatea Animalelor
                                                            </p>
                                                            <h5><a href="#" class="text-dark">Centre de Adoptie si reabilitare</a>
                                                            </h5>
                                                            <p class="text-muted mb-4">În inima unui oraș aglomerat, unde animalele fără stăpân rătăceau pe străzi în căutarea unui adăpost, a luat naștere un proiect de suflet: un centru de adopție și reabilitare pentru animale. Inițiatorul acestui proiect a fost Dr. Raluca Popescu, un medic veterinar pasionat și dedicat, care a văzut nevoia urgentă de a oferi o șansă la o viață mai bună animalelor abandonate.
                                                            </p>
                                                            <div>
                                                                <a href="javascript: void(0);">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-sm m-1 rounded-circle">
                                                                </a>
                                                                <a href="javascript: void(0);">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                                        class="avatar-sm m-1 rounded-circle">
                                                                </a>
                                                                <a href="javascript: void(0);">
                                                                    <div
                                                                        class="avatar-sm font-weight-bold d-inline-block m-1">
                                                                        <span
                                                                            class="avatar-title rounded-circle bg-soft-success text-success">
                                                                            2+
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body border-top">
                                                            <div>
                                                                <div>
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Data">
                                                                                <i class="uil uil-calender mr-1"></i> 15 Februarie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 36
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Comentarii">
                                                                                <i
                                                                                    class="uil uil-comments-alt mr-1"></i>
                                                                               57
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                               <!-- <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="72% completed">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 72%;"
                                                                            aria-valuenow="72" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>-->
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                         data-toggle="tooltip" data-placement="top"
                                                                         title="" data-original-title="100% complet">
                                                                        <div class="progress-bar bg-success"
                                                                             role="progressbar" style="width: 100%;"
                                                                             aria-valuenow="100" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card -->
                                                </div>

                                                <div class="col-xl-4 col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="badge badge-success float-right">Complet</div>
                                                            <p class="text-success text-uppercase font-size-12 mb-2">Zoonoze</p>
                                                            <h5><a href="#" class="text-dark">Programe de Control al bolilor zoonotice</a></h5>
                                                            <p class="text-muted mb-4"> Bolile zoonotice, care se transmit de la animale la oameni, reprezintă o amenințare semnificativă atât pentru sănătatea publică, cât și pentru bunăstarea animalelor. În acest context, programele de control al bolilor zoonotice sunt esențiale pentru prevenirea și gestionarea acestor afecțiuni. Dr. Raluca Popescu, un medic veterinar dedicat, a inițiat un program cuprinzător pentru a aborda această problemă în comunitatea sa.
                                                            </p>

                                                            <div>
                                                                <a href="javascript: void(0);">
                                                                    <div
                                                                        class="avatar-sm font-weight-bold d-inline-block m-1">
                                                                        <span
                                                                            class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                            H
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                                <a href="javascript: void(0);">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                                        class="avatar-sm m-1 rounded-circle">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body border-top">
                                                            <div>
                                                                <div>
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Data">
                                                                                <i class="uil uil-calender mr-1"></i> 15 Ianuarie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 26
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Comentarii">
                                                                                <i
                                                                                    class="uil uil-comments-alt mr-1"></i>
                                                                                72
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="100% complet">
                                                                        <div class="progress-bar bg-success"
                                                                            role="progressbar" style="width: 100%;"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card -->
                                                </div>

                                                <div class="col-xl-4 col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="badge badge-warning float-right">In Asteptare</div>
                                                            <p class="text-warning text-uppercase font-size-12 mb-2">
                                                                Animale de Companie</p>
                                                            <h5><a href="#" class="text-dark">Programe de Educatie pentru Animale de Companie</a></h5>
                                                            <p class="text-muted mb-4">ntr-o lume în care animalele de companie sunt parte integrantă a vieților noastre, educarea proprietarilor de animale este esențială pentru asigurarea unei bune îngrijiri și a unui mediu sănătos. Dr. Raluca Popescu, un medic veterinar pasionat de educație și bunăstarea animalelor, a inițiat un program cuprinzător de educație pentru proprietarii de animale, menit să ofere cunoștințe și resurse utile comunității.
                                                            </p>

                                                            <div>
                                                                <a href="javascript: void(0);">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                        class="avatar-sm m-1 rounded-circle">
                                                                </a>
                                                                <a href="javascript: void(0);">
                                                                    <div
                                                                        class="avatar-sm font-weight-bold d-inline-block m-1">
                                                                        <span
                                                                            class="avatar-title rounded-circle bg-soft-danger text-danger">
                                                                            K
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                                <a href="javascript: void(0);">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                                        class="avatar-sm m-1 rounded-circle">
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="card-body border-top">

                                                            <div>
                                                                <div>
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Data">
                                                                                <i class="uil uil-calender mr-1"></i> 30 Iulie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 59
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Comentarii">
                                                                                <i
                                                                                    class="uil uil-comments-alt mr-1"></i>
                                                                                85
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="90% complet">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 90%;"
                                                                            aria-valuenow="90" aria-valuemin="0"
                                                                            aria-valuemax="90"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <div class="col-xl-4 col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="badge badge-warning float-right">In Asteptare</div>
                                                            <p class="text-warning text-uppercase font-size-12 mb-2">
                                                               Studenti Medicina Veterinara</p>
                                                            <h5><a href="#" class="text-dark">Training pentru Studentii la Medicina Veterinara</a></h5>
                                                            <p class="text-muted mb-4">Într-o lume în continuă evoluție, educația de calitate și pregătirea practică a viitorilor medici veterinari sunt esențiale pentru asigurarea unei bune îngrijiri a animalelor. Dr. Raluca Popescu, un medic veterinar experimentat și profesor dedicat, a inițiat un program de training cuprinzător pentru studenții la medicină veterinară, menită să le ofere acestora cunoștințele teoretice și practice necesare pentru a excela în cariera lor.</p>

                                                            <div>
                                                                <a href="javascript: void(0);">
                                                                    <div
                                                                        class="avatar-sm font-weight-bold d-inline-block m-1">
                                                                        <span
                                                                            class="avatar-title rounded-circle bg-soft-warning text-warning">
                                                                            D
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body border-top">

                                                            <div>
                                                                <div>
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Data">
                                                                                <i class="uil uil-calender mr-1"></i> 21 Aprilie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 62
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Comentarii">
                                                                                <i
                                                                                    class="uil uil-comments-alt mr-1"></i>
                                                                                98
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!--<div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="100% completed">
                                                                        <div class="progress-bar bg-success"
                                                                            role="progressbar" style="width: 100%;"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>-->

                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                         data-toggle="tooltip" data-placement="top"
                                                                         title="" data-original-title="73% complet">
                                                                        <div class="progress-bar bg-warning"
                                                                             role="progressbar" style="width: 73%;"
                                                                             aria-valuenow="73" aria-valuemin="0"
                                                                             aria-valuemax="73"></div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card -->
                                                </div>

                                                <div class="col-xl-4 col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="badge badge-warning float-right">In Asteptare</div>
                                                            <p class="text-warning text-uppercase font-size-12 mb-2">
                                                                Practica </p>
                                                            <h5><a href="#" class="text-dark">Programe de Bunastare Animala</a></h5>
                                                            <p class="text-muted mb-4">Bunăstarea animalelor este o componentă esențială a unei societăți responsabile și compasiune. Dr. Raluca Popescu, un medic veterinar cu o pasiune pentru protecția animalelor, a inițiat un program complex de bunăstare animală, menit să îmbunătățească condițiile de viață ale animalelor în diverse medii, de la ferme la adăposturi și gospodării.
                                                            </p>

                                                            <div>
                                                                <a href="javascript: void(0);">
                                                                    <img src="assets/images/users/avatar-9.jpg" alt=""
                                                                        class="avatar-sm m-1 rounded-circle">
                                                                </a>
                                                                <a href="javascript: void(0);">
                                                                    <img src="assets/images/users/avatar-10.jpg" alt=""
                                                                        class="avatar-sm m-1 rounded-circle">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body border-top">
                                                            <div>
                                                                <div>
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Data">
                                                                                <i class="uil uil-calender mr-1"></i> 29 Iunie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 75
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Comentarii">
                                                                                <i
                                                                                    class="uil uil-comments-alt mr-1"></i>
                                                                                34
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                         data-toggle="tooltip" data-placement="top"
                                                                         title="" data-original-title="79% complet">
                                                                        <div class="progress-bar bg-warning"
                                                                             role="progressbar" style="width: 79%;"
                                                                             aria-valuenow="79" aria-valuemin="0"
                                                                             aria-valuemax="79"></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>

                                        <div class="tab-pane fade" id="pills-tasks" role="tabpanel"
                                            aria-labelledby="pills-tasks-tab">
                                            <h5 class="mt-3">Cerinte</h5>

                                            <div class="card mb-0 shadow-none">
                                                <div class="card-body">
                                                    <!-- task -->
                                                    <div class="row justify-content-sm-between border-bottom">
                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="task1">
                                                                <label class="custom-control-label" for="task1">
                                                                    Realizarea de consultatii pentru evaluarea starii de sanatate
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                               <!-- <div>
                                                                    <img src="assets/images/users/avatar-9.jpg"
                                                                        alt="image" class="avatar-xs rounded-circle"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Assigned to Arya S" />
                                                                </div>-->
                                                                <div class="mt-3 mt-sm-0">
                                                                    <ul class="list-inline font-13 text-sm-right">
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-schedule font-16 mr-1'></i>
                                                                          Astazi , ora 16:00
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                            7/7
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                            59
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span
                                                                                class="badge badge-soft-success p-1">Complet</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div> <!-- end .d-flex-->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end task -->

                                                    <!-- task -->
                                                    <div class="row justify-content-sm-between mt-2 border-bottom pt-2">
                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="task2">
                                                                <label class="custom-control-label" for="task2">
                                                                    Supravegherea si indrumarea asistentilor veterinari si a personalului clinicii .
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                               <!-- <div>
                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                        alt="image" class="avatar-xs rounded-circle"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Assigned to James B" />
                                                                </div>-->
                                                                <div class="mt-3 mt-sm-0">
                                                                    <ul class="list-inline font-13 text-sm-right">
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-schedule font-16 mr-1'></i>
                                                                            Astazi , ora 18:00
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                            7/7
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                            35
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span
                                                                                class="badge badge-soft-success p-1">Complet</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div> <!-- end .d-sm-flex-->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end task -->

                                                    <!-- task -->
                                                    <div
                                                        class="row justify-content-sm-between mt-2 border-bottom pt-2 pb-3">
                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="task3">
                                                                <label class="custom-control-label" for="task3">
                                                                   Crearea si distribuirea de materiale educative
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                               <!-- <div>
                                                                    <img src="assets/images/users/avatar-4.jpg"
                                                                        alt="image" class="avatar-xs rounded-circle"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Assigned to Kevin C" />
                                                                </div>-->
                                                                <div>
                                                                    <ul class="list-inline font-13 text-sm-right mb-0">
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-schedule font-16 mr-1'></i>
                                                                            Maine , ora 11:30
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                            15/20
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                            61
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span
                                                                                class="badge badge-soft-info p-1">Mediu</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div> <!-- end .d-sm-flex-->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end task -->

                                                    <!-- task -->
                                                    <div class="row justify-content-sm-between border-bottom mt-2 pt-2">
                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="task4">
                                                                <label class="custom-control-label" for="task4">
                                                                    Gestionarea situatiilor de urgenta , cum ar fi accidentele , otravirile si alte traume acute .
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                               <!-- <div>
                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                        alt="image" class="avatar-xs rounded-circle"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Assigned to James B" />
                                                                </div>-->
                                                                <div class="mt-3 mt-sm-0">
                                                                    <ul class="list-inline font-13 text-sm-right">
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-schedule font-16 mr-1'></i>
                                                                           20 Iulie , ora 13:30
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                            10/10
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                            70
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span
                                                                                class="badge badge-soft-success p-1">Complet</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div> <!-- end .d-sm-flex-->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end task -->

                                                    <!-- task -->
                                                    <div class="row justify-content-sm-between mt-2 pt-2 border-bottom">
                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="task5">
                                                                <label class="custom-control-label" for="task5">
                                                                    Prescrierea si administrarea de medicamente .
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                               <!-- <div>
                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                        alt="image" class="avatar-xs rounded-circle"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Assigned to James B" />
                                                                </div>-->
                                                                <div class="mt-3 mt-sm-0">
                                                                    <ul class="list-inline font-13 text-sm-right">
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-schedule font-16 mr-1'></i>
                                                                            17 Iunie , ora 16:30
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                            26/30
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                           54
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span
                                                                                class="badge badge-soft-danger p-1">Slab</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div> <!-- end .d-sm-flex-->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end task -->

                                                    <!-- task -->
                                                    <div class="row justify-content-sm-between mt-2 pt-2">
                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="task6">
                                                                <label class="custom-control-label" for="task6">
                                                                    Documentarea procedurilor , tratamentelor si observatiilor clinice.
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                               <!-- <div>
                                                                    <img src="assets/images/users/avatar-7.jpg"
                                                                        alt="image" class="avatar-xs rounded-circle"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Assigned to Edward S" />
                                                                </div>-->
                                                                <div class="mt-3 mt-sm-0">
                                                                    <ul class="list-inline font-13 text-sm-right mb-0">
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-schedule font-16 mr-1'></i>
                                                                            23 Octombrie , ora 17:20
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                           18/20
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                           57
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span
                                                                                class="badge badge-soft-info p-1">Mediu</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div> <!-- end .d-sm-flex-->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end task -->
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card -->
                                        </div>

                                        <div class="tab-pane fade" id="pills-files" role="tabpanel"
                                            aria-labelledby="pills-files-tab">
                                            <h5 class="mt-3">Fisiere</h5>

                                            <div class="card mb-2 shadow-none border">
                                                <div class="p-1 px-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <img src="assets/images/projects/VetCare1.png"
                                                                class="avatar-sm rounded" alt="file-image">
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="javascript:void(0);"
                                                                class="text-muted font-weight-bold">cabinet-veterinar.zip</a>
                                                            <p class="mb-0">8 MB</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Button -->
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="bottom" title="Descarca"
                                                                class="btn btn-link text-muted btn-lg p-0">
                                                                <i class='uil uil-cloud-download font-size-14'></i>
                                                            </a>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="bottom" title="Sterge"
                                                                class="btn btn-link text-danger btn-lg p-0">
                                                                <i class='uil uil-multiply font-size-14'></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-2 shadow-none border">
                                                <div class="p-1 px-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <img src="assets/images/projects/contact.png"
                                                                class="avatar-sm rounded" alt="file-image">
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="javascript:void(0);"
                                                                class="text-muted font-weight-bold">contact.docx</a>
                                                            <p class="mb-0">9 MB</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Button -->
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="bottom" title="Descarca"
                                                                class="btn btn-link text-muted btn-lg p-0">
                                                                <i class='uil uil-cloud-download font-size-14'></i>
                                                            </a>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="bottom" title="Sterge"
                                                                class="btn btn-link text-danger btn-lg p-0">
                                                                <i class='uil uil-multiply font-size-14'></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end attachments -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->

            </div> <!-- content -->

            

            <!-- Footer Start -->
            <?php include_once 'include/footer.php' ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>