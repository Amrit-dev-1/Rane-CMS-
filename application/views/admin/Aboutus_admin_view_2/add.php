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

				<form action="<?php echo base_url(); ?>admin/About_Us_Admin_2/add" method="POST" enctype="multipart/form-data">



					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="Our_Journey_title">Our Journey Title</label>
									<input type="text" class="form-control" name="Our_Journey_title" id="Our_Journey_title" required>
								</div>

								<div class="form-group">
									<label for="Our_Journey_title">Our Journey year</label>
									<input type="text" class="form-control" name="Our_Journey_year" id="Our_Journey_year" required>
								</div>

								<div class="form-group">
									<label for="Year_content">Our Journey Content</label>
									<textarea class="form-control" name="Year_content" id="Year_content" rows="3" required></textarea>
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