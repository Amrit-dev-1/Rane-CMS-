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
				<form id="demo-form2" action="<?php echo base_url(); ?>admin/Contact_us_Admin_2/edit" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

					<input type="hidden" id="id" required="required" class="form-control" name="id" value="<?php echo $service['id']; ?>">

				

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Phone_no"> Contact-No <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="Phone_no" required="required" class="form-control" name="Phone_no" value="<?php echo $service['Phone_no']; ?>">
							<div class="error"><?php echo form_error('Phone_no'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Email_id"> Email Id <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="Email_id" required="required" class="form-control" name="Email_id" value="<?php echo $service['Email_id']; ?>">
							<div class="error"><?php echo form_error('Email_id'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Branch_Office_titile"> Branch Office Title  <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="Branch_Office_titile" required="required" class="form-control" name="Branch_Office_titile" value="<?php echo $service['Branch_Office_titile']; ?>">
							<div class="error"><?php echo form_error('Branch_Office_titile'); ?></div>
						</div>
					</div>


					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Branch_Office_address"> Branch Office Address  <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="Branch_Office_address" required="required" class="form-control" name="Branch_Office_address" value="<?php echo $service['Branch_Office_address']; ?>">
							<div class="error"><?php echo form_error('Branch_Office_address'); ?></div>
						</div>
					</div>

					

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="G_map"> Branch Office Address  <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="G_map" required="required" class="form-control" name="G_map" value="<?php echo $service['Branch_Office_address']; ?>">
							<div class="error"><?php echo form_error('G_map'); ?></div>
						</div>
					</div>

				

					<div class="item form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>

				</form>

				<!--</div>-->
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