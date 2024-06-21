<?php 

require_once '../controller/config/db_config.php';

?>
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
                                    <li class="breadcrumb-item"><a href="#">Cabinet Veterinar</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pagini</a></li>
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
                                        <img src="assets/images/users/VetCare.png" alt=""
                                            class="avatar-lg rounded-circle" />
                                        <h5 class="mt-2 mb-0">Cabinet Veterinar</h5>
                                        <h6 class="text-muted font-weight-normal mt-1 mb-4">Timisoara , Timis , Romania</h6>

                                        <div class="progress mb-4" style="height: 14px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <span class="font-size-12 font-weight-bold">Profilul tau Este <span
                                                        class="font-size-11">80%</span> Complet</span>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary btn-sm mr-1">Urmareste</button>
                                        <button type="button" class="btn btn-white btn-sm">Mesaj</button>
                                    </div>

                                    <!-- profile  -->
                                    <div class="mt-5 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">Despre</h4>
                                        <p class="text-muted mb-4">Clinica veterinară VetCare, situată la periferia orașului nostru, a devenit rapid un punct de referință pentru iubitorii de animale, oferind servicii veterinare de înaltă calitate. Dar cum a început această poveste de succes? Haideți să descoperim împreună începuturile clinicii VetCare, un loc unde pasiunea pentru animale și dedicarea pentru sănătatea acestora se întâlnesc într-un mod armonios.
                                        </p>
                                    </div>
                                    <div class="mt-3 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">Informatii Contact</h4>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0 text-muted">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td>VetCare@yahoo.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Numar de Telefon</th>
                                                        <td>+4073677231</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Adresa</th>
                                                        <td>Calea Aradului 119, Timișoara</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="mt-3 pt-2 border-top">
                                        <h4 class="mb-3 font-size-15">Tag-uri</h4>
                                        <label class="badge badge-soft-primary">Sanatate</label>
                                        <label class="badge badge-soft-primary">Iubire</label>
                                        <label class="badge badge-soft-primary">Ingrijire</label>
                                        <label class="badge badge-soft-primary">Echipa</label>
                                        <label class="badge badge-soft-primary">Comunicare</label>
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
                                                Sarcini
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
                                                                        Acum 5h</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Terapie intensivă - Dr. Raluca Popescu</h6>
                                                                    <p class="text-muted font-size-14">Utilizarea perfuziilor pentru rehidratare, administrarea de antibiotice pentru infecții severe și alte terapii necesare în situații critice.</p>
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
                                                                        Acum 12h</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Deparazitări: - Ana-Maria Cristescu</h6>
                                                                    <p class="text-muted font-size-14">ratamente regulate pentru prevenirea infestărilor cu paraziți interni (viermi intestinali) și externi (purici, căpușe).</p>
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
                                                                        Acum 20h</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Tratamentul afecțiunilor dentare - Dr. Bianca Tataru</h6>
                                                                    <p class="text-muted font-size-14">Extracția dinților deteriorați sau infectați și tratamente pentru abcese dentare.</p>
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
                                                                        Luni , ora 18:00</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Băi medicinale - Andreea Ionescu</h6>
                                                                    <p class="text-muted font-size-14"> Băi cu șampoane speciale pentru tratarea afecțiunilor pielii, cum ar fi dermatitele alergice sau infecțiile fungice.</p>
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
                                                                        Miercuri , ora 15:00 </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Monitorizare a sarcinii - Dr. Anca Lorescu</h6>
                                                                    <p class="text-muted font-size-14">Ecografii și consultații regulate pentru a monitoriza dezvoltarea puilor și sănătatea mamei pe parcursul sarcinii.</p>
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
                                                                       Vineri , ora 10:00</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Chirurgie de urgență - Dr. Andrei Mihai</h6>
                                                                    <p class="text-muted font-size-14"> Intervenții chirurgicale pentru traume majore, cum ar fi fracturi complexe, torsiuni gastrice și răni profunde.</p>
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
                                                                        Marti , 18 Aprilie , ora 16:00</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Tratamente pentru boli cronice - Dr. Carmen Enescu</h6>
                                                                    <p class="text-muted font-size-14">Gestionarea afecțiunilor pe termen lung, cum ar fi diabetul, artrita și insuficiența renală, prin administrarea de medicamente și monitorizarea constantă a stării de sănătate a animalului.
                                                                    </p>
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
                                                                        Luni , 24 Aprilie , ora 16:00 </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Asistență medicală 24/7 - Dr. Elena Diaconescu</h6>
                                                                    <p class="text-muted font-size-14">Disponibilitatea personalului medical pentru intervenții de urgență în orice moment, inclusiv în afara programului obișnuit de lucru.</p>
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
                                                                        29 Aprilie , Sambata , ora 12:00</div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="font-size-15 mt-0 mb-1">Spitalizare pentru pacienți critici - Dr. Horia Preda</h6>
                                                                    <p class="text-muted font-size-14">Îngrijire intensivă pentru animale care necesită monitorizare constantă și tratamente complexe, cum ar fi cei cu insuficiență respiratorie sau insuficiență renală acută.</p>
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
                                                            <img src="assets/images/users/Cristina-pop.jpeg" alt=""
                                                                class="avatar-md rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Cristina Pop</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Tu : Vă confirmăm programarea pentru consultația de rutină a câinelui dvs., Rex, la data de 20 iunie 2024, ora 15:00. Vă rugăm să aduceți carnetul de sănătate al animalului. Dacă aveți întrebări suplimentare sau dacă doriți să modificați programarea, nu ezitați să ne contactați la numărul de telefon 0123-456-789.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Ionela-costescu.jpeg" alt=""
                                                                class="avatar-md rounded-circle">

                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Ionela Costescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Tu : Vă reamintim că pisica dvs., Mimi, are nevoie de vaccinarea anuală. Vă recomandăm să programați o vizită la clinica noastră în săptămâna următoare pentru a asigura protecția continuă a sănătății ei. Ne puteți contacta pentru a stabili o programare la numărul de telefon +4073677231. </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Cristian-popescu.jpeg" alt=""
                                                                 class="avatar-md rounded-circle">

                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Cristian Popescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0"> Tu : Dorim să vă informăm că intervenția chirurgicală a câinelui dvs., Bruno, s-a desfășurat cu succes. Bruno se află acum în perioada de recuperare și este sub monitorizare constantă. Puteți veni să-l luați acasă mâine, începând cu ora 10:00. Vă vom oferi toate instrucțiunile necesare pentru îngrijirea post-operatorie.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/George-raescu.jpeg" alt=""
                                                                class="avatar-md rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">George Raescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">Am un motan pe nume Leo, care pare să aibă probleme dentare (salivează excesiv și nu mănâncă). Aș dori să știu dacă aveți disponibilitate pentru o consultație în această săptămână. De asemenea, care ar fi costurile aproximative pentru un tratament dentar?</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Bogdan-georgescu.jpeg" alt=""
                                                                 class="avatar-md rounded-circle">

                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Bogdan Georgescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Vreau să vă mulțumesc pentru profesionalismul și grija de care ați dat dovadă în tratarea pisicii mele, Luna. Intervenția a fost un succes și Luna se simte mult mai bine. Voi recomanda cu siguranță clinica dvs. și altor proprietari de animale de companie.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Maria-cristescu.jpeg" alt=""
                                                                class="avatar-md rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Maria Cristescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Cățelușa mea, Bella, a ingerat accidental ciocolată și este foarte agitată. Pot veni de urgență la clinica dvs. pentru ajutor? Suntem în drum acum și sper să ajungem în aproximativ 15 minute.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 border-bottom">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Patricia-oprescu.jpeg" alt=""
                                                                 class="avatar-md rounded-circle">

                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Patricia Oprescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">Bună ziua! Voi fi acolo la timp. Mulțumesc pentru reamintire! o</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3">
                                                    <div class="media">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/Daniela-ionescu.jpeg" alt=""
                                                                class="avatar-md rounded-circle">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                                    class="text-dark">Daniela Ionescu</a></h5>
                                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                                Bună ziua! Tomi pare să se simtă mai bine, nu mai are mâncărimi. Voi continua să aplic crema recomandată. Mulțumesc!</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="text-center">
                                                <a href="#" class="btn btn-primary btn-sm">Mai Mult</a>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-projects" role="tabpanel"
                                            aria-labelledby="pills-projects-tab">

                                            <h5 class="mt-3">Proiecte</h5>

                                            <div class="row mt-3">
                                                <div class="col-xl-4 col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="badge badge-success float-right">Completat</div>
                                                            <p class="text-success text-uppercase font-size-12 mb-2">Educatie</p>
                                                            <h5><a href="#" class="text-dark">Proiect de Educație și Conștientizare</a>
                                                            </h5>
                                                            <p class="text-muted mb-4">Educația este cheia unui viitor mai bun, iar VetCare investește în educația proprietarilor de animale printr-un proiect de conștientizare și informare. Clinicile organizează seminarii, ateliere și sesiuni de informare atât la sediul clinicii, cât și online. Aceste activități educative acoperă subiecte variate, de la nutriția adecvată a animalelor, până la prevenirea și recunoașterea bolilor. Materialele educative, cum ar fi broșurile și videoclipurile, sunt distribuite pentru a ajuta proprietarii să îngrijească mai bine de animalele lor.
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
                                                                                <i class="uil uil-calender mr-1"></i> 25 Mai
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 72
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
                                                                                81
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="100% completat">
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
                                                            <div class="badge badge-success float-right">Completat</div>
                                                            <p class="text-success text-uppercase font-size-12 mb-2">
                                                                Scoala</p>
                                                            <h5><a href="#" class="text-dark">Proiect de Parteneriat cu Școlile</a>
                                                            </h5>
                                                            <p class="text-muted mb-4">Pentru a cultiva dragostea și respectul față de animale în rândul tinerilor, VetCare a inițiat un proiect de parteneriat cu școlile locale. Vizitele educative, prezentările despre îngrijirea animalelor și tururile ghidate ale clinicii sunt doar câteva dintre activitățile desfășurate. Aceste inițiative îi ajută pe copii să înțeleagă importanța responsabilității față de animalele de companie și să devină viitori adulți conștienți și grijulii.
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
                                                                                <i class="uil uil-calender mr-1"></i> 15 Septembrie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 56
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
                                                                               91
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="100% completat">
                                                                        <div class="progress-bar bg-success"
                                                                            role="progressbar" style="width: 72%;"
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
                                                            <div class="badge badge-success float-right">Completat</div>
                                                            <p class="text-success text-uppercase font-size-12 mb-2">Reabilitare</p>
                                                            <h5><a href="#" class="text-dark">Proiect de Terapii Alternative și Reabilitare
                                                                </a></h5>
                                                            <p class="text-muted mb-4">Oferirea de opțiuni suplimentare pentru tratamentul și recuperarea animalelor, reducerea durerii și îmbunătățirea mobilității acestora.
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
                                                                                <i class="uil uil-calender mr-1"></i> 29 Martie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 84
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
                                                                               97
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="100% completat">
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
                                                                Sanatate</p>
                                                            <h5><a href="#" class="text-dark">Proiect de Program de Management al Greutății</a></h5>
                                                            <p class="text-muted mb-4">Reducerea incidenței obezității și a problemelor de sănătate asociate la animalele de companie, promovând un stil de viață activ și sănătos.
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
                                                                                <i class="uil uil-calender mr-1"></i> 30 Aprilie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 63
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
                                                                                75
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="88% completat">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 60%;"
                                                                            aria-valuenow="88" aria-valuemin="0"
                                                                            aria-valuemax="88"></div>
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
                                                            <p class="text-warning text-uppercase font-size-12 mb-2">Dezvoltare</p>
                                                            <h5><a href="#" class="text-dark">Proiect de Program de Terapie Asistată de Animale
                                                                </a></h5>
                                                            <p class="text-muted mb-4">Îmbunătățirea stării de bine emoționale și psihologice a persoanelor care beneficiază de terapie asistată de animale.</p>

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
                                                                                <i class="uil uil-calender mr-1"></i> 17 Iulie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 51
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
                                                                               69
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="76% completat">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 100%;"
                                                                            aria-valuenow="76" aria-valuemin="0"
                                                                            aria-valuemax="76"></div>
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
                                                            <p class="text-warning text-uppercase font-size-12 mb-2">Mediu Inconjurator</p>
                                                            <h5><a href="#" class="text-dark">Proiect de Asistență pentru Îngrijirea de Urgență în Caz de Dezastre Naturale</a></h5>
                                                            <p class="text-muted mb-4"> Comunitate mai bine pregătită și protejată în fața dezastrelor naturale, reducerea riscului pentru animalele de companie.
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
                                                                                <i class="uil uil-calender mr-1"></i> 11 Octombrie
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <a href="#"
                                                                                class="text-muted d-inline-block"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Like-uri">
                                                                                <i class="uil uil-bars mr-1"></i> 90
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
                                                                                87
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <div class="progress" style="height: 5px;"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="59% completat">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 100%;"
                                                                            aria-valuenow="59" aria-valuemin="0"
                                                                            aria-valuemax="59"></div>
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
                                            <h5 class="mt-3">Sarcini</h5>

                                            <div class="card mb-0 shadow-none">
                                                <div class="card-body">
                                                    <!-- task -->
                                                    <div class="row justify-content-sm-between border-bottom">
                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="task1">
                                                                <label class="custom-control-label" for="task1">
                                                                    Consilierea proprietarilor privind îngrijirea animalelor cu afecțiuni cronice.

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
                                                                            12 August 12:30
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                           7/7
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                            65
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
                                                                    Păstrarea înregistrărilor actualizate ale vaccinărilor.
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
                                                                            24 Noiembrie 14:50
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                            3/6
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                            77
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
                                                                    Educația proprietarilor despre igiena dentară a animalelor.
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                                <!--<div>
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
                                                                            9 Decembrie 15:30
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                            18/24
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                           66
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
                                                                    Consilierea privind problemele de greutate și obezitate.
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
                                                                            22 Decembrie 14:30
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                           11/12
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                           85
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
                                                                    Consilierea privind problemele de greutate și obezitate.
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
                                                                            20 Septembrie 16:40
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                            19/20
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                            82
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
                                                                    Realizarea intervențiilor necesare de urgență, cum ar fi stoparea hemoragiilor.
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                              <!--  <div>
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
                                                                            30 Ianuarie 17:30
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='uil uil-align-alt font-16 mr-1'></i>
                                                                           9/10
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='uil uil-comment-message font-16 mr-1'></i>
                                                                           90
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
                                                                class="text-muted font-weight-bold">VetCare.zip</a>
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
                                            <div class="card mb-2 shadow-none border">
                                                <div class="p-1 px-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <img src="assets/images/projects/doctori.png"
                                                                class="avatar-sm rounded" alt="file-image">
                                                        </div>
                                                        <div class="col pl-0">
                                                            <a href="javascript:void(0);"
                                                                class="text-muted font-weight-bold">doctori.docx</a>
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