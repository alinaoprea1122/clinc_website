<div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <a href="edit_doctor.php" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <img src="assets/images/paws.png" alt="" height="24" />
                            <span class="d-inline h5 ml-1 text-logo">VetCare</span>
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/paws.png" alt="" height="24">
                        </span>

                        
                    </a>

                    <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                        
                        <li class="">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i data-feather="menu" class="menu-icon"></i>
                                <i data-feather="x" class="close-icon"></i>
                            </button>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                        
                       
                        <li class="d-none d-sm-block">
                            <div class="app-search">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Cauta">
                                        <span data-feather="search"></span>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="dropdown d-lg-block" data-toggle="tooltip" data-placement="left" title="Mergi pe Pagina Principala">
                            <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="globe"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="#" target="_blank" class="dropdown-item notify-item">
                                    <span class="align-middle">Viziteaza Pagina Principala</span>
                                </a>

                               
                            </div>
                        </li>


                        <li class="dropdown notification-list" data-toggle="tooltip" data-placement="left"
                            title="Notificari Necitite">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i data-feather="bell"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title border-bottom">
                                    <h5 class="m-0 font-size-16">
                                        <span class="float-right">
                                            <a href="" class="text-dark">
                                                <small>Sterge Tot</small>
                                            </a>
                                        </span>Notificare
                                    </h5>
                                </div>

                                <div class="slimscroll noti-scroll">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon bg-primary"><i class="uil uil-user-plus"></i></div>
                                        <p class="notify-details">Ultima Accesare<small class="text-muted">Acum 5 h</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Nicoleta Marisescu</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Cea mai buna clinica !</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Florin Stefanescu</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Recomand cu incredere !</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom active">
                                        <div class="notify-icon bg-success"><i class="uil uil-comment-message"></i> </div>
                                        <p class="notify-details">Daniela a comentat la unul din proiectele dvs .<small class="text-muted">Acum 30 de minute</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon bg-danger"><i class="uil uil-comment-message"></i></div>
                                        <p class="notify-details">Oana a dat like la unul din proiectele dvs. <small class="text-muted">Ieri</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="uil uil-heart"></i>
                                        </div>
                                        <p class="notify-details"> Andrei vi-a vizitat profilul .
                                            <b>Admin</b>
                                            <small class="text-muted">Acum 20h</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item notify-all border-top">
                                    Vedeti tot
                                    <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list"  title="Account Settings">
                            <a href="profile.php" class="nav-link right-bar-toggle">
                                <i data-feather="settings"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list align-self-center profile-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <div class="media user-profile ">
                                    <img src="assets/images/users/avatar-7.jpg" alt="user-image" class="rounded-circle align-self-center" />
                                    <div class="media-body text-left">
                                        <h6 class="pro-user-name ml-2 my-0">
                                            <span>Alina</span>
                                            <span class="pro-user-desc text-muted d-block mt-1">Administrator </span>
                                        </h6>
                                    </div>
                                    <span data-feather="chevron-down" class="ml-2 align-self-center"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu profile-dropdown-items dropdown-menu-right">
                                <a href="profile.php" class="dropdown-item notify-item">
                                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                    <span>Contul Meu</span>
                                </a>

                                <a href="profile.php" class="dropdown-item notify-item">
                                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                                    <span>Setari</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                    <span>Delogare</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>