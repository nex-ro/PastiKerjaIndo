
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							<h1 class="text-white">
								<span>1500+</span> Jobs posted last week				
							</h1>	
							<form action="<?=base_url('index.php/home/searchjob')?>" method="POST" novalidate>
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" name="cari" value="" placeholder="what are you looging for?">
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects"">
											<select name="lokasi">
												<option  selected value="">pilih area</option>
												<?php
    												foreach ($lowongan as $row) {
														?>
														<option value="<?php echo $row->lokasi; ?>">
															<?php echo $row->lokasi ?>
														</option>
														<?php
													}
											
?>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2">
										<select name="kategori">
												<option value="">All Category</option>
												<option value="Bidang Teknologi">Bidang Teknologi</option>
												<option value="Bidang Pendidikan">Bidang Pendidikan</option>
												<option value="Bidang Hukum">Bidang Hukum</option>
												<option value="Bidang Ekonomi">Bidang Ekonomi</option>
												<option value="Bidang Seni Sastra">Bidang Seni Sastra </option>
												<option value="Bidang Teknik dan Industry ">Bidang Teknik dan Industry </option>
												<option value="Bidang Kesehatan">Bidang Kesehatan</option>
												<option value="Bidang Kesehatan">Wirausaha</option>
											</select>
										</div>										
									</div>
									<div class="col-lg-2 form-cols ">
									    <button type="submit" class="btn btn-info">
									      <span class="lnr lnr-magnifier"></span> Search
									    </button>
									</div>								
								</div>
							</form>	
							<p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start features Area -->
			<section class="features-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Searching</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Applying</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Security</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Notifications</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing.
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End features Area -->
			<!-- Start popular-post Area -->
<section class="popular-post-area pt-100">
				<div class="container">
					<div class="row align-items-center">
						<div class="active-popular-post-carusel">
							<div class="single-popular-post d-flex flex-row">
								<div class="thumb">
									<img class="img-fluid" src="<?=base_url('assets')?>/img/p1.png" alt="">
									<a class="btns text-uppercase" href="#">view job post</a>
								</div>
								<div class="details">
									<a href="#"><h4>Creative Designer</h4></a>
									<h6>Los Angeles</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
									</p>
								</div>
							</div>	
							<div class="single-popular-post d-flex flex-row">
								<div class="thumb">
									<img src="<?=base_url('assets')?>/img/p2.png" alt="">
									<a class="btns text-uppercase" href="#">view job post</a>
								</div>
								<div class="details">
									<a href="#"><h4>Creative Designer</h4></a>
									<h6>Los Angeles</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
									</p>
								</div>
							</div>
							<div class="single-popular-post d-flex flex-row">
								<div class="thumb">
									<img src="<?=base_url('assets')?>/img/p1.png" alt="">
									<a class="btns text-uppercase" href="#">view job post</a>
								</div>
								<div class="details">
									<a href="#"><h4>Creative Designer</h4></a>
									<h6>Los Angeles</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
									</p>
								</div>
							</div>	
							<div class="single-popular-post d-flex flex-row">
								<div class="thumb">
									<img src="<?=base_url('assets')?>/img/p2.png" alt="">
									<a class="btns text-uppercase" href="#">view job post</a>
								</div>
								<div class="details">
									<a href="#"><h4>Creative Designer</h4></a>
									<h6>Los Angeles</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
									</p>
								</div>
							</div>	
							<div class="single-popular-post d-flex flex-row">
								<div class="thumb">
									<img src="<?=base_url('assets')?>/img/p1.png" alt="">
									<a class="btns text-uppercase" href="#">view job post</a>
								</div>
								<div class="details">
									<a href="#"><h4>Creative Designer</h4></a>
									<h6>Los Angeles</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
									</p>
								</div>
							</div>	
							<div class="single-popular-post d-flex flex-row">
								<div class="thumb">
									<img src="<?=base_url('assets')?>/img/p2.png" alt="">
									<a class="btns text-uppercase" href="#">view job post</a>
								</div>
								<div class="details">
									<a href="#"><h4>Creative Designer</h4></a>
									<h6>Los Angeles</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
									</p>
								</div>
							</div>																																							
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-post Area -->
			
			<!-- Start feature-cat Area -->
			<section class="feature-cat-area pt-100" id="category" style="padding-bottom: 50px;">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Featured Job Categories</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="<?=base_url('assets')?>/img/o1.png" alt="">
								</a>
								<p>Accounting</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="<?=base_url('assets')?>/img/o2.png" alt="">
								</a>
								<p>Development</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="<?=base_url('assets')?>/img/o3.png" alt="">
								</a>
								<p>Technology</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="<?=base_url('assets')?>/img/o4.png" alt="">
								</a>
								<p>Media & News</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="<?=base_url('assets')?>/img/o5.png" alt="">
								</a>
								<p>Medical</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="<?=base_url('assets')?>/img/o6.png" alt="">
								</a>
								<p>Goverment</p>
							</div>			
						</div>																											
					</div>
				</div>	
			</section>
			<!-- End feature-cat Area -->
			

			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<a class="primary-btn" href="#">I am a Candidate</a>
								<a class="primary-btn" href="#">Request Free Demo</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			<!-- Start download Area -->
			<section class="download-area section-gap" id="app">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 download-left">
							<img class="img-fluid" src="<?=base_url('assets')?>/img/d1.png" alt="">
						</div>
						<div class="col-lg-6 download-right">
							<h1>Download the <br>
							Job Listing App Today!</h1>
							<p class="subs">
								It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
							</p>
							<div class="d-flex flex-row">
								<div class="buttons">
									<i class="fa fa-apple" aria-hidden="true"></i>
									<div class="desc">
										<a href="#">
											<p>
												<span>Available</span> <br>
												on App Store
											</p>
										</a>
									</div>
								</div>
								<div class="buttons">
									<i class="fa fa-android" aria-hidden="true"></i>
									<div class="desc">
										<a href="#">
											<p>
												<span>Available</span> <br>
												on Play Store
											</p>
										</a>
									</div>
								</div>									
							</div>						
						</div>
					</div>
				</div>	
			</section>
			<!-- End download Area -->
		


