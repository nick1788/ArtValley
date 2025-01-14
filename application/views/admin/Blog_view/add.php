<link rel="stylesheet" href="https://cdn.ckeditor.com/4.16.2/standard-all/contents.css">

<?php $this->load->view('admin/layout/header'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Service</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                        <li class="breadcrumb-item active">Add Service</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-body">
                    <form id="demo-form2" action="<?php echo base_url(); ?>admin/Blog/add" method="POST" enctype="multipart/form-data" class="row g-3">

                        <input type="hidden" id="id" required="required" class="form-control" name="id">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Blog_title" class="form-label">Blog title <span class="required">*</span></label>
                                <input type="text" id="Blog_title" required="required" class="form-control" name="Blog_title">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Blog_Img" class="form-label">Blog Images</label>
                                <input type="file" id="Blog_Img" class="form-control" name="Blog_Img">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Blog_main_content" class="form-label">Blog Content in detail</label>
                                <textarea class="form-control" name="Blog_main_content"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Blog_detail_content" class="form-label">Blog Content</label>
                                <textarea class="form-control" name="Blog_detail_content"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>

<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>

<script>
    CKEDITOR.replace('Blog_main_content');
    CKEDITOR.replace('Blog_detail_content');
</script>

<style>
    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        font-weight: bold;
    }
</style>
