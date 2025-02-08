<?php

$this->load->view('art_view/Layout/header');

?>



<!-- START SECTION TOP -->
<section id="section_home" class="section-top"
	style="background-image: url(assets/img/banner/updated-banner/projects_banner_image.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 text-center">
				<div class="section-top-title">
					<h4>Meet Our Experts</h4>
					<!-- <h1>Hello! How can we assist you with our team?</h1>
					<p>Our team consists of talented individuals who bring diverse skills and expertise to our
						organization. Let me introduce you to each member.</p> -->
				</div>
			</div><!--- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->

<!-- ider Add karna hai -->

<?php if (!empty($project)) : ?>
	<section class="marketing_content_area section-padding proj_sec" style="margin-top: 0px;">
		<div class="container">
			<h1 class="text-center py-md-4">Our Projects</h1>
			<div class="row">
				<div class="col-md-12">
					<div class="marketing-title text-center">
						<!-- <h1>Our Latest Case Studies For Our Marketing Clients</h1> -->
					</div>
				</div><!-- END COL -->
			</div>
			<div class="row text-center">
				<?php foreach ($project as $service) : ?>
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="single_marketing">
							<a href="<?php echo base_url('upload/Project_files/' . $service->Project_pdf); ?>">
								<img src="<?php echo base_url('upload/Project_files/' . $service->project_img); ?>" class="img-fluid" alt="image" />
								<div class="single_marketing_inner">
									<h2><?php echo $service->project_title; ?></h2>
								</div>
							</a>
						</div>
					</div><!-- END COL -->
				<?php endforeach; ?>
			</div><!-- END ROW -->
		</div><!-- END CONTAINER -->
	</section>
<?php else : ?>
	<p>No data available.</p>
<?php endif; ?>

<?php

$this->load->view('art_view/Layout/Footer');

?>