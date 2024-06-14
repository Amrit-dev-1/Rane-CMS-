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

				<form action="<?php echo base_url(); ?>admin/Navigation_bar/add" method="POST" enctype="multipart/form-data">
				<div class="form-group">
						<label for="rane_icon">Main Logo</label>
						<input type="file" class="form-control" id="rane_icon" name="rane_icon" required>
					</div>	
				
				<div class="form-group">
						<label for="menu_service_title"> Menu Service Title:</label>
						<input type="text" class="form-control" id="menu_service_title" name="menu_service_title" required>
					</div>
					<div class="form-group">
						<label for="menu_service_desc">Menu Service Description</label>
						<input type="text" class="form-control-file" id="menu_service_desc" name="menu_service_desc" required>
					</div>
					<div class="form-group">
						<label for="Experties">Menu Experties </label>
						<input type="text" class="form-control" id="Experties" name="Experties" required>
					</div>
					<div class="form-group">
						<label for="Capabilities"> Menu Capabilities </label>
						<textarea class="form-control" id="Capabilities" name="Capabilities" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>