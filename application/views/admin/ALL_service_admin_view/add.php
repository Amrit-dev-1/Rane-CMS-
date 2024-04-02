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

				<form action="<?php echo base_url(); ?>admin/All_service_Ban_Con/add" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="tag_title">Tag Title</label>
						<input type="text" class="form-control" id="tag_title" name="tag_title" >
					</div>
					
					<div class="form-group">
						<label for="tag_desc">Tag Description</label>
						<input type="text" class="form-control" id="tag_desc" name="tag_desc" >
					</div>

					<div class="form-group">
						<label for="service_banner_image">Service Banner </label>
						<input type="file" class="form-control-file" id="service_banner_image" name="service_banner_image" >
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>





			</div>
		</div>
	</section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>