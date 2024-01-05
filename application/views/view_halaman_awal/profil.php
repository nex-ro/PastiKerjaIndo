<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Pasti Kerja Indonesia</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/') ?>icon.png" style="border-radius: 50%;">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="<?= base_url('assets/css/linearicons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <!-- <a href="index.html"><img src="<?= base_url('assets/img/') ?>iconPng.png" style="width: 80px; z-index: 99;" alt="" title="" /></a> -->
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="<?= base_url() ?>" style="color: #937cff;">Home</a></li>
                        <li><a href="<?= base_url('index.php/job') ?>" style="color: black;">Job Search</a></li>
                        <li><a href="<?= base_url('index.php/home/company') ?>" style="color: black;">Company</a></li>
                        <li><a href="<?= base_url('index.php/home/news') ?>" style="color: black;">News</a></li>
                        <li><a href="<?= base_url('index.php/home/about') ?>" style="color: black;">About us</a></li>

                        <?php if ($this->session->userdata('email')) { ?>
                            <li><a href="<?= base_url('index.php/home/buatlowongan') ?>">Buat Lowongan</a></li>
                            <li class="menu-has-children"><a href=""><img src="<?= base_url('assets/img/') ?>pp.png" alt="" style="width: 30px;border-radius: 50%;"></a>
                                <ul>
                                    <li><a href="<?= site_url('home/profil') ?>">Profil</a></li>
                                    <li><a href="<?= site_url('auth/Auth/logout') ?>" style="color: red;">Logout</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li><a class="ticker-btn" href="<?= site_url('login'); ?>">Login</a></li>
                        <?php } ?>


                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
    <div class="container">
        <div class="headProfile  d-flex flex-row animate__animated  animate__fadeIn  align-items-center mb-3" style="background-color:  #937cff; border-radius: 30px; padding: 50px; overflow: hidden; margin-top: 60px;">
            <img src="" style="border-radius: 50%; margin-right: 20px;">
            <div class="captProfile">
                <!-- <img style="position: absolute; top: 0px; right: 50px; width: 200px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNDAiIGhlaWdodD0iMjgwIj48cGF0aCBmaWxsPSIjRTYwMjc4IiBkPSJNMTQ1LjgzNCAwaDE5NC40NDR2MTk0LjQ0NEMyMzIuODkgMTk0LjQ0NCAxNDUuODM0IDEwNy4zODkgMTQ1LjgzNCAwIi8+PC9zdmc+" alt=""> -->
                <h4 style="margin: 0px; color: white; font-size: 30px;">Deri</h4>
                <div style="margin-top: 10px; margin-bottom: 10px;">
                    <div class="" style="display: flex;flex-direction: row;">
                        <p style="margin: 0px; color: white; font-size: 15px;padding-right: 10px;"><i class='bx bx-current-location'></i></p>
                        <p style="color: white;font-size: 15px;margin: 0px;">Pekanbaru</p>
                    </div>
                    <div class="" style="display: flex;flex-direction: row;margin: 0px;">
                        <p style="margin: 0px;color: white; font-size: 15px; padding-right: 10px;"><i class='bx bx-envelope'></i></p>
                        <p style="color: white;  font-size: 15px;margin: 0px;">Deri22ti@mahasiswa.pcr.ac.id</p>
                    </div>
                </div>


                <button style="margin-right: 10px;" type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class='bx bx-pencil'></i> Edit
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                                    </div>
                                </div>

                                <label for="basic-url">Your vanity URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">With textarea</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button href="?page=mhs&method=edit" type="button" class="btn btn-outline-light"><i class='bx bx-pencil'></i> Share</button>
            </div>
        </div>
        <div class="Summary" style="padding-left:10px;padding-top: 20px;">
            <p style="font-size: 30px;">Personal Summary</p>
            <p style="color: black; opacity: 0.7; font-size: 15px;">Deri22ti@mahasiswa.pcr.ac.id</p>
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#Summary">
                <i class='bx bx-pencil'></i> Edit
            </button>

            <div class="modal fade" id="Summary" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="Summary" style="padding-left:10px;padding-top: 20px;">
            <p style="font-size: 30px;">Carrier History</p>
            <p style="color: black; opacity: 0.7; font-size: 15px;">Deri22ti@mahasiswa.pcr.ac.id</p>
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#Carrier">
                <i class='bx bx-pencil'></i> Edit
            </button>

            <div class="modal fade" id="Carrier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="Education" style="padding-left:10px;padding-top: 20px;">
            <p style="font-size: 30px;">Education</p>
            <p style="color: black; opacity: 0.7; font-size: 15px;">Deri22ti@mahasiswa.pcr.ac.id</p>
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#Education">
                <i class='bx bx-pencil'></i> Edit
            </button>

            <div class="modal fade" id="Education" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- <div class="bottomProfile w-100 animate__animated  animate__fadeIn" style="background-color: white; padding: 40px; border-radius: 30px;">
        <div class="textProfil d-flex flex-row justify-content-between">
            <h5>Detail Profil</h5>
            
            </a>
        </div>
    </div> -->