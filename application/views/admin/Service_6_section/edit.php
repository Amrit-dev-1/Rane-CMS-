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
				<form id="demo-form2" action="<?php echo base_url(); ?>admin/service6_admin_view/edit" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

					<input type="hidden" id="id" required="required" class="form-control" name="id" value="<?php echo $service['id']; ?>">


					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="main-img">Main Image</label>
						<div class="col-md-6 col-sm-6">
						
							<img src="<?php echo base_url('uploads/Main-img/' . $service['main_img']); ?>" alt="Main Image" width="100">
							<br>
							<!-- Input for new image -->
							<input type="file" id="main-img" class="form-control" name="main-img">
							<div class="error"><?php echo form_error('main-img'); ?></div>
						</div>
					</div>


					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title<span class="required">*</span></label>

						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="title" required="required" class="form-control" name="title" value="<?php echo $service['title']; ?>">
							<div class="error"><?php echo form_error('title'); ?></div>
						</div>

					</div>

					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">Content</label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="content"><?php echo $service['content']; ?></textarea>
							<div class="error"><?php echo form_error('content'); ?></div>
						</div>

					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="client_image_1">Client Image 1</label>
						<div class="col-md-6 col-sm-6">
							<!-- Existing image display -->
							<img src="<?php echo base_url('uploads/Logo/' . $service['client_image_1']); ?>" alt="Client Image 1" width="100">
							<br>
							<!-- Input for new image -->
							<input type="file" id="client_image_1" class="form-control" name="client_image_1">
							<div class="error"><?php echo form_error('client_image_1'); ?></div>
						</div>
					</div>


					
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="client_image_2">Client Image 2</label>
						<div class="col-md-6 col-sm-6">
							<!-- Existing image display -->
							<img src="<?php echo base_url('uploads/Logo/' . $service['client_image_2']); ?>" alt="Client Image 2" width="100">
							<br>
							<!-- Input for new image -->
							<input type="file" id="client_image_2" class="form-control" name="client_image_2">
							<div class="error"><?php echo form_error('client_image_2'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="client_image_2">Client Image 3</label>
						<div class="col-md-6 col-sm-6">
							<!-- Existing image display -->
							<img src="<?php echo base_url('uploads/Logo/' . $service['client_image_3']); ?>" alt="Client Image 3" width="100">
							<br>
							<!-- Input for new image -->
							<input type="file" id="client_image_3" class="form-control" name="client_image_3">
							<div class="error"><?php echo form_error('client_image_3'); ?></div>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="client_image_4">Client Image 4</label>
						<div class="col-md-6 col-sm-6">
							<!-- Existing image display -->
							<img src="<?php echo base_url('uploads/Logo/' . $service['client_image_4']); ?>" alt="Client Image 4" width="100">
							<br>
							<!-- Input for new image -->
							<input type="file" id="client_image_4" class="form-control" name="client_image_4">
							<div class="error"><?php echo form_error('client_image_4'); ?></div>
						</div>
					</div>




					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">client Description 1</label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="client_des_1"><?php echo $service['client_des_1']; ?></textarea>
							<div class="error"><?php echo form_error('client_des_1'); ?></div>
						</div>

					</div>

					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">client Description 2</label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="client_des_2"><?php echo $service['client_des_2']; ?></textarea>
							<div class="error"><?php echo form_error('client_des_2'); ?></div>
						</div>

					</div>

					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">client Description 3</label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="client_des_3"><?php echo $service['client_des_3']; ?></textarea>
							<div class="error"><?php echo form_error('client_des_3'); ?></div>
						</div>

					</div>


					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">client Description 4</label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="client_des_4"><?php echo $service['client_des_4']; ?></textarea>
							<div class="error"><?php echo form_error('client_des_4'); ?></div>
						</div>

					</div>


					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">Key Feature 1 </label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="key_feature_1"><?php echo $service['key_feature_1']; ?></textarea>
							<div class="error"><?php echo form_error('key_feature_1'); ?></div>
						</div>

					</div>


					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">Key Feature 2 </label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="key_feature_2"><?php echo $service['key_feature_2']; ?></textarea>
							<div class="error"><?php echo form_error('key_feature_2'); ?></div>
						</div>

					</div>





					<div class="item form-group">

						<div class="col-md-6 col-sm-6 offset-md-3">
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