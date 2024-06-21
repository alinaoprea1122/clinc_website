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

    <body class="authentication-bg">
        
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="card">
                            <div class="col-md-12 p-5">
                                        <div class="mx-auto mb-5" style="text-align: center;">
                                            <a href="index.php">
                                                <img src="assets/images/logo.png" alt="" height="24" />
                                                <h3 class="d-inline align-middle ml-1 text-logo">Logare</h3>
                                            </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-4">Bine te-am Regasit !</h6>

                                        <form class="authentication-form" action="index.php" autocomplete="off" method="POST">
                                            <div class="form-group">
                                                <label class="form-control-label">Adresa de Email</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="mail"></i>
                                                        </span>
                                                    </div>
                                                    <input type="email" name="email"  class="form-control" id="email" placeholder="nume.prenume@yahoo/gmail.com">
                                                </div>
                                            </div>

                                            <div class="form-group mt-4">
                                                <label class="form-control-label">Parola</label>
                                              
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" name="password" class="form-control" id="password"
                                                        placeholder="Introduceti Parola ">
                                                </div>
                                            </div>

                                            <div class="mb-3 text-center d-grid">
                                            <button class="btn btn-primary" type="submit">Logheaza-te</button>
                                        </div>
                                        </form>

                                    </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>