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
                  <h3 class="card-title">Geospatial & IT Solutions</h3>
                  <div class="card-tools">
                    <a href="<?php echo base_url() ?>admin/service7_admin_view/add">
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
                        <th>Main image</th>
                        <th>Title</th>

                        <th>Content</th>
                        <th>client image 1</th>
                        <th>client image 2</th>
                        <th>client image 3</th>
                        <th>client image 4</th>
                        <th>client Description 1</th>
                        <th>client Description 2</th>
                        <th>client Description 3</th>
                        <th>client Description 4</th>
                        <th>key_feature_1</th>
                        <th>key_feature_2</th>
                        <th></th>

                        <!-- Include other table headers here -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($services)) : ?>
                        <?php foreach ($services as $service) : ?>
                          <tr>

                            <td><img src="<?php echo base_url('uploads/Main-img/' . $service->main_img); ?>" class="img-fluid" alt="Main Image"></td>



                            <td><?php echo $service->title; ?></td>
                            <td><?php echo $service->content; ?></td>

                            <td><img src="<?php echo base_url('uploads/Logo/' . $service->client_image_1); ?>" class="img-fluid" alt="Client Image 1"></td>
                            <td><img src="<?php echo base_url('uploads/Logo/' . $service->client_image_2); ?>" class="img-fluid" alt="Client Image 2"></td>
                            <td><img src="<?php echo base_url('uploads/Logo/' . $service->client_image_3); ?>" class="img-fluid" alt="Client Image 3"></td>
                            <td><img src="<?php echo base_url('uploads/Logo/' . $service->client_image_4); ?>" class="img-fluid" alt="Client Image 4"></td>



                            <td><?php echo $service->client_des_1; ?></td>
                            <td><?php echo $service->client_des_2; ?></td>
                            <td><?php echo $service->client_des_3; ?></td>
                            <td><?php echo $service->client_des_4; ?></td>
                            <td><?php echo $service->key_feature_1; ?></td>
                            <td><?php echo $service->key_feature_2; ?></td>
                            <td>
                              <a href="<?php echo base_url() ?>admin/service7_admin_view/edit/<?php echo $service->id; ?>" class="btn btn-info">Edit</a>
                       
                              <a href="<?php echo base_url() ?>admin/service7_admin_view/delete/<?php echo $service->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
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