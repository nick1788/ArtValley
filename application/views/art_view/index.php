<?php

$this->load->view('art_view/Layout/header');

?>



<!-- START HOME -->
<section id="home" class="home_bg"
	style="background-image: url('assets/img/service-icon/52408381_xl-scaled.png');  background-size:cover; background-position: center center;">
	<div class="container" style=" margin-left: 0px;">
		<div class="row">
			<div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 ">
				<div class="about_me_content" data-aos="fade-up">
					<h1>Digital Marketing for Your Business</h1>
					<p>Start your business with a beautiful website.</p>
					<p>
						Get your print or digital projects ready for publishing with ArtValley Creations.
						We create eye-catching banners, billboards, brochures, business cards, catalogues, flyers,
						vector artwork, T-shirts, merchandise, and more.
					</p>
				</div>

				<div class="home_btn">
					<a href="<?php echo base_url() ?>Contact" class="home_one nan-btns1">Get started</a>
				</div>
			</div><!-- END COL-->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END  HOME -->


<!-- details -->
<div id="details" data-aos="fade-down">
	
	<div class="row">
		<div class="col-lg-6 col-sm-12 col-xs-12">
			<ul class="div-text">
				<div class="main" style="/*margin-bottom: 20px;*/">
					<h2 style="font-weight: bolder;padding: 10px;">Save Your Time and Money with Our Executive Assistant Service</h2>
					<p style="padding: 5px;">
					Outsourcing an executive assistant offers various benefits and advantages to your business. 
					Here are some reasons why admin outsourcing might be the best decision for your business.
					</p>
				</div>
				<li>
					<span style="font-weight: 900;">
					Experience and Expertise
					</span>
					<p style="padding-left: 20px;padding-right:20px;">
					An outsourced executive assistant is a highly trained and skilled professional. They have experience 
					handling a variety of tasks and possess the expertise needed to support executives and business owners effectively. 
					By outsourcing, you gain access to a larger pool of talent, allowing you to work with top-performing 
					executive assistants who can add value to your business.
					</p>
				</li>
				<li>
					<span style="font-weight: 900;">
					Time-Saving
					</span>
					<p style="padding-left: 20px;padding-right:20px;">
					By outsourcing administrative tasks, you free up your schedule to focus on high-value activities 
					that grow your business. An executive assistant can handle tasks such as email management, scheduling, 
					research, and travel arrangements, allowing you to concentrate on key areas of your company.
					</p>
				</li>
			</ul>
		</div>
		<div class="col-lg-6 col-sm-12 col-xs-12">
			<div class="img-details" style="margin-top:-20px;">
				<img src="<?php echo base_url('assets/img/assistant-img.jpg') ?>" style="border-radius: 12px;" alt="Assistant Image">
			</div>
		</div>
		</div>
	
</div>

<!--START SERVICE -->
<div id="service" class="best-service section-padding" data-aos="fade-down">
	<div class="container">
		<div class="row">
			<div>
				<div class="service-title text-center">
					<h2 class="text-center">Our Services</h2>
				</div>
			</div><!--END COL -->
		</div>
		<?php if (!empty($services)): ?>
			<div class="row text-center">
				<?php
				$serviceCount = 0;
				foreach ($services as $service):
					if ($serviceCount >= 6)
						break; // Limit to 6 services
					$serviceCount++;
					?>
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="single_service ss_one">
							<a href="<?php echo base_url() ?>Service">
								<img src="<?php echo base_url('upload/Service_image/' . $service->service_img); ?>"
									class="Project_image_admin" alt="<?php echo $service->service_title; ?>"
									title="<?php echo $service->service_title; ?>" />
							</a>
							<div class="title_overlay"><?php echo $service->service_title; ?></div>
						</div>
					</div><!--END COL -->
				<?php endforeach; ?>
			</div><!--END ROW -->

			<?php if (count($services) > 6): ?>
				<div class="row text-center">
					<div class="col-12">
						<a href="<?php echo base_url('Service'); ?>" class="btn btn-primary mt-3">Know More</a>
					</div>
				</div>
			<?php endif; ?>

		<?php else: ?>
			<p>No data available.</p>
		<?php endif; ?>
	</div><!--END CONTAINER -->
