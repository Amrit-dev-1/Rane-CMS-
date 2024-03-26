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

				<form action="<?php echo base_url(); ?>admin/Home_Admin_3/add" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="our_service_title">Service Title:</label>
						<input type="text" class="form-control" id="our_service_title" name="our_service_title" required>
					</div>
					<div class="form-group">
						<label for="our_service_icon">Service Icon:</label>
						<input type="file" class="form-control-file" id="our_service_icon" name="our_service_icon" required>
					</div>
					<div class="form-group">
						<label for="our_service_head">Service Head:</label>
						<input type="text" class="form-control" id="our_service_head" name="our_service_head" required>
					</div>
					<div class="form-group">
						<label for="our_service_desc">Service Description:</label>
						<textarea class="form-control" id="our_service_desc" name="our_service_desc" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>





			</div>
		</div>
	</section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>