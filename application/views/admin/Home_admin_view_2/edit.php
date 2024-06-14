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
                            <div class="col-md-12 ">
                                <h2>Edit Banner</h2>
                                <form action="<?php echo base_url('admin/Home_Admin_2/edit/' . $id); ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                                    <!-- About Us Description -->
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="about_us_desc">About Us Description <span class="required">*</span></label>
                                        <div class="col-md-12 col-sm-6">
                                            <!-- <input type="text" name="about_us_desc" id="about_us_desc" required="required" class="form-control" value="<?php echo isset($Banner['About_us_desc']) ? $Banner['About_us_desc'] : ''; ?>"> -->
                                            <textarea name="about_us_desc" id="about_us_desc" required="required" class="form-control"><?php echo isset($Banner['About_us_desc']) ? $Banner['About_us_desc'] : ''; ?></textarea>

                                            <div class="error"><?php echo form_error('about_us_desc'); ?></div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <!-- Properties Card Images -->
                                            <div class="col-md-4">
                                                <div class="item form-group ">
                                                    <label class="col-form-label col-md-6 col-sm-6 label-align" for="properties_card_image_1">Properties Card Image 1 <span class="required">*</span></label>
                                                    <div class="col-md-12 col-sm-6">
                                                        <input type="file" name="Properties_card_image_1" id="properties_card_image_1" required="required" class="form-control">
                                                        <img src="<?php echo base_url($Banner['Properties_card_image_1']); ?>" class="img-fluid admin-img " alt=" Card 1 ">
                                                        <div class="error"><?php echo form_error('Properties_card_image_1'); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-6 col-sm-6 label-align" for="properties_card_image_2">Properties Card Image 2 <span class="required">*</span></label>
                                                    <div class="col-md-12 col-sm-6">
                                                        <input type="file" name="Properties_card_image_2" id="properties_card_image_2" required="required" class="form-control">
                                                        <img src="<?php echo base_url($Banner['Properties_card_image_2']); ?>" class="img-fluid admin-img " alt=" Card 1 ">
                                                        <div class="error"><?php echo form_error('Properties_card_image_2'); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">


                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-6 col-sm-6 label-align" for="properties_card_image_3">Properties Card Image 3 <span class="required">*</span></label>
                                                    <div class="col-md-12 col-sm-6">
                                                        <input type="file" name="Properties_card_image_3" id="properties_card_image_3" required="required" class="form-control">
                                                        <img src="<?php echo base_url($Banner['Properties_card_image_3']); ?>" class="img-fluid admin-img " alt=" Card 1 ">
                                                        <div class="error"><?php echo form_error('Properties_card_image_3'); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Properties Card Titles -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-6 col-sm-6 label-align" for="properties_card_title_1">Properties Card Title 1 <span class="required">*</span></label>
                                                    <div class="col-md-12 col-sm-6">
                                                        <input type="text" name="Properties_card_title_1" id="properties_card_title_1" required="required" class="form-control" value="<?php echo isset($Banner['Properties_card_title_1']) ? $Banner['Properties_card_title_1'] : ''; ?>">
                                                        <div class="error"><?php echo form_error('Properties_card_title_1'); ?></div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-6 col-sm-6 label-align" for="properties_card_title_2">Properties Card Title 2 <span class="required">*</span></label>
                                                    <div class="col-md-12 col-sm-6">
                                                        <input type="text" name="Properties_card_title_2" id="properties_card_title_2" required="required" class="form-control" value="<?php echo isset($Banner['Properties_card_title_2']) ? $Banner['Properties_card_title_2'] : ''; ?>">
                                                        <div class="error"><?php echo form_error('Properties_card_title_2'); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-6 col-sm-6 label-align" for="properties_card_title_3">Properties Card Title 3 <span class="required">*</span></label>
                                                    <div class="col-md-12 col-sm-6">
                                                        <input type="text" name="Properties_card_title_3" id="properties_card_title_3" required="required" class="form-control" value="<?php echo isset($Banner['Properties_card_title_3']) ? $Banner['Properties_card_title_3'] : ''; ?>">
                                                        <div class="error"><?php echo form_error('Properties_card_title_3'); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    <!-- Why Choose Us Head and Description -->
                                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-6 col-sm-3 label-align" for="whychooseus_head_<?php echo $i; ?>">Why Choose Us Head <?php echo $i; ?> <span class="required">*</span></label>
                                                        <div class="col-md-12 col-sm-6">
                                                            <input type="text" name="Whychooseus_head_<?php echo $i; ?>" id="whychooseus_head_<?php echo $i; ?>" required="required" class="form-control" value="<?php echo isset($Banner['Whychooseus_head_' . $i]) ? $Banner['Whychooseus_head_' . $i] : ''; ?>">
                                                            <div class="error"><?php echo form_error('Whychooseus_head_' . $i); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-6 col-sm-3 label-align" for="whychooseus_desc_<?php echo $i; ?>">Why Choose Us Description <?php echo $i; ?> <span class="required">*</span></label>
                                                        <div class="col-md-12 col-sm-6">
                                                            <textarea class="form-control" name="Whychooseus_desc_<?php echo $i; ?>" id="whychooseus_desc_<?php echo $i; ?>" rows="3" required><?php echo isset($Banner['Whychooseus_desc_' . $i]) ? $Banner['Whychooseus_desc_' . $i] : ''; ?></textarea>
                                                            <div class="error"><?php echo form_error('Whychooseus_desc_' . $i); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    <?php endfor; ?>

                                    <!-- Submit Button -->
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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