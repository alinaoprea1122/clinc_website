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
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Servicii</li>
                            </ol>
                        </nav>
                        <h4 class="mb-1 mt-0">Servicii</h4>
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
                                <h4 class="header-title mt-0 mb-1">Serviciile Noastre</h4>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID Servicii</th>
                                        <th>Nume Serviciu</th>
                                        <th>Scurta Descriere</th>
                                        <th>ID Doctor</th>
                                        <th>Serviciu Status</th>
                                        <th>Actiuni</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php

                                    $obtine_serviciile = "SELECT * FROM servicii";
                                    $runQuerry = mysqli_query($db_con, $obtine_serviciile);

                                    foreach($runQuerry as $single_serviciu){
                                        $id_servicii = $single_serviciu['id_servicii'];
                                        $nume_serviciu = $single_serviciu['nume_serviciu'];
                                        $scurta_descriere = $single_serviciu['scurta_descriere'];
                                        $id_doctor = $single_serviciu['id_doctor'];
                                        $serviciu_status = $single_serviciu['serviciu_status'];
                                        ?>
                                        <tr>
                                            <td><?php echo $id_servicii ?></td>
                                            <td><?php echo $nume_serviciu ?></td>
                                            <td><?php echo $scurta_descriere ?></td>
                                            <td><?php echo $id_doctor ?></td>
                                            <td><?php echo ucfirst($serviciu_status) ?></td>
                                            <td>
                                                <span class="badge badge-soft-primary"><a href="Editeaza-serviciu.php?id=<?php echo $id_servicii ?>">Editează</a></span>
                                                <span class="badge badge-soft-danger"><a class="badge-soft-danger" href="Sterge-serviciu.php?id=<?php echo $id_servicii ?>" onclick="return ">Șterge</a></span>
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
