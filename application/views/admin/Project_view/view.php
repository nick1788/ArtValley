<?php $this->load->view('admin/layout/header'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>






<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">
</head>

<style>
  .Project_image_admin {
    height: auto;
    width: 200px;
    text-align: center;
  }
</style>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Include your content header here -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Project Image </h3>
                  <div class="card-tools">
                    <a href="<?php echo base_url() ?>admin/project/add">
                      <button type="button" class="btn btn-success">
                        <i class="fas fa-plus"></i> Add New
                      </button>
                    </a>
                  </div>
                </div>

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Project Image</th>
                        <th>Project Title</th>
                        <th>Project PDF</th> <!-- New column for PDF -->
                        <th>Actions</th>
                        <!-- Include other table headers here -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($project)) : ?>
                        <?php foreach ($project as $service) : ?>
                          <tr>
                            <!-- Project Image -->
                            <td class="text-center">
                              <img src="<?php echo base_url('upload/Project_files/' . $service->project_img); ?>" class="Project_image_admin" alt="Project Image ">
                            </td>

                            <!-- Project Title -->
                            <td><?php echo $service->project_title; ?></td>

                            <!-- Project PDF -->
                            <td >
                              <?php if (!empty($service->Project_pdf)) : ?>
                                <a href="<?php echo base_url('upload/Project_files/' . $service->Project_pdf); ?>" target="_blank" class="btn btn-primary">View PDF</a>
                              <?php else : ?>
                                <span>No PDF uploaded</span>
                              <?php endif; ?>
                            </td>
                            <!-- Edit/Delete Buttons -->
                            <td>
                              <a href="<?php echo base_url() ?>admin/Project/edit/<?php echo $service->id; ?>" class="btn btn-info">Edit</a>
                              <a href="<?php echo base_url() ?>admin/Project/delete/<?php echo $service->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else : ?>
                        <tr>
                          <td colspan="4">No data available.</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->


  <?php $this->load->view('admin/layout/footer'); ?>
  </div>
  <!-- ./wrapper -->
  <?php $this->load->view('admin/layout/script'); ?>