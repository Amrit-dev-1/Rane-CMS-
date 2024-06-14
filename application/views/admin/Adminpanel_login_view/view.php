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
                  <h3 class="card-title">Engineering Survey</h3>
                  <div class="card-tools">
                    <a href="<?php echo base_url() ?>admin/Admin_con/add">
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


                        <th>Admin Id</th>
                        <th>User Id </th>
                        <th>Email Id </th>
                        <th>password</th>
                        <th>Action</th>

                        <!-- Include other table headers here -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($Banner)) : ?>
                        <?php foreach ($Banner as $service) : ?>
                          <tr>
                            <!-- Assuming the property names are different, update them accordingly -->
                            <td><?php echo $service['admin_id']; ?></td>
                            <td><?php echo $service['user_id']; ?></td>
                            <td><?php echo $service['Email_id']; ?></td> <!-- Assuming 'Email_id' is 'email' -->
                            <td><?php echo $service['password']; ?></td>
                            <!-- Assuming there's an 'id' field in the $service array -->
                            <td>
                              <a href="<?php echo base_url() ?>admin/Admin_con/edit/<?php echo $service['id']; ?>" class="btn btn-info">Edit</a>
                              <a href="<?php echo base_url() ?>admin/Admin_con/delete/<?php echo $service['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else : ?>
                        <tr>
                          <td colspan="5">No data available.</td>
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