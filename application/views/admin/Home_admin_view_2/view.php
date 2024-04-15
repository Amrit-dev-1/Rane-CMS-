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
                        <?php foreach ($Banner as $banner_item_2) : ?>
                          <tr>
                            <td><?php echo $banner_item_2['About_us_desc']; ?></td>


                            <?php for ($i = 1; $i <= 3; $i++) : ?>
                              <td>
                                <?php $image_key = 'Properties_card_image_' . $i; ?>
                                <?php if (!empty($banner_item_2[$image_key])) : ?>
                                  <img src="<?php echo base_url($banner_item_2[$image_key]); ?>" class="img-fluid admin-img" alt="Properties Card Image <?php echo $i; ?>">
                                <?php endif; ?>
                              </td>
                            <?php endfor; ?>


                            <td><?php echo $banner_item_2['Properties_card_title_1']; ?></td>
                            <td><?php echo $banner_item_2['Properties_card_title_2']; ?></td>
                            <td><?php echo $banner_item_2['Properties_card_title_3']; ?></td>

                            <?php for ($i = 1; $i <= 6; $i++) : ?>
                              <td><?php echo $banner_item_2['Whychooseus_head_' . $i]; ?></td>
                              <td><?php echo $banner_item_2['Whychooseus_desc_' . $i]; ?></td>
                            <?php endfor; ?>


                            <td>
                              <a href="<?php echo base_url('admin/Home_Admin_2/edit/' . $banner_item_2['id']); ?>" class="btn btn-info">Edit</a>

                              <a href="<?php echo base_url('admin/Home_Admin_2/delete/' . $banner_item_2['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
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