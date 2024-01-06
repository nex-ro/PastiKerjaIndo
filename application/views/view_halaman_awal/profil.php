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
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

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
                        <li><a href="<?= base_url('index.php/job') ?>" style="color: #937cff;">Job Search</a></li>
                        <li><a href="<?= base_url('index.php/home/company') ?>" style="color: #937cff;">Company</a></li>
                        <li><a href="<?= base_url('index.php/home/news') ?>" style="color: #937cff;">News</a></li>
                        <li><a href="<?= base_url('index.php/home/about') ?>" style="color: #937cff;">About us</a></li>
                        <?php
                        if ($this->session->userdata('email')) { ?>
                            <li><a href="<?= base_url('index.php/home/buatlowongan') ?>" style="color: #937cff;">Buat Lowongan</a></li>
                            <?php if (null !== $this->session->userdata('profilePicture')) { ?>
                                <li class="menu-has-children"><a href=""><img src="<?= $this->session->userdata('profilePicture') ?>" alt="" style="width: 30px;border-radius: 50%;"></a>
                                <?php } else { ?>
                                <li class="menu-has-children"><a href=""><img src="<?= base_url('assets/img/') ?>pp.png" alt="" style="width: 30px;border-radius: 50%;"></a>
                                <?php } ?>
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
            <div class="captProfile" style="display: flex;flex-direction: row;">
                <!-- <img style="position: absolute; top: 0px; right: 50px; width: 200px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNDAiIGhlaWdodD0iMjgwIj48cGF0aCBmaWxsPSIjRTYwMjc4IiBkPSJNMTQ1LjgzNCAwaDE5NC40NDR2MTk0LjQ0NEMyMzIuODkgMTk0LjQ0NCAxNDUuODM0IDEwNy4zODkgMTQ1LjgzNCAwIi8+PC9zdmc+" alt=""> -->
                <div class="" style="margin: 10px;">
                    <?php if (null !== $this->session->userdata('profilePicture')) { ?>
                        <li class="menu-has-children"><a href=""><img src="<?= $this->session->userdata('profilePicture') ?>" alt="" style="width: 100px;border-radius: 50%; border: 2px solid white;"></a>
                        <?php } else { ?>
                        <li class="menu-has-children"><a href=""><img src="<?= base_url('assets/img/') ?>pp.png" alt="" style="width: 100px;border-radius: 50%;border: 2px solid white;"></a>
                        <?php } ?>
                </div>
                <div class="">
                    <h4 style="margin-top: 20px; color: white; font-size: 30px;"><?= $personalInfo['nama'] ?></h4>
                    <div style=" margin-bottom: 10px;">
                        <div class="" style="display: flex;flex-direction: row;">
                            <p style="margin: 0px; color: white; font-size: 15px;padding-right: 10px;"><i class='bx bx-current-location'></i></p>
                            <p style="color: white;font-size: 15px;margin: 0px;"><?= $personalInfo['lokasi'] ?></p>
                        </div>
                        <div class="" style="display: flex;flex-direction: row;margin: 0px;">
                            <p style="margin: 0px;color: white; font-size: 15px; padding-right: 10px;"><i class='bx bx-envelope'></i></p>
                            <p style="color: white;  font-size: 15px;margin: 0px;"><?= $personalInfo['email'] ?></p>
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
                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Personal Information</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="<?= site_url("home/UpdatePersonalInfo") ?>">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Profil Picture </label>
                                            <br>
                                            <input type="file" name="profilePicture">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full Name</label>
                                            <input type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" placeholder="Full Name" value="<?= $personalInfo['nama'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Location Address</label>
                                            <input type="text" name="lokasi" class="form-control form-control-user" id="exampleInputEmail" placeholder="Location Address" value="<?= $personalInfo['lokasi'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="number" name="noHp" class="form-control form-control-user" id="exampleInputEmail" placeholder="Phone Number" value="<?= $personalInfo['noHp'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email Address</label>
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" disabled value="<?= $personalInfo['email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="id_user" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" hidden value="<?= $personalInfo['id_user'] ?>">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <button href="?page=mhs&method=edit" type="button" class="btn btn-outline-light">
                        <i class='bx bx-share-alt'></i> Share</button>
                </div>
            </div>
        </div>
        <div class="Summary" style="padding-left:10px;padding-top: 20px; padding-bottom: 20px;">
            <p style="font-size: 30px;font-weight: bold;">Personal Summary</p>
            <p style="color: black; opacity: 0.7; font-size: 15px;">Add a personal summary to your profile as a way to introduce who you are.</p>
            <?php if ("" == $personalInfo['desc']) { ?>
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#Summary">
                    <i class='bx bx-pencil'></i> Add summary
                </button>
            <?php } else { ?>
                <button type="button" style="padding: 20px;border-radius: 10px;" class="btn btn-outline-info" data-toggle="modal" data-target="#Summary">
                    <?= $personalInfo['desc'] ?><i class='bx bx-pencil'></i>
                </button>
            <?php } ?>

            <div class="modal fade" id="Summary" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add personal summary</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url("home/UpdateDesc") ?>" method="post">

                            <div class="modal-body">
                                <p style="font-size: 30px; font-weight: bold;">Summary</p>
                                <p style="font-size: 15px;">Highlight your unique experiences, ambitions and strengths.</p>
                                <textarea name="desc" id="" cols="30" rows="10" style="width: 100%;"><?= $personalInfo['desc'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="number" name="id_user" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" hidden value="<?= $personalInfo['id_user'] ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="Summary" style="padding-left:10px;padding-top: 20px;padding-bottom:20px;">
            <p style="font-size: 30px;font-weight: bold;">Carrier History</p>
            <p style="color: black; opacity: 0.7; font-size: 15px;">The more you let employers know about your experience, the more you can stand out.</p>
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#Carrier">
                <i class='bx bx-pencil'></i> Add Carrier
            </button>

            <div class="modal fade" id="Carrier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Carrier</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url("home/UpdateEducation") ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Job Title</label>
                                    <input required type="Text" name="job" class="form-control form-control-user" id="exampleInputEmail" placeholder="Job Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company</label>
                                    <input required type="Text" name="company" class="form-control form-control-user" id="exampleInputEmail" placeholder="Company">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">How long</label>
                                    <select name="durasi" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                        <option selected disabled></option>
                                        <option value="1-3 month">1-3 month</option>
                                        <option value="4-6 month">4-6 month</option>
                                        <option value="6-12 month">6-12 month</option>
                                        <option value="2 years">2 years</option>
                                        <option value="more than 3 years">>3 years</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea name="desc" id="" cols="30" rows="10" style="width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="id_user" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" hidden value="<?= $personalInfo['id_user'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number" name="id_user" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" hidden value="<?= $personalInfo['id_user'] ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="Education" style="padding-left:10px;padding-top: 20px;padding-bottom:20px;">
            <p style="font-size: 30px;font-weight: bold;">Education</p>
            <p style="color: black; opacity: 0.7; font-size: 15px;">Tell employers about your education.</p>
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