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

				<form action="<?php echo base_url(); ?>admin/Footer_bar/add" method="POST" enctype="multipart/form-data">
					<!-- <div class="form-group">
						<label for="rane_icon">Main Logo</label>
						<input type="file" class="form-control" id="rane_icon" name="rane_icon" required>
					</div> -->

					<div class="form-group">
						<label for="address"> Address </label>
						<input type="text" class="form-control" id="address" name="address" required>
					</div>
					<div class="form-group">
						<label for="Mobile_no"> Mobile No </label>
						<input type="text" class="form-control-file" id="Mobile_no" name="Mobile_no" required>
					</div>
					<div class="form-group">
						<label for="Email"> Email </label>
						<input type="text" class="form-control" id="Email" name="Email" required>
					</div>
					<div class="form-group">
						<label for="Work_hours"> Menu Work_hours </label>
						<textarea class="form-control" id="Work_hours" name="Work_hours" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>