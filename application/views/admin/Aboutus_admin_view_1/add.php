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

				<form action="<?php echo base_url(); ?>admin/About_Us_Admin_1/add" method="POST" enctype="multipart/form-data">



					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="main_img">Our Story Title</label>
									<input type="text" class="form-control" name="our_story_titile" id="our_story_titile" required>
								</div>

								<div class="form-group">
									<label for="title">Our Story Content</label>
									<textarea class="form-control" name="our_story_para" id="our_story_para" rows="3" required></textarea>
								</div>


								<div class="form-group">
									<label for="content">Our Vision</label>
									<input type="text" class="form-control" name="our_vision_title" id="our_vision_title" required>
								</div>
								<div class="form-group">
									<label for="title">Our Vision Content</label>
									<textarea class="form-control" name="our_vision_para" id="our_vision_para" rows="3" required></textarea>
								</div>



								<div class="form-group">
									<label for="client_image_1"> Our Vision Image </label>
									<input type="file" class="form-control" name="our_vision_img" id="our_vision_img" required>
								</div>




								<div class="form-group">
									<label for="client_des_1">Our Mission Title</label>
									<input type="text" class="form-control" name="our_mission_title" id="our_mission_title" required>
								</div>
								<div class="form-group">
									<label for="title">Our Mission Content</label>
									<textarea class="form-control" name="our_mission_para" id="our_mission_para" rows="3" required></textarea>
								</div>

							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="client_image_2"> Our Mission Image </label>
									<input type="file" class="form-control" name="our_mission_img" id="our_mission_img" required>
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