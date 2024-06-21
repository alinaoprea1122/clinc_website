<?php

global $db_con;
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

    <!-- plugin css -->
    <link href="assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                            <div class="btn-group">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    ×
                                                </button>
                                                <h5 class="modal-title" id="modal-title">Adauga Doctor</h5>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form class="needs-validation" method="post" action="Adauga-doctor.php" name="event-form" id="form-event" novalidate="" enctype="multipart/form-data">
                                                    <div class="row">

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Id Doctor</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Id-ul Doctorului" type="text" name="id_doctor" id="doctor-id" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Nume Doctor</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Numele Doctorului" type="text" name="nume" id="doctor-name" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Id Serviciu</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Id-ul Serviciului" type="text" name="id_serviciu" id="service-id" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Serviciu</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Serviciul" type="text" name="serviciu" id="service" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Numar Doctor</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Numarul Doctorului" type="text" name="numar_doctor_contact" id="doctor-number" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Salariul Doctorului</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Salariul Doctorului" type="number" name="salariu_doctor" id="doctor-salary" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Data Angajare</label>
                                                                <input class="form-control" id="example-date" type="date" name="data_angajare">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Doctor Imagine</label>
                                                                <div class="input-group mb-2" style="width: 100%;">
                                                                    <input type="file" accept="image/*" class="form-control" id="doctor-img" name="doctor_img">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Departament</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Departamentul" type="text" name="departament" id="departament" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Status Doctor</label>
                                                                <select class="form-control custom-select" name="doctor_status" id="doctor-status" required="">
                                                                    <option value="1">Activ</option>
                                                                    <option value="0">Inactiv</option>
                                                                </select>
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
                                                            <button type="submit" name="submit" class="btn btn-success" id="btn-save-event">
                                                                Adauga Doctor
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
                                    <i class='uil uil-user mr-1'></i>Adauga Doctor
                                </button>

                            </div>
                        </nav>
                        <h4 class="mb-1 mt-0">Doctorii Nostri</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Doctori</li>
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
                                <h4 class="header-title mt-0 mb-1">Doctorii Nostri</h4>


                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>Id Doctor</th>
                                        <th>Nume Doctor</th>
                                        <th>Id Serviciu</th>
                                        <th>Serviciu</th>
                                        <th>Numar Doctor</th>
                                        <th>Salariu Doctor</th>
                                        <th>Data Angajare</th>
                                        <th>Doctor Imagine</th>
                                        <th>Departament</th>
                                        <th>Doctor Status</th>
                                        <th>Actiuni</th>
                                    </tr>
                                    </thead>


                                    <tbody>

                                    <?php

                                    $obtine_informatii_doctor = "SELECT * FROM doctori";

                                    $runDoctorQuery = mysqli_query($db_con,$obtine_informatii_doctor);

                                    foreach($runDoctorQuery as $singleDoctor){

                                        $id_doctor        = $singleDoctor['id_doctor'];
                                        $nume_doctor      = $singleDoctor['nume'];
                                        $id_serviciu      = $singleDoctor['id_serviciu'];
                                        $serviciu         = $singleDoctor['serviciu'];
                                        $număr_doctor_contact = $singleDoctor['număr_doctor_contact'];
                                        $salariu_doctor   = $singleDoctor['salariu_doctor'];
                                        $data_angajare    = $singleDoctor['data_angajare'];
                                        $doctor_img       = $singleDoctor['doctor_img'];
                                        $departament      = $singleDoctor['departament'];
                                        $doctor_status    = $singleDoctor['doctor_status'];
                                        ?>


                                        <tr>
                                            <td><?php echo $id_doctor ?></td>
                                            <td><?php echo $nume_doctor ?></td>
                                            <td><?php echo $id_serviciu ?></td>
                                            <td><?php echo $serviciu ?></td>
                                            <td><?php echo  $număr_doctor_contact ?></td>
                                            <td><?php echo $salariu_doctor ?></td>
                                            <td><?php echo $data_angajare ?></td>
                                            <td><img style="width: 50px;" src="../assets/uploaded/doctor/<?php echo $doctor_img ?>" alt=""></td>
                                            <td><?php echo $departament ?></td>
                                            <td><?php if($doctor_status == 1){ echo "Activ"; } else { echo "Inactiv"; } ?></td>
                                            <td>
                                                <span class="badge badge-soft-primary">
                                                    <a href="Editeaza-doctor.php?id=<?php echo $id_doctor ?>">Editează</a>
                                                </span>
                                                <span class="badge badge-soft-danger">
                                                    <a class="badge-soft-danger" href="Sterge-doctor.php?id=<?php echo $id_doctor ?>" onclick="return">Șterge</a>
                                                </span>
                                            </td>

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
<!-- END wrapper -->


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

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>
</html>
