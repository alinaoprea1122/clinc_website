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
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h5 class="modal-title" id="modal-title">Blog</h5>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form class="needs-validation" name="event-form" id="form-event" action="Adauga-blog.php" method="POST" novalidate="">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Id</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Id" type="number" name="id_stiri" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Titlul</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti Titlul" type="text" name="titlul" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <br>
                                                            <div class="form-group">
                                                                <label class="control-label">Categorie Stire</label>
                                                                <select style="width: 100%;" class="form-control custom-select" name="categorie_stire" id="event-category" required>
                                                                    <option value="Sanatate" selected>Sanatate</option>
                                                                    <option value="Ingrijire">Ingrijire</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <br>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Data Publicarii</label>
                                                                    <input class="form-control" id="example-date" type="date" name="data_publicarii" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Scurta Descriere</label>
                                                                <input class="form-control" style="width: 100%;" placeholder="Introduceti descrierea" type="text" name="scurta_istorie" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-6">
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <button type="button" class="btn btn-light mr-1" data-dismiss="modal">Inchide</button>
                                                            <button type="submit" class="btn btn-success" id="btn-save-event">Adauga Blog</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end modal-content-->
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="modal" data-target="#exampleModal">
                                    <i class='uil uil-file-alt mr-1'></i>Adauga Blog
                                </button>
                            </div>
                        </nav>
                        <h4 class="mb-1 mt-0">Blog</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-1">Blog</h4>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titlul</th>
                                        <th>Categorie Stire</th>
                                        <th>Data Publicarii</th>
                                        <th>Scurta Descriere</th>
                                        <th>Acțiuni</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $obtine_blog = "SELECT * FROM `stirile_noastre`";
                                    $informatii_blog = mysqli_query($db_con, $obtine_blog);

                                    foreach($informatii_blog as $blog) {
                                        ?>
                                        <tr>
                                            <td><?php echo $blog['id_stiri'] ?></td>
                                            <td><?php echo $blog['titlul'] ?></td>
                                            <td><?php echo $blog['categorie_stire'] ?></td>
                                            <td><?php echo $blog['data_publicarii'] ?></td>
                                            <td><?php echo $blog['scurta_istorie'] ?></td>
                                            <td>
                                                <span class="badge badge-soft-primary">
                                                    <a href="Editeaza-blog.php?id=<?php echo $blog['id_stiri']; ?>">Editeaza</a>
                                                </span>
                                                                                            <span class="badge badge-soft-danger">
                                                    <a href="Sterge_blog.php?id=<?php echo $blog['id_stiri']; ?>">Sterge</a>
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