</div>

<!--END SERVICE -->


<!-- START Email suppport
<section data-aos="fade-down" class="customer_success_area" >-->
<div id="email" data-aos="fade-down" class="customer_success_area">
	<div  style="margin-left: 0px; margin-right: 0px;">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12" style="height:100%;">
				<div class="div-email" style="margin-top:-20px;margin-left:20px;padding-right: 12px;margin-right: 20px;"> 
					<div class="single_success">
						<h1>
						Explore our email Support Services</h1>
						<p style="padding-right:15px;">
						Outsourcing email support services today meets the needs and expectations 
						of your customers. Pure Moderation offers the following benefits:
						</p>
						<ul class="explore-service">
							<li>Faster Email Response Times</li>
							<li>Increased Customer Satisfaction Levels</li>
							<li>Enhanced Reliability: Strengthen your customer support services with our high-quality email
							support team.</li>
							<li>Elimination of Email Backlogs: Enjoy quick turnaround times, ultimately boosting your
							customer retention rates.</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<div class="img-details">
					<img src="<?php echo base_url('assets/img/Shorlisted.jpeg') ?>" style="border-radius: 12px;" alt="" />
				</div>
			</div><!-- END COL-->
		</div><!--</div>- END ROW -->
	</div><!--- END CONTAINER -->
</div>
<!--</section>
 END  Email support -->


<!-- PROJECTS START -->
<section data-aos="fade-down" class="marketing_content_area section-padding" style="padding-top: 0px;" >
	<?php if (!empty($project)): ?>
		<section class="marketing_content_area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
						<div class="marketing-title">
							<h1>Our Latest Project</h1>
						</div>
					</div><!-- END COL -->
				</div>
				<div class="row text-center">
					<?php
					$allowed_titles = ["Elementary", "Retail", "Healthcare"];
					$count = 0; // Initialize a counter
				
					foreach ($project as $service):
						if (in_array($service->project_title, $allowed_titles) && $count < 3): // Check if the project title is in the allowed list and limit to 3
							$count++; // Increment the counter
							?>
							<div class="col-lg-4 col-sm-6 col-xs-12">
								<div class="single_marketing">
									<a href="<?php echo base_url() ?>Project">
										<img src="<?php echo base_url('upload/Project_files/' . $service->project_img); ?>"
											class="img-fluid" alt="image" />
									</a>
									<a href="<?php echo base_url('upload/Project_files/' . $service->Project_pdf); ?>"
										target="_blank">
										<div class="single_marketing_inner">
											<h2><?php echo $service->project_title; ?></h2>
										</div>
									</a>
								</div>
							</div><!-- END COL -->
							<?php
						endif;
					endforeach;
					?>

				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
	<?php else: ?>
		<p>No data available.</p>
	<?php endif; ?>
</section>
<!-- PROJECTS END -->



<!-- purchase -->
<h1 data-aos="fade-down" class="plan-title">Select Your Plans</h1>
<div data-aos="fade-down" class="promo_one " style="margin: 0; width: 100%;">
	<div id="purchase-group" class="container">
		<div class="row">
			<!-- First Card -->
			<div class="col-lg-4 col-md-6 mb-4 price_ccard">
				<div class="card-custom">
					<div class="cc circle-top">✓</div>
					<h5 class="mt-4">VECTOR ART</h5>
					<h2 style="color: aqua;">
						<sup style="color: black;">$</sup>1
						<sub style="color: black;">/ unit</sub>
					</h2>
					<p>Create your personalized Vector art with our professional services</p>
					<a href="<?php echo base_url() ?>Contact">
						<button class="btn btn-gradient">PURCHASE NOW</button>
					</a>
				</div>
			</div>
			<!-- Second Card -->
			<div class="col-lg-4 col-md-6 mb-4 price_ccard">
				<div class="card-custom">
					<div class="circle-top">✓</div>
					<h5 class="mt-4">GET SQL/ANGULAR OR JAVA DEVELOPER</h5>
					<h2 style="color: aqua;">
						<sup style="color: black;">$</sup>15
						<sub style="color: black;">/ Per hour</sub>
					</h2>
					<p>Get well-trained and experienced resources to take your business to the next level</p>
					<a href="<?php echo base_url() ?>Contact">
						<button class="btn btn-gradient">PURCHASE NOW</button>
					</a>
				</div>
			</div>
			<!-- Third Card -->
			<div class="col-lg-4 col-md-6 mb-4 price_ccard">
				<div class="card-custom">
					<div class="circle-top">✓</div>
					<h5 class="mt-4">Get Executive Assistance</h5>
					<h2 style="color: aqua;">
						<sup style="color: black;">$</sup>900
						<sub style="color: black;">/Month</sub>
					</h2>
					<p>Get professional Executive Assistance for your business</p>
					<a href="<?php echo base_url() ?>Contact">
						<button class="btn btn-gradient">PURCHASE NOW</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- purchase  End-->

