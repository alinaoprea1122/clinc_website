<?php

global $db_con;
require_once '../controller/config/db_config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Programare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row page-title">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" class="float-right mt-1">
                            <div class="btn-group">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    ×
                                                </button>
                                                <h5 class="modal-title" id="modal-title">Programare Noua</h5>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form class="needs-validation" method="post" <!--action="controller/newAppointmentController.php-->>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Nume Client</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Numele Clientului" type="text" name="CustomerName" required>
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
                                                                    <input type="text" class="form-control" name="mobileNo"  placeholder="Introduceti Numarul de Telefon al Clientului" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Email Client</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Email-ul Clientului" type="email" name="customerEmail" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <br>
                                                            <div class="form-group">
                                                                <label class="control-label">Selecteaza Departamentul</label>
                                                                <select style="width: 100%;" class="form-control custom-select" name="department_id" required>
                                                                    <option disabled selected="">Alege Departamentul</option>
                                                                    <?php

                                                                    $obtine_departament = "SELECT * FROM servicii WHERE service_status = 1";

                                                                    $runDepartment = mysqli_query($db_con,$obtine_departament);

                                                                    foreach($runDepartment as $info_departament){
                                                                        ?>
                                                                        <option value="<?php echo $info_departament['id_servicii'] ?>"><?php echo $info_departament['nume'] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <br>
                                                            <div class="form-group">
                                                                <label class="control-label">Selecteaza Doctorul</label>
                                                                <select style="width: 100%;" class="form-control custom-select" name="Doctor_id" required>
                                                                    <option disabled selected="">Selecteaza Doctorul</option>
                                                                    <?php

                                                                    $obtine_doctor = "SELECT * FROM doctori WHERE doctor_status = 1";

                                                                    $runDoctor = mysqli_query($db_con,$obtine_doctor);

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
                                                                    <input type="text" id="datetime-datepicker" class="form-control" name="appointmentTime" placeholder="Data si Ora Programarii" required>
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

                        </nav>
                        <h4 class="mb-1 mt-0">Toate Programarile</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tabel cu Programari</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Toate Programarile</li>
                        </ol>
                    </div>
                </div>

                <?php

                if(!empty(isset($_GET['msg']))){

                    $msg = $_GET['msg'];

                    echo '  <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>'.$msg.'</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';
                }

                ?>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-1">Toate Programarile</h4>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nume</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Numar de Telefon</th>
                                        <th scope="col">Data Programarii</th>
                                        <th scope="col">Ora Programarii</th>
                                        <th scope="col">ID Servicii</th>
                                        <th scope="col">ID Doctor</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actiuni</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php

                                    $toate_informatiile_programarilor = "SELECT * FROM `programare` ORDER BY `programare`.`id` DESC";

                                    $toate_programarile = mysqli_query($db_con, $toate_informatiile_programarilor);

                                    foreach($toate_programarile as $informatii_programare){

                                        $status_programare = $informatii_programare['status_programare'];

                                        ?>
                                        <tr>
                                            <td>#CCBD-0<?php echo $informatii_programare['id'] ?></td>
                                            <td><?php echo $informatii_programare['nume'] ?></td>
                                            <td><?php if(empty($informatii_programare['email'])){echo "N/A";}else{echo $informatii_programare['email'];} ?></td>
                                            <td><?php echo $informatii_programare['telefon'] ?></td>
                                            <td><?php echo $informatii_programare['data_programarii'] ?></td>
                                            <td><?php echo $informatii_programare['ora_programarii'] ?></td>
                                            <td><?php echo $informatii_programare['id_servicii'] ?></td>
                                            <td><?php echo $informatii_programare['id_doctor'] ?></td>
                                            <td><span class="badge badge-soft-<?php echo ($status_programare == 'in asteptare') ? 'warning' : (($status_programare == 'confirmata') ? 'info' : 'success'); ?> py-1">
                                                    <?php echo ucfirst($status_programare); ?></span>
                                            </td>
                                            <td><span class="badge badge-soft-primary"><a href="#">Editeaza</a></span> <span class="badge badge-soft-danger"><a class="badge-soft-danger" href="#">Sterge</a></span></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

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


<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- datatable js -->
<script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
<script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

<script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/datatables/buttons.html5.min.js"></script>
<script src="assets/libs/datatables/buttons.flash.min.js"></script>
<script src="assets/libs/datatables/buttons.print.min.js"></script>

<script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="assets/libs/datatables/dataTables.select.min.js"></script>

<!-- Datatables init -->
<script src="assets/js/pages/datatables.init.js"></script>

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
