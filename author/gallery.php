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
                                                <h5 class="modal-title" id="modal-title">Galerie</h5>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form class="needs-validation" name="event-form" id="form-event" novalidate="" method="post" action="Adauga-galerie.php" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Titlul</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Titlul" type="text" name="titlul" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Imagine</label>
                                                                <div class="input-group mb-2" style="width: 100%;">
                                                                    <input type="file" accept="image/*" class="form-control" name="img" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Status</label>
                                                                <select style="width: 100%;" class="form-control custom-select" name="status" required>
                                                                    <option value="activ" selected>Activ</option>
                                                                    <option value="inactiv">Inactiv</option>
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
                                                            <button type="submit" class="btn btn-success" name="submit">
                                                                Adauga Galerie
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
                                    <i class='uil uil-file-alt mr-1'></i>Adauga Galerie
                                </button>
                            </div>
                        </nav>
                        <h4 class="mb-1 mt-0">Galeria Noastra</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeria Noastra</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-1">Galerie</h4>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>Id Galerie</th>
                                        <th>Titlul</th>
                                        <th>Imagine</th>
                                        <th>Status</th>
                                        <th>Acțiuni</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $obtine_informatii_galerie = "SELECT * FROM `galerie`";
                                    $informatii_galerie = mysqli_query($db_con, $obtine_informatii_galerie);

                                    foreach($informatii_galerie as $cheie => $informatii) {
                                        ?>
                                        <tr>
                                            <td><?php echo $informatii['id_galerie'] ?></td>
                                            <td><?php echo $informatii['titlul'] ?></td>
                                            <td><img src="author/assets/images/users/<?php echo $informatii['img'] ?>" alt="<?php echo $informatii['img'] ?>" width="100"></td>
                                            <td><?php echo $informatii['status'] ?></td>
                                            <td>
                                                <span class="badge badge-soft-primary">
                                                    <a href="Editeaza-galerie.php?id=<?php echo $informatii['id_galerie']; ?>">Editeaza</a>
                                                </span>
                                                                                            <span class="badge badge-soft-danger">
                                                    <a class="badge-soft-danger" href="Sterge-galerie.php?id=<?php echo $informatii['id_galerie']; ?>">Sterge</a>
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
