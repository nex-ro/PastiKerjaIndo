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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
	<!-- <link href="<?= base_url('assets/login') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<style>
		.dropdown-toggle::after {
			display: inherit;
			width: 0;
			height: 0;
			margin-left: inherit;
			vertical-align: inherit;
			content: "";
			border: none;
		}
	</style>
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
						<li class="menu-active"><a href="<?= base_url() ?>">Home</a></li>
						<li><a href="<?= base_url('index.php/job') ?>">Job</a></li>
						<li><a href="<?= base_url('index.php/home/company') ?>">Company</a></li>
						<li><a href="<?= base_url('index.php/home/news') ?>">News</a></li>
						<li><a href="<?= base_url('index.php/home/about') ?>">About us</a></li>

						<?php
						if ($this->session->userdata('email')) { ?>

							<!-- Nav Item - Alerts -->
							<li class="nav-item dropdown no-arrow mx-1">
								<a style="display: flex;flex-direction: column; text-align: center;" class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="badge badge-danger badge-counter">3+</span>
									<i style="font-size: 20px;" class='bx bxs-bell'></i> <!-- Counter - Alerts -->
								</a>
								<!-- Dropdown - Alerts -->
								<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" style="border-radius: 10px;overflow: hidden;">
									<h6 class="dropdown-header" style="background-color: rgb(134, 108, 246); text-align: center; color: black; ">
										Notification
									</h6>
									<a class="dropdown-item d-flex align-items-center" href="#" style="color: black;">
										<div>
											<div class="small text-gray-500" style="margin: 0px;">07 January 2024</div>
											<span class="font-weight-bold">Welcome to Pasti Kerja Indonesia</span>
										</div>
									</a>
									
								</div>
							</li>



							<?php if (filter_var($this->session->userdata('profilePicture'), FILTER_VALIDATE_URL)) {
							?> <li class="menu-has-children"><a href=""><img src="<?= $this->session->userdata('profilePicture') ?>" alt="" style="width: 30px;border-radius: 50%; border: 2px solid white;"></a>
								<?php
							} else {
								?>
								<li class="menu-has-children"><a href=""><img src="<?= base_url('assets/img/') ?><?=$this->session->userdata('profilePicture') ?>" alt="" style="width: 30px;border-radius: 50%;border: 2px solid white;"></a>
								<?php
							} ?>

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