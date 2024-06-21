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
                                        <li class="breadcrumb-item active" aria-current="page">Programari Realizate</li>
                                    </ol>
                                </nav>
                                <h4 class="mb-1 mt-0">Programari Realizate</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-1">Programari Realizate</h4>

                                        <table id="basic-datatable" class="table dt-responsive nowrap">
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
                                                    <th scope="col">Aciune</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <?php 
                                                
                                                  $obtine_informatii_programari= "SELECT * FROM `programare` WHERE status_programare = 2";
                                                  
                                                  $toate_programarile = mysqli_query($db_con,$obtine_informatii_programari);

                                                  foreach($toate_programarile as $informatii_programari){

                                                
                                                ?>
                                                <tr>
                                                    <td>#CCBD-0<?php echo $informatii_programari['id'] ?></td>
                                                    <td><?php echo $informatii_programari['nume'] ?></td>
                                                    <td><?php if(empty($informatii_programari['email'])){echo "N/A";}else{echo$informatii_programari['email'];} ?></td>
                                                    <td><?php echo $informatii_programari['telefon'] ?></td>
                                                    <td><?php echo $informatii_programari['data_programarii']." / ". $informatii_programari['ora_programarii']?></td>
                                                    <td><?php echo $informatii_programari['id_servicii'] ?></td>
                                                    <td><?php echo $informatii_programari['id_doctor'] ?></td>
                                                    <td><span class="badge badge-soft-success py-1"><?php if($informatii_programari['status_programare'] == 2){
                                                        echo "Terminat !";
                                                    } ?></span></td>
                                                    <td><span class="badge badge-soft-primary"> <a href="#">Editeaza</a></span> <span class="badge badge-soft-danger"> <a class="badge-soft-danger" href="#">Sterge</a></span></td>
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

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>