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
				<form id="edit_form" action="<?php echo base_url('admin/About_Us_Admin_2/edit'); ?>" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $service['id']; ?>">

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Our_Journey_title">Our Journey Title<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6">
							<input type="text" id="Our_Journey_title" required="required" class="form-control" name="Our_Journey_title" value="<?php echo $service['Our_Journey_title']; ?>">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Our_Journey_year">Our Journey Year</label>
						<div class="col-md-6 col-sm-6">
							<input type="text" id="Our_Journey_year" class="form-control" name="Our_Journey_year" value="<?php echo $service['Our_Journey_year']; ?>">
						</div>
					</div>

					<div class="item form-group">
						<label for="Year_content" class="col-form-label col-md-3 col-sm-3 label-align">Year Content</label>
						<div class="col-md-6 col-sm-6">
							<textarea class="form-control" name="Year_content"><?php echo $service['Year_content']; ?></textarea>
						</div>
					</div>

					<!-- Add other fields as needed -->

					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
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