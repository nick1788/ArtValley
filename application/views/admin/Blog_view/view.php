<?php $this->load->view('admin/layout/header'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>




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
                  <h3 class="card-title">Land Acquisition</h3>
                  <div class="card-tools">
                    <a href="<?php echo base_url() ?>admin/Blog/add">
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
                        <th> Blog Title </th>
                        <th> Blog Image </th>
                        <th>Blog Content</th>
                        <th>Blog content in Detail </th>

                        <th>Action</th>




                        <!-- Include other table headers here -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($services)) : ?>
                        <?php foreach ($services as $service) : ?>
                          <tr>



                            <td><?php echo $service->Blog_title; ?></td>
                            <td><img src="<?php echo base_url('upload/blog_images/' . $service->Blog_Img); ?>" class="img-fluid" alt="Client Image 2"></td>
                            <!-- <td><?php echo $service->Blog_Img; ?></td> -->

                            <td><?php echo $service->Blog_main_content; ?></td>

                            <td><?php echo $service->Blog_detail_content; ?></td>



                            <td>
                              <a href="<?php echo base_url() ?>admin/Blog/edit/<?php echo $service->id; ?>" class="btn btn-info">Edit</a>

                              <a href="<?php echo base_url() ?>admin/Blog/delete/<?php echo $service->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
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