<!-- START TESTIMONIALS -->
<section data-aos="fade-down" class="testimonials_area section-padding" style="background-color:#00283C;">
	<div class="container">
		<div class="section-title text-center">
			<h4 class="section-title-white">Testimonials</h4>
			<h1 class="section-title-white">Best Reviews</h1>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<!-- Owl Carousel -->
				<!-- <div id="testimonial-slider" class="owl-carousel">
					<div class="testimonial">
						<div class="testimonial_content">
							<p>I am writing to recommend the services of Artvalley Creation who have been helping us
								with Order Management services for our business. Their attention to detail have
								aided in keeping up with the new order processing specifically post-pandemic times.
								Artvalley Creation Team is very professional in what they do, easy to work with, and
								always willing to take the time to discuss and optimize. I feel confident in
								recommending Artvalley creation.</p>
						</div>
						<div class="testi_pic_title">
							<small class="post">- Web Developer</small>
						</div>
					</div>
					<div class="testimonial">
						<div class="testimonial_content">
							<p>Artvalley services is excellent, impressive, and very professional. They have a
								superb team to execute tasks assigned. We expect this relationship to grow much more
								with the years ahead as we expand our global presence using the full depth and
								breadth of Graphic design domain. We highly recommend Art valley Creations to any
								Corporate institution. We are very Pleased with them.
							</p>
						</div>
						<div class="testi_pic_title"
							style="display: flex;justify-content: center; align-items: center; flex-direction: column;">
							<h4>CEO of Digital Marketing Company - Florida USA</h4>
						</div>
					</div>
				</div> -->

				<div id="testimonial-slider" class="owl-carousel">
					<div class="testimonial">
						<div class="testimonial_content">
							<p>I am writing to recommend the services of <span>Artvalley</span> Creation who have been
								helping us
								with Order Management services for our business. Their attention to detail have
								aided in keeping up with the new order processing specifically post-pandemic times.
								<span>Artvalley</span> Creation Team is very professional in what they do, easy to work
								with, and
								always willing to take the time to discuss and optimize. I feel confident in
								recommending <span>Artvalley</span> creation.
							</p>
						</div>
						<div class="testi_pic_title">
							<small class="post">- Web Developer</small>
						</div>
					</div>

					<div class="testimonial">
						<div class="testimonial_content">
							<p><span>Artvalley</span> services is excellent, impressive, and very professional. They
								have a
								superb team to execute tasks assigned. We expect this relationship to grow much more
								with the years ahead as we expand our global presence using the full depth and
								breadth of Graphic design domain. We highly recommend <span>Artvalley</span> Creations
								to any
								Corporate institution. We are very Pleased with them.
							</p>
						</div>
						<div class="testi_pic_title">
							<h4>CEO of Digital Marketing Company - Florida USA</h4>
						</div>
					</div>
				</div>

			</div><!-- END COL  -->
		</div><!-- END ROW  -->
	</div><!-- END CONTAINER  -->
</section>
<!-- END TESTIMONIALS  -->



<?php

$this->load->view('art_view/Layout/Footer');

?>