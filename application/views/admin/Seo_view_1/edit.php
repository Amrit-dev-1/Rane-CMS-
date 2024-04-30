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
				<form id="demo-form2" action="<?php echo base_url(); ?>admin/Seo_admin_view_1/edit" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

					<input type="hidden" id="id" required="required" class="form-control" name="id" value="<?php echo $service['id']; ?>">





					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title<span class="required">*</span></label>

						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="page" required="required" class="form-control" name="page" value="<?php echo $service['page']; ?>">
							<div class="error"><?php echo form_error('page'); ?></div>
						</div>



					</div>


					<div class="item form-group">
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="meta_title" required="required" class="form-control" name="meta_title" value="<?php echo $service['meta_title']; ?>">
							<div class="error"><?php echo form_error('meta_title'); ?></div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="meta_description" required="required" class="form-control" name="meta_description" value="<?php echo $service['meta_description']; ?>">
						<div class="error"><?php echo form_error('meta_description'); ?></div>
					</div>
					<br>

					<div class="item form-group">

						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-success">Update</button>
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