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

				<form action="<?php echo base_url(); ?>admin/Contact_us_Admin_2/add" method="POST" enctype="multipart/form-data">



					<div class="card-body">
						<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label for="Phone_no"> Contact no</label>
									<input type="text" class="form-control" name="Phone_no" id="Phone_no" required>
								</div>



								<div class="form-group">
									<label for="Email_id">Email Id</label>
									<input type="text" class="form-control" name="Email_id" id="Email_id" required>
								</div>




								<div class="form-group">
									<label for="Branch_Office_titile"> Branch Office Title </label>
									<input type="text" class="form-control" name="Branch_Office_titile" id="Branch_Office_titile" required>
								</div>

								<div class="form-group">
									<label for="Branch_Office_address"> Branch Office Address  </label>
									<input type="text" class="form-control" name="Branch_Office_address" id="Branch_Office_address" required>
								</div>


								<div class="form-group">
									<label for="G_map">Google Map  </label>
									<input type="text" class="form-control" name="G_map" id="G_map" required>
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