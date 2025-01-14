<head>
	<link rel="stylesheet" href="https://cdn.ckeditor.com/4.16.2/standard-all/contents.css">

</head>

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
				<form id="demo-form2" action="<?php echo base_url(); ?>admin/Blog/edit" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

					<input type="hidden" id="id" required="required" class="form-control" name="id" value="<?php echo $service['id']; ?>">

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Blog_title"> Blog title <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="Blog_title" required="required" class="form-control" name="Blog_title" value="<?php echo $service['Blog_title']; ?>">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Blog_Img">Blog Images </label>
						<div class="col-md-6 col-sm-6">
							<img src="<?php echo base_url('upload/blog_images/' . $service['Blog_Img']); ?>" alt="Main Image" width="100">
							<br>

							<input type="file" id="Blog_Img" class="form-control" name="Blog_Img">
						</div>
					</div>

					<div class="item form-group">
						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align"> blog Content </label>
						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="Blog_main_content"><?php echo $service['Blog_main_content']; ?></textarea>
						</div>
					</div>

					<div class="item form-group">
						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align"> blog Content in detail </label>
						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="Blog_detail_content"><?php echo $service['Blog_detail_content']; ?></textarea>
						</div>
					</div>

					<div class="item form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
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
	CKEDITOR.replace('Blog_main_content');
	CKEDITOR.replace('Blog_detail_content');
</script>