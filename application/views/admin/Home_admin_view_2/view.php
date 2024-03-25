<?php $this->load->view('admin/layout/header'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>




<!DOCTYPE html>
<html lang="en">

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
                    <a href="<?php echo base_url() ?>admin/Home_Admin_2/add/">
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
                        <th>About Description</th>
                        <th>Property Card Image 1</th>
                        <th>Property Card Image 2</th>
                        <th>Property Card Image 3</th>
                        <th>Property Card Title 1</th>
                        <th>Property Card Title 2</th>
                        <th>Property Card Title 3</th>
                        <?php for ($i = 1; $i <= 6; $i++) : ?>
                          <th>Why Choose Us Head <?php echo $i; ?></th>
                          <th>Why Choose Us Description <?php echo $i; ?></th>
                        <?php endfor; ?>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>




                      <?php if (!empty($Banner)) : ?>
                        <?php foreach ($Banner as $banner_item) : ?>
                          <tr>
                            <td><?php echo $banner_item['About_us_desc']; ?></td>


                            <?php for ($i = 1; $i <= 3; $i++) : ?>
                              <td>
                                <?php $image_key = 'Properties_card_image_' . $i; ?>
                                <?php if (!empty($banner_item[$image_key])) : ?>
                                  <img src="<?php echo base_url($banner_item[$image_key]); ?>" class="img-fluid admin-img" alt="Properties Card Image <?php echo $i; ?>">
                                <?php endif; ?>
                              </td>
                            <?php endfor; ?>


                            <td><?php echo $banner_item['Properties_card_title_1']; ?></td>
                            <td><?php echo $banner_item['Properties_card_title_2']; ?></td>
                            <td><?php echo $banner_item['Properties_card_title_3']; ?></td>

                            <?php for ($i = 1; $i <= 6; $i++) : ?>
                              <td><?php echo $banner_item['Whychooseus_head_' . $i]; ?></td>
                              <td><?php echo $banner_item['Whychooseus_desc_' . $i]; ?></td>
                            <?php endfor; ?>


                            <td>
                              <a href="<?php echo base_url('admin/Home_Admin_2/edit/' . $banner_item['id']); ?>" class="btn btn-info">Edit</a>

                              <a href="<?php echo base_url('admin/Home_Admin_2/delete/' . $banner_item['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
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

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables & Plugins -->
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>

  <!-- <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script> -->



  <?php $this->load->view('admin/layout/footer'); ?>
  </div>
  <!-- ./wrapper -->
  <?php $this->load->view('admin/layout/script'); ?>