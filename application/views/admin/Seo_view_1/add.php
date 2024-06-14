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

				<form action="<?php echo base_url(); ?>admin/Seo_admin_view_1/add" method="POST">

					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="meta_title">Meta Title</label>
									<input type="text" class="form-control" name="meta_title" id="meta_title" required>
								</div>

								<div class="form-group">
									<label for="page">Page</label>
									<input type="text" class="form-control" name="page" id="page" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="meta_description">Meta Description</label>
									<input type="text" class="form-control" name="meta_description" id="meta_description" required>
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