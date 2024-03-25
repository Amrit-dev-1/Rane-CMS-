<?php $this->load->view('admin/layout/header'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Add Service</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
						<li class="breadcrumb-item active">Add Service</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="card card-default">

				<form action="<?php echo base_url(); ?>admin/service7_admin_view/add" method="POST" enctype="multipart/form-data">



					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="main_img">Main Image</label>
									<input type="file" class="form-control" name="main_img" id="main_img" required>
								</div>
								<div class="form-group">
									<label for="title">Title</label>
									<input type="text" class="form-control" name="title" id="title" required>
								</div>
								<div class="form-group">
									<label for="content">Content</label>
									<textarea class="form-control" name="content" id="content" rows="3" required></textarea>
								</div>
								<div class="form-group">
									<label for="client_image_1">Client Image 1</label>
									<input type="file" class="form-control" name="client_image_1" id="client_image_1" required>
								</div>
								<div class="form-group">
									<label for="client_des_1">Client Description 1</label>
									<input type="text" class="form-control" name="client_des_1" id="client_des_1" required>
								</div>
								<div class="form-group">
									<label for="key_feature_1">Key Feature 1</label>
									<input type="text" class="form-control" name="key_feature_1" id="key_feature_1" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="client_image_2">Client Image 2</label>
									<input type="file" class="form-control" name="client_image_2" id="client_image_2" required>
								</div>
								<div class="form-group">
									<label for="client_des_2">Client Description 2</label>
									<input type="text" class="form-control" name="client_des_2" id="client_des_2" required>
								</div>
								<div class="form-group">
									<label for="client_image_3">Client Image 3</label>
									<input type="file" class="form-control" name="client_image_3" id="client_image_3" required>
								</div>
								<div class="form-group">
									<label for="client_des_3">Client Description 3</label>
									<input type="text" class="form-control" name="client_des_3" id="client_des_3" required>
								</div>
								<div class="form-group">
									<label for="client_image_4">Client Image 4</label>
									<input type="file" class="form-control" name="client_image_4" id="client_image_4" required>
								</div>
								<div class="form-group">
									<label for="client_des_4">Client Description 4</label>
									<input type="text" class="form-control" name="client_des_4" id="client_des_4" required>
								</div>
								<div class="form-group">
									<label for="key_feature_2">Key Feature 2</label>
									<input type="text" class="form-control" name="key_feature_2" id="key_feature_2" required>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>