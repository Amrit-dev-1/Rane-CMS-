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
                  <h3 class="card-title">Land Acquisition</h3>
                  <div class="card-tools">
                    <a href="<?php echo base_url() ?>admin/About_Us_Admin_1/add">
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
                        <th>Our Story Title</th>
                        <th>Our Story Content</th>

                        <th>Our Vision Title</th>
                        <th>Our Vision Content </th>
                        <th>Our Vision Image</th>

                        <th>Our Mission Title</th>
                        <th>Our Mission Content </th>
                        <th>Our Mission Image </th>
                        <th>Action</th>

                       
                       

                        <!-- Include other table headers here -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($services)) : ?>
                        <?php foreach ($services as $service) : ?>
                          <tr>

                            <td><?php echo $service->our_story_titile; ?></td>
                            <td><?php echo $service->our_story_para; ?></td>

                            <td><?php echo $service->our_vision_title; ?></td>
                            <td><?php echo $service->our_vision_para; ?></td>
                            <td><img src="<?php echo base_url('uploads/About-us/' . $service->our_vision_img); ?>" class="img-fluid" alt="Client Image 2"></td>
                            <td><?php echo $service->our_mission_title; ?></td>
                            <td><?php echo $service->our_mission_para; ?></td>
                            <td><img src="<?php echo base_url('uploads/About-us/' . $service->our_mission_img); ?>" class="img-fluid" alt="Client Image 2"></td>

                            <td>
                              <a href="<?php echo base_url() ?>admin/About_Us_Admin_1/edit/<?php echo $service->id; ?>" class="btn btn-info">Edit</a>
                       
                              <a href="<?php echo base_url() ?>admin/About_Us_Admin_1/delete/<?php echo $service->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
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