<?php $this->load->view('admin/layout/header'); ?>


<?php $this->load->view('admin/layout/sidebar'); ?>



<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Add Project</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
						<li class="breadcrumb-item active">Add Project</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="card card-default">

			

				<form action="<?php echo base_url(); ?>admin/Service/add" method="POST" enctype="multipart/form-data">

					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="main_img">Service title</label>
									<input type="text" class="form-control" name="service_title" id="service_title" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="main_img">Service description</label>
									<textarea type="text" class="form-control" name="service_dec" id="service_dec" required></textarea> 
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="client_image_2"> Service Image </label>
									<input type="file" class="form-control" name="service_img" id="service_img" required>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>

<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script>
	CKEDITOR.replace('our_story_para');
	CKEDITOR.replace('our_vision_para');
	CKEDITOR.replace('our_mission_para');
</script>