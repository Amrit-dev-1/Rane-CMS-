<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit City</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                        <li class="breadcrumb-item active">Edit City</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header d-none">
                    <h3 class="card-title">Select2 (Default Theme)</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <!--<div class="card-body">-->
                <!-- form start -->
                <!-- edit_images_view.php -->

                <!-- edit_images_view.php -->

                <?php if (isset($Banner)) : ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <h2>Edit Banner</h2>
                                <form action="<?php echo base_url('admin/Navigation_bar/edit/' . $id); ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                                    <div class="row">
                                        <!-- Our service Title  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="menu_service_title">Menu service Title <span class="required"></span></label>
                                                <input type="text" name="menu_service_title" id="menu_service_title" required="required" class="form-control" value="<?php echo isset($Banner['menu_service_title']) ? $Banner['menu_service_title'] : ''; ?>">
                                                <div class="error"><?php echo form_error('menu_service_title'); ?></div>
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="rane_icon">Main Icon <span class="required"></span></label>
                                                <?php if (isset($Banner['rane_icon']) && !empty($Banner['rane_icon'])) : ?>
                                                    <div class="mb-2">
                                                        <img src="<?php echo base_url($Banner['rane_icon']); ?>" alt="Current Image" style="max-width: 100px;">
                                                    </div>
                                                <?php endif; ?>
                                                <input type="file" name="rane_icon" id="rane_icon" class="form-control">
                                                <div class="error"><?php echo form_error('rane_icon'); ?></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="menu_service_desc">Menu Service Description <span class="required">*</span></label>
                                                <input type="text" name="menu_service_desc" id="menu_service_desc" required="required" class="form-control" value="<?php echo isset($Banner['menu_service_desc']) ? $Banner['menu_service_desc'] : ''; ?>">
                                                <div class="error"><?php echo form_error('menu_service_desc'); ?></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="Experties">Our Service Description <span class="required">*</span></label>
                                                <input type="text" name="Experties" id="Experties" required="required" class="form-control" value="<?php echo isset($Banner['Experties']) ? $Banner['Experties'] : ''; ?>">
                                                <div class="error"><?php echo form_error('Experties'); ?></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="Capabilities">Our Service Description <span class="required">*</span></label>
                                                <input type="text" name="Capabilities" id="Capabilities" required="required" class="form-control" value="<?php echo isset($Banner['Capabilities']) ? $Banner['Capabilities'] : ''; ?>">
                                                <div class="error"><?php echo form_error('Capabilities'); ?></div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <p>Banner data not found.</p>
                <?php endif; ?>






                <!-- /.row -->
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>