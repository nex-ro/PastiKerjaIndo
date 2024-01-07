<div class="bg" style="background-image: -webkit-linear-gradient(0deg, #bfacff 0%, #795fff 100%);padding: 20px;padding-top: 50px;">
	<div class="banner-content col-lg-12" style="margin-top: 0;">
		<form action="<?= base_url('index.php/home/searchjob') ?>" method="POST" novalidate>
			<div class="row justify-content-center form-wrap">
				<div class="col-lg-4 form-cols">
					<input type="text" class="form-control" name="cari" value="" placeholder="what are you looging for?">
				</div>
				<div class="col-lg-3 form-cols">
					<div class="default-select" id="default-selects">
						<select name=" lokasi">
							<option selected value="">pilih area</option>
							<?php
							foreach ($lokasi as $row) {
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
							<option value="Wirausaha">Wirausaha</option>
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
<?php if ($this->session->flashdata('message')) : ?>
	<script>
		const Toast = Swal.mixin({
			toast: true,
			position: "top-end",
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.onmouseenter = Swal.stopTimer;
				toast.onmouseleave = Swal.resumeTimer;
			}
		});
		Toast.fire({
			icon: "success",
			title: "Signed in successfully"
		});
	</script>
<?php endif; ?>
<section class="post-area section-gap">
	<div class="container">
		<div class="row justify-content-center d-flex">
			<div class="col-lg-8 post-list">
				<ul class="cat-list">
					<li><a href="<?= base_url('index.php/home/searchjobtype?type=Fulltime') ?>">Full Time</a></li>
					<li><a href="<?= base_url('index.php/home/searchjobtype?type=Intern') ?>">Intern</a></li>
					<li><a href="<?= base_url('index.php/home/searchjobtype?type=Part time') ?>">Part Time</a></li>
				</ul>

				<?php

				foreach ($lowongan as $row) {
					$datalowongan = $this->db->get_where('lowongan', array('id_lowongan' => $row->id_lowongan))->row_array();
					$dataPemberi = $this->db->get_where('user', array('id_user' => $datalowongan['id_user']))->row_array();
				?>
					<div class="single-post d-flex flex-row">
						<div class="thumb" style="margin-right: 20px;">
							<img src="<?= base_url('assets/img/') ?><?= $dataPemberi['profilePicture'] ?>" alt="Company Picture" style="width: 100px; bor">

						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.html">
										<h4><?php echo $row->lowongan ?></h4>
									</a>
									<h6><?php echo $row->lokasi ?></h6>
								</div>


							</div>

							<h5>Type : <?php echo $row->type ?></h5>
							<p class="address"><span class="lnr lnr-map"></span> Syarat : <?php echo $row->requirement ?></p>
							<p class="address"><span class="lnr lnr-database"></span><?php echo $row->salary ?> </p>
						</div>
						<div class="">
							<ul class="btns">
								<li><a href="#"> <?php echo $row->kategori ?></a></li>
								<li data-toggle="modal" data-target="#applyModal_<?php echo $row->id_lowongan; ?>"><a href="#">Apply</a></li>
							</ul>
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
							<li><a class="justify-content-between d-flex" href="<?= base_url('index.php/home/searchjoblokasi?lokasi=' . $row->lokasi) ?>">
									<?php echo $row->lokasi ?>
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
									<li><a class="justify-content-between d-flex" href="<?= base_url('index.php/home/searchjobkategori?kategori=' . $row->kategori) ?>">
											<?php echo $row->kategori ?>
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

<!-- Start post Area -->
<section class="post-area section-gap">
	<div class="container">
		<div class="row justify-content-center d-flex">


			<div class="col-lg-4 sidebar">
			</div>
		</div>
	</div>
	<?php foreach ($lowongan as $row) : ?>
		<div class="modal fade" id="applyModal_<?php echo $row->id_lowongan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('index.php/home/apply/' . $row->id_lowongan); ?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">
							<label for="cv">Upload CV:</label>
							<input type="file" name="cv" accept=".pdf, .doc, .docx">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</section>