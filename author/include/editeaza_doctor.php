<?php

global $db_con;
require_once '../../controller/config/db_config.php';

// Obțineți ID-ul doctorului din parametrii URL
$id_doctor = $_GET['id'];

// Interogați baza de date pentru a obține detaliile doctorului
$sql = "SELECT * FROM doctori WHERE id_doctor = '$id_doctor'";
$result = mysqli_query($db_con, $sql);
$doctor = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Editeaza Doctor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="../assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <?php include_once "topbar.php" ?>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <?php include_once "sidebar.php" ?>
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
                        <h4 class="mb-1 mt-0">Editeaza Doctor</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Doctori</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editeaza Doctor</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-1">Editeaza Doctor</h4>
                                <form method="post" action="../controller/update_doctor.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Id Doctor</label>
                                                <input class="form-control" type="text" name="id_doctor" value="<?php echo $doctor['id_doctor']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Nume Doctor</label>
                                                <input class="form-control" type="text" name="nume" value="<?php echo $doctor['nume']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Id Serviciu</label>
                                                <input class="form-control" type="text" name="id_serviciu" value="<?php echo $doctor['id_serviciu']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Serviciu</label>
                                                <input class="form-control" type="text" name="serviciu" value="<?php echo $doctor['serviciu']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Numar Doctor</label>
                                                <input class="form-control" type="text" name="numar_doctor_contact" value="<?php echo $doctor['număr_doctor_contact']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Salariul Doctorului</label>
                                                <input class="form-control" type="number" name="salariu_doctor" value="<?php echo $doctor['salariu_doctor']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Data Angajare</label>
                                                <input class="form-control" type="date" name="data_angajare" value="<?php echo $doctor['data_angajare']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Doctor Imagine</label>
                                                <input class="form-control" type="file" name="doctor_img">
                                                <img src="../assets/uploaded/doctor/<?php echo $doctor['doctor_img']; ?>" alt="" width="100">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Departament</label>
                                                <input class="form-control" type="text" name="departament" value="<?php echo $doctor['departament']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label">Status Doctor</label>
                                                <select class="form-control custom-select" name="doctor_status" required>
                                                    <option value="1" <?php if($doctor['doctor_status'] == 1) echo 'selected'; ?>>Activ</option>
                                                    <option value="0" <?php if($doctor['doctor_status'] == 0) echo 'selected'; ?>>Inactiv</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                        </div>
                                        <div class="col-6 text-right">
                                            <button type="submit" name="submit" class="btn btn-success">
                                                Actualizeaza Doctor
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <?php include_once 'footer.php' ?>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->



<!-- Vendor js -->
<script src="../assets/js/vendor.min.js"></script>

<!-- datatable js -->
<script src="../assets/libs/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../assets/libs/datatables/dataTables.responsive.min.js"></script>
<script src="../assets/libs/datatables/responsive.bootstrap4.min.js"></script>

<script src="../assets/libs/datatables/dataTables.buttons.min.js"></script>
<script src="../assets/libs/datatables/buttons.bootstrap4.min.js"></script>
<script src="../assets/libs/datatables/buttons.html5.min.js"></script>
<script src="../assets/libs/datatables/buttons.flash.min.js"></script>
<script src="../assets/libs/datatables/buttons.print.min.js"></script>

<script src="../assets/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="../assets/libs/datatables/dataTables.select.min.js"></script>

<!-- Datatables init -->
<script src="../assets/js/pages/datatables.init.js"></script>

<!-- App js -->
<script src="../assets/js/app.min.js"></script>

</body>
</html>
