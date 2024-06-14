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
				<!-- <form id="demo-form2" action="<?php echo base_url(); ?>admin/Land_Advisory_Admin_1/edit" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

					<input type="hidden" id="id" required="required" class="form-control" name="id" value="<?php echo $service['id']; ?>">

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Key_points_icon">Key Points Icons</label>
						<div class="col-md-6 col-sm-6">
							<?php if (!empty($service['Key_points_icon'])) : ?>
								<img src="<?php echo base_url('uploads/Land_advisory/' . $service['Key_points_icon']); ?>" alt="Main Image" width="100">
								<br>
							<?php endif; ?>
							<input type="file" id="Key_points_icon" class="form-control" name="Key_points_icon">
							<div class="error"><?php echo form_error('Key_points_icon'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Key_points_head">Key Points Head<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="Key_points_head" required="required" class="form-control" name="Key_points_head" value="<?php echo $service['Key_points_head']; ?>">
							<div class="error"><?php echo form_error('Key_points_head'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">Key Points Description</label>
						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="Key_points_description"><?php echo $service['Key_points_description']; ?></textarea>
							<div class="error"><?php echo form_error('Key_points_description'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>

				</form> -->

				<form id="demo-form2" action="<?php echo base_url('admin/Land_Advisory_Admin_1/edit'); ?>" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

					<input type="hidden" id="id" name="id" value="<?php echo $service['id']; ?>">

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Key_points_icon">Key Points Icons</label>
						<div class="col-md-6 col-sm-6">
							<?php if (!empty($service['Key_points_icon'])) : ?>
								<img src="<?php echo base_url('uploads/Land_advisory/' . $service['Key_points_icon']); ?>" alt="Main Image" width="100">
								<br>
							<?php endif; ?>
							<input type="file" id="Key_points_icon" name="Key_points_icon" class="form-control">
							<div class="error"><?php echo form_error('Key_points_icon'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Key_points_head">Key Points Head<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="Key_points_head" name="Key_points_head" class="form-control" value="<?php echo $service['Key_points_head']; ?>" required>
							<div class="error"><?php echo form_error('Key_points_head'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">Key Points Description</label>
						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="Key_points_description"><?php echo $service['Key_points_description']; ?></textarea>
							<div class="error"><?php echo form_error('Key_points_description'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>

				</form>
				<!--  -->

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