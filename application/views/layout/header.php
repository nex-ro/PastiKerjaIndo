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
						<li class="menu-active"><a href="<?= base_url() ?>">Home</a></li>
						<li><a href="<?= base_url('index.php/job') ?>">Job Search</a></li>
						<li><a href="<?= base_url('index.php/home/company') ?>">Company</a></li>
						<li><a href="<?= base_url('index.php/home/news') ?>">News</a></li>
						<li><a href="<?= base_url('index.php/home/about') ?>">About us</a></li>

						<?php if ($this->session->userdata('email')) { ?>
							<li><a href="<?= base_url('index.php/home/buatlowongan') ?>">Buat Lowongan</a></li>
							<li class="menu-has-children"><a href=""><img src="<?= base_url('assets/img/') ?>pp.png" alt="" style="width: 30px;border-radius: 50%;"></a>
							<ul>
								<li><a href="<?= site_url('home/profil')?>">Profil</a></li>
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