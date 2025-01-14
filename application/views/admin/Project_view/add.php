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



				<form action="<?php echo base_url(); ?>admin/Project/add" method="POST" enctype="multipart/form-data">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="project_title">Project Title</label>
									<input type="text" class="form-control" name="project_title" id="project_title" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="project_img">Project Image</label>
									<input type="file" class="form-control" name="project_img" id="project_img" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="project_pdf">Project PDF</label>
									<input type="file" class="form-control" name="project_pdf" id="project_pdf" accept="application/pdf">
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