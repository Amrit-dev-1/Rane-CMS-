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
                    <a href="<?php echo base_url() ?>admin/Home_Admin_1/add/">
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


                        <th>Desktop Banner 1 </th>
                        <th>Desktop Banner 2 </th>
                        <th>Desktop Banner 3 </th>
                        <th>Desktop Banner 4 </th>
                        <th>Desktop Banner 5 </th>

                        <th>Mobile Banner 1</th>
                        <th>Mobile Banner 2</th>
                        <th>Mobile Banner 3</th>
                        <th>Mobile Banner 4</th>
                        <th>Mobile Banner 5</th>


                        <th>Survey Icon 1</th>
                        <th>Survey Icon 2</th>
                        <th>Survey Icon 3</th>
                        <th>Survey Icon 4</th>
                        <th>Survey Icon 5</th>

                        <th>Survey Description 1</th>
                        <th>Survey Description 2</th>
                        <th>Survey Description 3</th>
                        <th>Survey Description 4</th>
                        <th>Survey Description 5</th>
                        <th></th>






                        <!-- Include other table headers here -->
                      </tr>
                    </thead>
                    <tbody>

                      <!-- <?php if (!empty($Banner)) : ?>
                        <?php foreach ($Banner as $banner_id) : ?>
                          <tr>
                          <tr>

                            <td> <img src="<?php echo base_url('uploads/Home-page/' . $banner_id['desktop_banner_1']); ?>" class="img-fluid" alt="Desktop_banner"></td>



                            <td> <img src="<?php echo base_url($banner_id->desktop_banner_2); ?>" class="img-fluid admin-img" alt="Desktop Banner 2"></td>
                            <td> <img src="<?php echo base_url($banner_id->desktop_banner_3); ?>" class="img-fluid admin-img" alt="Desktop Banner 3"></td>
                            <td> <img src="<?php echo base_url($banner_id->desktop_banner_4); ?>" class="img-fluid admin-img" alt="Desktop Banner 4"></td>
                            <td> <img src="<?php echo base_url($banner_id->desktop_banner_5); ?>" class="img-fluid admin-img" alt="Desktop Banner 5"></td>

                            <td> <img src="<?php echo base_url($banner_id->Mobile_banner_1); ?>" class="img-fluid admin-img" alt="Mobile Banner 1"></td>
                            <td> <img src="<?php echo base_url($banner_id->Mobile_banner_2); ?>" class="img-fluid admin-img" alt="Mobile Banner 2"></td>
                            <td> <img src="<?php echo base_url($banner_id->Mobile_banner_3); ?>" class="img-fluid admin-img" alt="Mobile Banner 3"></td>
                            <td> <img src="<?php echo base_url($banner_id->Mobile_banner_4); ?>" class="img-fluid admin-img" alt="Mobile Banner 4"></td>
                            <td> <img src="<?php echo base_url($banner_id->Mobile_banner_5); ?>" class="img-fluid admin-img" alt="Mobile Banner 5"></td>

                            <td> <img src="<?php echo base_url($banner_id->Survey_icon_1); ?>" class="img-fluid admin-img" alt="Survey Icon 1"></td>
                            <td> <img src="<?php echo base_url($banner_id->Survey_icon_2); ?>" class="img-fluid admin-img" alt="Survey Icon 2"></td>
                            <td> <img src="<?php echo base_url($banner_id->Survey_icon_3); ?>" class="img-fluid admin-img" alt="Survey Icon 3"></td>
                            <td> <img src="<?php echo base_url($banner_id->Survey_icon_4); ?>" class="img-fluid admin-img" alt="Survey Icon 4"></td>
                            <td> <img src="<?php echo base_url($banner_id->Survey_icon_5); ?>" class="img-fluid admin-img" alt="Survey Icon 5"></td>


                            <td><?php echo $banner_id->Survey_desc_1; ?></td>
                            <td><?php echo $banner_id->Survey_desc_2; ?></td>
                            <td><?php echo $banner_id->Survey_desc_3; ?></td>
                            <td><?php echo $banner_id->Survey_desc_4; ?></td>
                            <td><?php echo $banner_id->Survey_desc_5; ?></td>

                            <td>

                              <a href="<?php echo base_url('admin/Home_Admin_1/delete/' . $banner_id->ID); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
                            </td>



                            </td>


                            </td>




                          </tr>
                        <?php endforeach; ?>
                      <?php else : ?>
                        <p>No data found.</p>
                      <?php endif; ?> -->

                      <?php if (!empty($Banner)) : ?>
                        <?php foreach ($Banner as $banner_item) : ?>
                          <tr>
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                              <td>
                                <?php $desktop_banner = 'desktop_banner_' . $i; ?>
                                <?php if (!empty($banner_item[$desktop_banner])) : ?>
                                  <img src="<?php echo base_url($banner_item[$desktop_banner]); ?>" class="img-fluid admin-img" alt="Desktop Banner <?php echo $i; ?>">
                                <?php endif; ?>
                              </td>
                            <?php endfor; ?>

                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                              <td>
                                <?php $mobile_banner = 'Mobile_banner_' . $i; ?>
                                <?php if (!empty($banner_item[$mobile_banner])) : ?>
                                  <img src="<?php echo base_url($banner_item[$mobile_banner]); ?>" class="img-fluid admin-img" alt="Mobile Banner <?php echo $i; ?>">
                                <?php endif; ?>
                              </td>
                            <?php endfor; ?>

                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                              <td>
                                <?php $survey_icon = 'Survey_icon_' . $i; ?>
                                <?php if (!empty($banner_item[$survey_icon])) : ?>
                                  <img src="<?php echo base_url($banner_item[$survey_icon]); ?>" class="img-fluid admin-img" alt="Survey Icon <?php echo $i; ?>">
                                <?php endif; ?>
                              </td>
                            <?php endfor; ?>

                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                              <td>
                                <?php $survey_desc = 'Survey_desc_' . $i; ?>
                                <?php echo $banner_item[$survey_desc] ?? ''; ?>
                              </td>
                            <?php endfor; ?>

                            <td>
                              <a href="<?php echo base_url('admin/Home_Admin_1/edit/' . $banner_item['ID']); ?>" class="btn btn-info">Edit</a>
                              <a href="<?php echo base_url('admin/Home_Admin_1/delete/' . $banner_item['ID']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
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