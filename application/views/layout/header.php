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
								<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
									<h6 class="dropdown-header">
										Alerts Center
									</h6>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div class="mr-3">
											<div class="icon-circle bg-primary">
												<i class="fas fa-file-alt text-white"></i>
											</div>
										</div>
										<div>
											<div class="small text-gray-500">December 12, 2019</div>
											<span class="font-weight-bold">A new monthly report is ready to download!</span>
										</div>
									</a>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div class="mr-3">
											<div class="icon-circle bg-success">
												<i class="fas fa-donate text-white"></i>
											</div>
										</div>
										<div>
											<div class="small text-gray-500">December 7, 2019</div>
											$290.29 has been deposited into your account!
										</div>
									</a>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div class="mr-3">
											<div class="icon-circle bg-warning">
												<i class="fas fa-exclamation-triangle text-white"></i>
											</div>
										</div>
										<div>
											<div class="small text-gray-500">December 2, 2019</div>
											Spending Alert: We've noticed unusually high spending for your account.
										</div>
									</a>
									<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
								</div>
							</li>

							<!-- Nav Item - Messages -->
							<li class="nav-item dropdown no-arrow mx-1">
								<a style="display: flex;flex-direction: column; text-align: center;" class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="badge badge-danger badge-counter">7</span>
									<i style="font-size: 20px" class='bx bx-message-rounded-dots'></i> <!-- Counter - Messages -->

								</a>
								<!-- Dropdown - Messages -->
								<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
									<h6 class="dropdown-header">
										Message Center
									</h6>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div class="dropdown-list-image mr-3">
											<img class="rounded-circle" src="<?= base_url('assets/login') ?>/img/undraw_profile_1.svg" alt="...">
											<div class="status-indicator bg-success"></div>
										</div>
										<div class="font-weight-bold">
											<div class="text-truncate">Hi there! I am wondering if you can help me with a
												problem I've been having.</div>
											<div class="small text-gray-500">Emily Fowler · 58m</div>
										</div>
									</a>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div class="dropdown-list-image mr-3">
											<img class="rounded-circle" src="<?= base_url('assets/login') ?>/img/undraw_profile_2.svg" alt="...">
											<div class="status-indicator"></div>
										</div>
										<div>
											<div class="text-truncate">I have the photos that you ordered last month, how
												would you like them sent to you?</div>
											<div class="small text-gray-500">Jae Chun · 1d</div>
										</div>
									</a>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div class="dropdown-list-image mr-3">
											<img class="rounded-circle" src="<?= base_url('assets/login') ?>/img/undraw_profile_3.svg" alt="...">
											<div class="status-indicator bg-warning"></div>
										</div>
										<div>
											<div class="text-truncate">Last month's report looks great, I am very happy with
												the progress so far, keep up the good work!</div>
											<div class="small text-gray-500">Morgan Alvarez · 2d</div>
										</div>
									</a>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div class="dropdown-list-image mr-3">
											<img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
											<div class="status-indicator bg-success"></div>
										</div>
										<div>
											<div class="text-truncate">Am I a good boy? The reason I ask is because someone
												told me that people say this to all dogs, even if they aren't good...</div>
											<div class="small text-gray-500">Chicken the Dog · 2w</div>
										</div>
									</a>
									<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
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