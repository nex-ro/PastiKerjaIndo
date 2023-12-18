			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								NEWS
							</h1>
							<p class="text-white link-nav"><a href="<?= site_url() ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= site_url('home/news') ?>">News</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 post-list blog-post-list">
							<div class="single-post">
								<img class="img-fluid" src="<?= base_url('assets') ?>/img/blog/p4.jpg" alt="">
								<ul class="tags">
									<li><a href="#">Art, </a></li>
									<li><a href="#">Technology, </a></li>
									<li><a href="#">Fashion</a></li>
								</ul>
								<a href="blog-single.html">
									<h1>
										Cartridge Is Better Than Ever
										A Discount Toner
									</h1>
								</a>
								<p>
									MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
								</p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span> 4 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Existing HTML Code -->

<!-- Existing HTML Code -->

<!-- Start blog-posts Area -->
<section class="blog-posts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <!-- The following script dynamically populates the news container -->
                <div id="news-container"></div>
            </div>
        </div>
    </div>
</section>
<!-- End blog-posts Area -->

<script>
    const url = 'https://newsapi.org/v2/everything';
    const apiKey = '111b4d7f0ed546fd86d5c54526ed2add';
    const queryParams = {
        q: 'job',
        apiKey: apiKey,
    };
    const queryString = Object.entries(queryParams)
        .map(([key, value]) => `${key}=${encodeURIComponent(value)}`)
        .join('&');
    const fullURL = `${url}?${queryString}`;

    fetch(fullURL)
        .then(response => response.json())
        .then(data => {
            const newsContainer = document.getElementById('news-container');

            if (data.status === 'ok' && data.articles && data.articles.length > 0) {
                data.articles.forEach(article => {
                    const articleDiv = document.createElement('div');
                    articleDiv.classList.add('single-post');
                    const img = document.createElement('img');
                    img.classList.add('img-fluid');
                    img.src = article.urlToImage; // Set the image source from the API
                    img.alt = article.title;
                    const tags = document.createElement('ul');
                    tags.classList.add('tags');
                    if (article.tags && Array.isArray(article.tags)) {
                        article.tags.forEach(tag => {
                            const tagItem = document.createElement('li');
                            const tagLink = document.createElement('a');
                            tagLink.href = '#';
                            tagLink.textContent = tag;
                            tagItem.appendChild(tagLink);
                            tags.appendChild(tagItem);
                        });
                    }
                    const titleLink = document.createElement('a');
                    titleLink.href = article.url;
                    const title = document.createElement('h1');
                    title.textContent = article.title;
                    titleLink.appendChild(title);
                    const description = document.createElement('p');
                    description.textContent = article.description;
                    const publishedAt = document.createElement('p');
                    const publishedDate = new Date(article.publishedAt);
                    publishedAt.textContent = `Published at: ${publishedDate.toDateString()}`;
                    const bottomMeta = document.createElement('div');
                    bottomMeta.classList.add('bottom-meta');
                    const userDetails = document.createElement('div');
                    userDetails.classList.add('user-details', 'row', 'align-items-center');
                    const commentWrap = document.createElement('div');
                    commentWrap.classList.add('comment-wrap', 'col-lg-6');
                    const commentsList = document.createElement('ul');
                    const socialWrap = document.createElement('div');
                    socialWrap.classList.add('social-wrap', 'col-lg-6');
                    const socialIcons = document.createElement('ul');
                    commentWrap.appendChild(commentsList);
                    userDetails.appendChild(commentWrap);
                    userDetails.appendChild(socialWrap);
                    bottomMeta.appendChild(userDetails);
                    articleDiv.appendChild(img);
                    articleDiv.appendChild(tags);
                    articleDiv.appendChild(titleLink);
                    articleDiv.appendChild(description);
                    articleDiv.appendChild(publishedAt);
                    articleDiv.appendChild(bottomMeta);

                    newsContainer.appendChild(articleDiv);
                });
            } else {
                newsContainer.innerHTML = '<p>No articles found.</p>';
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
</script>

