<?php $this->load->view('admin/layout/header'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>


<style>
  .admin-img {
    height: auto;
    width: 200px;
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
                  <h3 class="card-title">Home Page</h3>
                  <div class="card-tools">
                    <a href="<?php echo base_url() ?>admin/Home_Admin_3/add/">
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
                        <th>Our Service Title</th>
                        <th>Our Service Icon</th>
                        <th>Our Service Head</th>
                        <th>Our Service Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>




                      <?php if (!empty($Banner)) : ?>
                        <?php foreach ($Banner as $banner_item) : ?>
                          <tr>

                            <td><?php echo $banner_item['our_service_title']; ?></td>

                            <td>
                              <img src="<?php echo base_url($banner_item['our_service_icon']); ?>" class="img-fluid admin-img" alt="Service Icon">
                            </td>
                            <td><?php echo $banner_item['our_service_head']; ?></td>
                            <td><?php echo $banner_item['our_service_desc']; ?></td>


                            <td>
                              <a href="<?php echo base_url('admin/Home_Admin_3/edit/' . $banner_item['id']); ?>" class="btn btn-info">Edit</a>

                              <a href="<?php echo base_url('admin/Home_Admin_3/delete/' . $banner_item['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else : ?>
                        <tr>
                          <td colspan="20">No data found.</td>
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