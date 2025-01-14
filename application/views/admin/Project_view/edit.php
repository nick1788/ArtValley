<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit City</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
						<li class="breadcrumb-item active">Edit City</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- SELECT2 EXAMPLE -->
			<div class="card card-default">
				<div class="card-header d-none">
					<h3 class="card-title">Select2 (Default Theme)</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove">
							<i class="fas fa-times"></i>
						</button>
					</div>
				</div>
				<!-- /.card-header -->
				<!--<div class="card-body">-->
				<!-- form start -->
				<!-- Example of the view file (admin/Project_view/edit.php) -->
				<?php if ($this->session->flashdata('success')) : ?>
					<script>
						alert("<?php echo $this->session->flashdata('success'); ?>");
					</script>
				<?php endif; ?>

				<?php if ($this->session->flashdata('error')) : ?>
					<script>
						alert("<?php echo $this->session->flashdata('error'); ?>");
					</script>
				<?php endif; ?>

				<form id="demo-form2" action="<?php echo base_url(); ?>admin/Project/edit" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
					<input type="hidden" id="id" required="required" class="form-control" name="id" value="<?php echo $service['id']; ?>">

					<div class="item form-group">
						<label class="col-form-label col-md-12 col-sm-3 label-align" for="title">Project Title <span class="required">*</span></label>
						<div class="col-md-12 col-sm-6">
							<input type="text" id="title" required="required" class="form-control" name="project_title" value="<?php echo $service['project_title']; ?>">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-12 col-sm-3 label-align" for="project_img">Project Image</label>
						<div class="col-md-12 col-sm-6">
							<img src="<?php echo base_url('upload/Project_files/' . $service['project_img']); ?>" alt="Project Image" width="100">
							<br>
							<input type="file" id="project_img" class="form-control" name="project_img">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-12 col-sm-3 label-align" for="project_pdf">Project PDF</label>
						<div class="col-md-12 col-sm-6">
							<?php if (!empty($service['Project_pdf'])): ?>
								<a href="<?php echo base_url('upload/Project_files/' . $service['Project_pdf']); ?>" target="_blank">View PDF</a>
							<?php else: ?>
								<p>No PDF uploaded</p>
							<?php endif; ?>
							<br>
							<input type="file" id="project_pdf" class="form-control" name="project_pdf">
						</div>
					</div>

					<div class="item form-group">
						<div class="col-md-12 col-sm-6">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>




				<!--</div>-->
				<!-- /.row -->
				<!-- /.row -->
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>


<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script>
	CKEDITOR.replace('our_story_para');
	CKEDITOR.replace('our_vision_para');
	CKEDITOR.replace('our_mission_para');
</script>