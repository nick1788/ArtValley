<?php $this->load->view('art_view/Layout/header'); ?>

<style>
	/* Blog Posts */
	.card-img-top {
		height: 250px;
		object-fit: cover;
	}

	.card-title {
		font-size: 1.5rem;
		font-weight: bold;
	}

	/* Sidebar */
	.card-header {
		background-color: #f8f9fa;
		font-weight: bold;
	}

	.side-bar-link:hover {
		color: black;
	} 
</style>

<!-- START SECTION TOP -->
<section id="section_home" class="section-top" style="background-image: url('assets/img/banner/updated-banner/blogs_banner_image.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 text-center">
				<div class="section-top-title">
					<h4>Latest Blog</h4>
					<!-- <h1>A blog is a type of website that contains regularly updated content</h1>
					<p>Blog posts can cover a wide range of topics and can be written by individuals or organizations. Some common types of blogs include personal blogs.</p> -->
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section>
<!-- END SECTION TOP -->


<!-- Blog Posts -->
<section id="posts" class="py-5 mt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if (!empty($services)) : ?>
					<?php foreach ($services as $service) : ?>
						<!-- Blog Post -->
						<div class="card mb-4" id="post<?php echo $service->id; ?>">
							<img src="<?php echo base_url('upload/blog_images/' . $service->Blog_Img); ?>" class="card-img-top" alt="Blog Image">
							<div class="card-body">
								<h5 class="card-title"><?php echo $service->Blog_title; ?></h5>
								<p class="card-text"><?php echo $service->Blog_main_content; ?></p>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?php echo $service->id; ?>">Read More</button>
							</div>
						</div>

						<!-- Modal for Blog Post -->
						<div class="modal fade" id="modal<?php echo $service->id; ?>" tabindex="-1" aria-labelledby="modalLabel<?php echo $service->id; ?>" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-fullscreen">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalLabel<?php echo $service->id; ?>"><?php echo $service->Blog_title; ?></h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="container-sm p-4 mt-4">
											<div class="row">
												<div class="col-md-6">
													<img src="<?php echo base_url('upload/blog_images/' . $service->Blog_Img); ?>" class="card-img-top" alt="Blog Image">
												</div>
												<div class="col-md-6">
													<p><?php echo $service->Blog_detail_content; ?></p>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>

					<?php endforeach; ?>
				<?php else : ?>
					<p>No blog posts available.</p>
				<?php endif; ?>
			</div>

			<!-- Sidebar -->
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="card-header">
						Recent Posts
					</div>
					<ul class="list-group list-group-flush">
						<?php if (!empty($services)) : ?>
							<?php foreach ($services as $service) : ?>
								<li class="list-group-item">
									<a class="side-bar-link" href="#post<?php echo $service->id; ?>"><?php echo $service->Blog_title; ?></a>
								</li>
							<?php endforeach; ?>
						<?php else : ?>
							<li class="list-group-item">No recent posts available.</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('art_view/Layout/Footer'); ?>