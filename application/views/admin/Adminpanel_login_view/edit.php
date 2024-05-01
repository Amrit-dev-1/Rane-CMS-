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


				<?php if (!empty($Banner)) : ?>
					<form id="editBannerForm" action="<?php echo base_url(); ?>admin/Admin_con/edit" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
						<input type="hidden" name="id" value="<?php echo $Banner['id']; ?>">

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="admin_id">Admin ID <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input type="text" id="admin_id" name="admin_id" class="form-control" required value="<?php echo $Banner['admin_id']; ?>">
								<div class="error"><?php echo form_error('admin_id'); ?></div>
							</div>
						</div>

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="user_id">User ID <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input type="text" id="user_id" name="user_id" class="form-control" required value="<?php echo $Banner['user_id']; ?>">
								<div class="error"><?php echo form_error('user_id'); ?></div>
							</div>
						</div>

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="Email_id">Email ID <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input type="text" id="Email_id" name="Email_id" class="form-control" required value="<?php echo $Banner['Email_id']; ?>">
								<div class="error"><?php echo form_error('Email_id'); ?></div>
							</div>
						</div>

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input type="text" id="password" name="password" class="form-control" required value="<?php echo $Banner['password']; ?>">
								<div class="error"><?php echo form_error('password'); ?></div>
							</div>
						</div>

						<div class="item form-group">
							<div class="col-md-6 col-sm-6 offset-md-3">
								<button type="submit" class="btn btn-success">Update</button>
							</div>
						</div>
					</form>

				<?php endif; ?>



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