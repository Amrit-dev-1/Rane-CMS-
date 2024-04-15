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
                    <a href="<?php echo base_url() ?>admin/Land_Advisory_Admin_1/add">
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
                        <th>Key Points Icon</th>
                        <th>Key Points Head</th>

                        <th>Key Points Description</th>
                       
                        <th>Action</th>

                       
                       

                        <!-- Include other table headers here -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($services)) : ?>
                        <?php foreach ($services as $service) : ?>
                          <tr>

                            <td><img src="<?php echo base_url('uploads/Land_advisory/' . $service->Key_points_icon); ?>" class="img-fluid" alt="Client Image 2"></td>

                            <td><?php echo $service->Key_points_head; ?></td>

                            <td><?php echo $service->Key_points_description; ?></td>
                           
                

                            <td>
                              <a href="<?php echo base_url() ?>admin/Land_Advisory_Admin_1/edit/<?php echo $service->id; ?>" class="btn btn-info">Edit</a>
                       
                              <a href="<?php echo base_url() ?>admin/Land_Advisory_Admin_1/delete/<?php echo $service->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
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