<?php
global $db_con;
require_once '../controller/config/db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gestionarea Clinicii Veterinare VetCare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugins -->
        <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
                <!-- Plugins css -->
        <link href="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/multiselect/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />

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
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Tabel</h4>
                            </div>
                            <div class="col-sm-8 col-xl-6">
                                <div class="form-inline float-sm-right mt-3 mt-sm-0">
                                    <div class="form-group mb-sm-0 mr-2">
                                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                                    </div>
                               
                                    <div class="btn-group">
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    ×
                                                    </button>
                                                    <h5 class="modal-title" id="modal-title">Programari Noi</h5>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <form class="needs-validation" method="post" <!--action="controller/newAppointmentController.php"-->>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Nume Client</label>
                                                                    <input class="form-control" style="width: 100%;" placeholder="Introduceti Numele Clientului" type="text" name="CustomerName" >
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <br>
                                                                <div class="form-group">
                                                                    <label class="control-label">Numarul de Telefon al Clientului</label>
                                                                    <div class="input-group mb-2" style="width: 100%;">
                                                                        <div class="input-group-prepend">
                                                                        <div class="input-group-text">+880</div>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="mobileNo"  placeholder="Introduce Numarul de Telefon al Clientului">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Email Client</label>
                                                                    <input class="form-control" style="width: 100%;" placeholder="Introduceti Email-ul Clientului" type="text" name="customerEmail">
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <br>
                                                                <div class="form-group">
                                                                    <label class="control-label">Selecteaza Departamentul</label>
                                                                    <select style="width: 100%;" class="form-control custom-select" name="department_id">
                                                                        <option disabled selected="">Alege Departamentul</option>
                                                                        <?php 
                                                                        
                                                                        $obtine_informatii_departament = "SELECT * FROM servicii WHERE service_status = 1";

                                                                        $runDepartment = mysqli_query($db_con,$obtine_informatii_departament);
                                                                        
                                                                        foreach($runDepartment as $departament_info){

                                                                        
                                                                        
                                                                        ?>
                                                                        <option value="<?php echo  $departament_info['id_servicii'] ?>"><?php echo  $departament_info['nume_serviciu'] ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <br>
                                                                <div class="form-group">
                                                                    <label class="control-label">Selecteaza Doctorul</label>
                                                                    <select style="width: 100%;" class="form-control custom-select" name="Doctor_id" >
                                                                        <option disabled selected="">Selecteaza Doctorul</option>
                                                                        <?php 
                                                                        
                                                                        $obtine_informatii_doctor = "SELECT * FROM doctori WHERE doctor_status = 1";

                                                                        $runDoctor = mysqli_query($db_con,$obtine_informatii_doctor);

                                                                        foreach($runDoctor as $informatii_doctor){

                                                                        ?>
                                                                        <option value="<?php echo $informatii_doctor['id_doctor'] ?>"><?php echo $informatii_doctor['nume'] ?></option>

                                                                        <?php  } ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <br>
                                                                <div class="form-group">
                                                                    <label class="control-label">Data Programarii</label>
                                                                    <div class="input-group mb-2" style="width: 100%;">
                                                                        <input type="text" id="datetime-datepicker" class="form-control" name="appointmentTime" placeholder="Data si Ora Programarii">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-6">
                                                            </div>
                                                            <div class="col-6 text-right">
                                                            <button type="button" class="btn btn-light mr-1" data-dismiss="modal">
                                                                Inchide
                                                            </button>
                                                            <button type="submit" name="newAppointment" class="btn btn-success" id="btn-save-event">
                                                                Adauga Programare
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                </div>
                                                <!-- end modal-content-->
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="modal" data-target="#exampleModal">
                                            <i class='uil uil-file-alt mr-1'></i>Programare Noua
                                        </button>
                                        
                                    </div>
                                 </div>
                            </div>
                        </div>

                        <!-- content -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Serviciile Noastre</span>
                                                <h2 class="mb-0">10</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag icon-lg icon-dual-primary"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Doctorii</span>
                                                <h2 class="mb-0">1065</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users icon-lg icon-dual-success"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Programare de Azi</span>
                                                <h2 class="mb-0">11</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text icon-lg icon-dual-info"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Contactul Clientului de Azi</span>
                                                <h2 class="mb-0">750</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee icon-lg icon-dual-warning"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- stats + charts -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <h5 class="card-title header-title border-bottom p-3 mb-0">Overview</h5>
                                        <!-- stat 1 -->
                                        <div class="media px-3 py-4 border-bottom">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">121,000</h4>
                                                <span class="text-muted">Pacientii de Azi</span>
                                            </div>
                                            <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                                        </div>

                                        <!-- stat 2 -->
                                        <div class="media px-3 py-4 border-bottom">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">121,000</h4>
                                                <span class="text-muted">Pacientii din ultimele 7 zile</span>
                                            </div>
                                            <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                                        </div>
                                        <div class="media px-3 py-4 border-bottom">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">121,000</h4>
                                                <span class="text-muted">Vizitatori Totali</span>
                                            </div>
                                            <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mt-0 mb-0 header-title">Programarea Utilizatorului</h5>
                                        <div id="sales-by-category-chart" class="apex-charts mb-0 mt-4" dir="ltr"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title header-title">Device-ul Utilizatorului</h5>
                                        <div id="targets-chart" class="apex-charts mt-3" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                
                        <!-- products -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="all_appointment.php" class="btn btn-primary btn-sm float-right">
                                            <i class='uil uil-export ml-1'></i>Toate Programarile
                                        </a>
                                        <h5 class="card-title mt-0 mb-0 header-title">Programarile Noastre</h5>

                                        <div class="table-responsive mt-4">
                                            <table class="table table-hover table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"># ID</th>
                                                        <th scope="col">Nume Client</th>
                                                        <th scope="col">Nume Animalut</th>
                                                        <th scope="col">Tipul Animalutului</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Numar de Telefon</th>
                                                        <th scope="col">Data Programarii</th>
                                                        <th scope="col">Departament/Serviciu</th>
                                                        <th scope="col">Doctor</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#98754</td>
                                                        <td>Code Camp BD</td>
                                                        <td>user@gmail.com</td>
                                                        <td>123456789</td>
                                                        <td>10-09-2023</td>
                                                        <td>ABC</td>
                                                        <td>MH RANA</td>
                                                        <td><span class="badge badge-soft-warning py-1">Pending</span></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div>
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

        <!-- optional plugins -->
        <script src="assets/libs/moment/moment.min.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

        <!-- page js -->
        <script src="assets/js/pages/dashboard.init.js"></script>
        
        <!-- Plugins Js -->
        <script src="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="assets/libs/select2/select2.min.js"></script>
        <script src="assets/libs/multiselect/jquery.multi-select.js"></script>
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <!-- Init js-->
        <script src="assets/js/pages/form-advanced.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>


    </body>
</html>