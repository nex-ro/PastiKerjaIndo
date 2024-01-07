
			
			<!-- start banner Area -->
			<section class="relative" id="home" style="background-image: url('https://cpp-prod-js-web-assets.s3.amazonaws.com/2716/13581e058bed7b9c3b53.jpg');">
			
			<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Company
							</h1>
							<p class="text-white link-nav"><a href="<?= site_url() ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= site_url('home/news') ?>">News</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<section class="submit-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="<?= base_url('index.php/home/searchprofilecompany') ?>" method="POST" novalidate>
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" value="" placeholder="What are you looking for?">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            $bts = 0;
            foreach ($company as $row) {
                if ($bts % 2 == 0) {
                    echo '</div><div class="row">';
                }
            ?>
                <div class="col-lg-6">
                    <div class="submit-left" style="margin-top: 10px;">
                        <img src="" alt="">
                        <h4><?php echo $row->nama; ?></h4>
                        <p style="margin: 0px;">
                            <?php echo $row->desc; ?>
                            Rating: <?php echo $row->lokasi; ?>
                        </p>
                        <a href="<?= base_url('index.php/home/searchjobcompany?id=' . $row->id_user) ?>" class="primary-btn header-btn">Apply now</a>
                    </div>
                </div>
            <?php
                $bts++;
            }
            ?>
        </div>
        <div class="row justify-content-center mt-3">
            <button type="button" class="btn btn-primary">See More</button>
        </div>
    </div>
</section>
			