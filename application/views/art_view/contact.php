<?php

$this->load->view('art_view/Layout/header');

?>



<!-- START SECTION TOP -->
<section id="section_home" class="section-top" style="background-image: url(assets/img/contact-banner.jpeg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 text-center">
				<div class="section-top-title">
					<h4>Get In Touch</h4>
					<!-- <h1>Please provide more information so we can better assist you.</h1>
					<p>If you're trying to contact a company or organization, they may have a customer service department that you can reach by phone or email.</p> -->
				</div>
			</div><!--- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->



<!-- CONTACT -->
<div id="contact" class="contents contact_area section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h1>Get in touch.</h1>
			<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> -->
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10">
				<div class="contact">
					<form class="form" name="enq" method="post" action="<?php echo base_url() ?>Send_mail/send_email" >
						<div class="row">
							<div class="form-group col-12">
								<input type="text" name="name" class="form-control" placeholder="Name" required="required">
							</div>
							<div class="form-group col-md-6">
								<input type="email" name="email" class="form-control" placeholder="Email" required="required">
							</div>
							<div class="form-group col-md-6">
								<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
							</div>
							<div class="form-group col-12">
								<textarea rows="6" name="message" class="form-control" placeholder="Type your message that on your mind..." required="required"></textarea>
							</div>
							<div class="col-12 text-center">
								<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-primary" title="Submit Your Message!">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</div>

<!-- END CONTACT -->


<?php

$this->load->view('art_view/Layout/Footer');

?>