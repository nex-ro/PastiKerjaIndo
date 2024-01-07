<div class="bg" style="background-image: -webkit-linear-gradient(0deg, #bfacff 0%, #795fff 100%);padding: 20px;padding-top: 50px;">
	<div class="banner-content col-lg-12" style="margin-top: 0;">
		<form action="<?= base_url('index.php/home/searchjob') ?>" method="POST" novalidate>
			<div class="row justify-content-center form-wrap">
				<div class="col-lg-4 form-cols">
					<input type="text" class="form-control" name="cari" value="" placeholder="what are you looging for?">
				</div>
				<div class="col-lg-3 form-cols">
					<div class="default-select" id="default-selects"">
											<select name=" lokasi">
						<option selected value="">pilih area</option>
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
	</div>
</div>
<!-- Start post Area -->
<section class="post-area section-gap">
	<div class="container">
		<div class="row justify-content-center d-flex">
			<div class="col-lg-8 post-list">
				<ul class="cat-list">
					<li><a href="#">Full Time</a></li>
					<li><a href="#">Intern</a></li>
					<li><a href="#">part Time</a></li>
				</ul>

				<?php

				foreach ($lowongan as $row) {
				?>
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="<?= base_url('assets/profilepicture') ?>" alt="Profile Picture">

						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.html">
										<h4><?php echo $row->lowongan ?></h4>
									</a>
									<h6><?php echo $row->lokasi ?></h6>
								</div>
								<ul class="btns">

									<li><a href="#"> <?php echo $row->kategori ?></a></li>
									<li><a href="#">Apply</a></li>
								</ul>
							</div>

							<h5>Type : <?php echo $row->type ?></h5>
							<p class="address"><span class="lnr lnr-map"></span> Syarat : <?php echo $row->requirement ?></p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
						</div>
					</div>


				<?php

				}

				?>

				<a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

			</div>
			<div class="col-lg-4 sidebar">
				<div class="single-slidebar">
					<h4>Jobs by Location</h4>
					<ul class="cat-list">
						<?php
						foreach ($lokasi as $row) {
						?>
							<li><a class="justify-content-between d-flex" href="category.html">
									<p><?php echo $row->lokasi ?></p>
								</a></li>
						<?php
						}
						?>

				<div class="single-slidebar">
					<h4>Jobs by Category</h4>
					<ul class="cat-list">
					<?php
						foreach ($kategori as $row) {
						?>
								<li><a class="justify-content-between d-flex" href="#">
									<p><?php echo $row->kategori ?></p>
								</a></li>
						<?php
						}
						?>
					
					</ul>
				</div>



			</div>
		</div>
	</div>
</section>
<!-- End post Area -->