<?php

$this->load->view('art_view/Layout/header');

?>

<style>
	.modal-image {
		flex: 1;
		padding-right: 20px;
	}

	.modal-image img {
		width: 100%;
		height: auto;
		border-radius: 8px;
		max-width: 250px;
		/* Limit the image width */
	}

	.modal-text {
		flex: 2;
	}

	.modal-content {
		background-color: #fff;
		margin: 15% auto;
		padding: 20px;
		border-radius: 8px;
		width: 90%;
		max-width: 800px;
		text-align: left;
		position: relative;
		height: fit-content;
	}

	.modal-content h2 {
		margin-top: 0;
	}

	.close {
		position: absolute;
		top: 10px;
		right: 20px;
		font-size: 24px;
		cursor: pointer;
		color: #333;
		z-index: 1000;
	}

	/* Responsive adjustments */
	@media (max-width: 768px) {
		.modal-body {
			flex-direction: column;
			align-items: center;
		}

		.modal-image {
			padding-right: 0;
			margin-bottom: 20px;
		}

		.modal-text {
			text-align: center;
		}
	}
</style>


<!-- START SECTION TOP -->
<section id="section_home" class="section-top"
	style="background-image: url(assets/img/banner/Servicesbannerimage1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 text-center">
				<div class="section-top-title">
					<h4>Our Services</h4>
					<!-- <h1>The Best service we provided listed are below.</h1>
					<p>If you're trying to contact a company or organization, they may have a customer service
						department that you can reach by phone or email.</p> -->
				</div>
			</div><!--- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->

<!-- START SERVICE -->
<div id="service" class="contents section-padding">
	<div class="container">
		<div class="row">
			<div class="service-title text-center">
				<h2 class="text-center">Our Services</h2>
			</div><!--END COL -->
		</div>
		<?php if (!empty($services)) : ?>
			<div class="row">
				<?php foreach ($services as $service) : ?>
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="single_service" data-title="<?php echo $service->service_title; ?>" data-description="<?php echo $service->service_dec; ?>">
							<img src="<?php echo base_url('upload/Service_image/' . $service->service_img); ?>" class="Project_image_admin" alt="<?php echo $service->service_title; ?>" title="<?php echo $service->service_title; ?>" />
							<div class="title_overlay"><?php echo $service->service_title; ?></div>
						</div>
					</div><!--END COL -->
				<?php endforeach; ?>
			</div><!--END ROW -->
		<?php else : ?>
			<p>No data available.</p>
		<?php endif; ?>
	</div><!--END CONTAINER -->
</div>
<!-- END SERVICE -->

<!-- Modal (Popup) Structure -->
<div id="serviceModal" class="modal">
	<div class="modal-content">
		<span class="close">&times;</span>
		<div class="modal-body">
			<div class="modal-text">
				<h2 class="mb-3" id="modalTitle"></h2>
				<p id="modalDescription"></p>
			</div>
		</div>
	</div>
</div>


<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Get the modal element
		const modal = document.getElementById('serviceModal');
		const modalTitle = document.getElementById('modalTitle');
		const modalDescription = document.getElementById('modalDescription');
		const closeModal = document.querySelector('.modal .close');

		// Get all service cards
		const serviceCards = document.querySelectorAll('.single_service');

		// Add click event listener to each card
		serviceCards.forEach(card => {
			card.addEventListener('click', function() {
				// Get the data from the card (title, description)
				const title = this.getAttribute('data-title');
				const description = this.getAttribute('data-description');

				// Set the modal content
				modalTitle.textContent = title;
				modalDescription.textContent = description;

				// Show the modal
				modal.style.display = 'flex';
			});
		});

		// Close the modal when the close button is clicked
		closeModal.addEventListener('click', function() {
			modal.style.display = 'none';
		});

		// Close the modal when clicking outside the modal content
		window.addEventListener('click', function(event) {
			if (event.target == modal) {
				modal.style.display = 'none';
			}
		});
	});
</script>

<?php

$this->load->view('art_view/Layout/Footer');

?>