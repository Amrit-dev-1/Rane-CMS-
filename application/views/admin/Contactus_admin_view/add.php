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

				<form action="<?php echo base_url(); ?>admin/Contact_us_Admin_1/add" method="POST" enctype="multipart/form-data">



					<div class="card-body">
						<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label for="Registered_Office_title"> Registered Office Title </label>
									<input type="text" class="form-control" name="Registered_Office_title" id="Registered_Office_title" required>
								</div>

								

								<div class="form-group">
									<label for="Registered_Office_address">Registered Office address</label>
									<input type="text" class="form-control" name="Registered_Office_address" id="Registered_Office_address" required>
								</div>
						



								<div class="form-group">
									<label for="Working_hours_time"> Working Hours time </label>
									<input type="text" class="form-control" name="Working_hours_time" id="Working_hours_time" required>
								</div>

								<div class="form-group">
									<label for="Working_hours_days"> Working days </label>
									<input type="text" class="form-control" name="Working_hours_days" id="Working_hours_days" required>
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