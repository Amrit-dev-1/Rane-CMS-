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

				<form action="<?php echo base_url(); ?>admin/Home_Admin_2/add" method="POST" enctype="multipart/form-data">
					<div class="card-body">
						<div class="form-group">
							<label for="about_us_desc">About Us Description</label>
							<textarea class="form-control" name="about_us_desc" id="about_us_desc" rows="3" required></textarea>
						</div>

						<div class="form-group">
							<label for="properties_card_image_1">Properties Card Image 1</label>
							<input type="file" class="form-control" name="Properties_card_image_1" id="Properties_card_image_1" required>
						</div>

						<div class="form-group">
							<label for="properties_card_image_2">Properties Card Image 2</label>
							<input type="file" class="form-control" name="Properties_card_image_2" id="Properties_card_image_2" required>
						</div>

						<div class="form-group">
							<label for="properties_card_image_3">Properties Card Image 3</label>
							<input type="file" class="form-control" name="Properties_card_image_3" id="Properties_card_image_3" required>
						</div>

						<div class="form-group">
							<label for="properties_card_title">Properties Card Title</label>
							<input type="text" class="form-control" name="Properties_card_title_1" id="Properties_card_title_1" required>
						</div>

						<div class="form-group">
							<label for="properties_card_title">Properties Card Title</label>
							<input type="text" class="form-control" name="Properties_card_title_2" id="Properties_card_title_2" required>
						</div>

						<div class="form-group">
							<label for="properties_card_title">Properties Card Title</label>
							<input type="text" class="form-control" name="Properties_card_title_3" id="Properties_card_title_3" required>
						</div>
						<?php for ($i = 1; $i <= 6; $i++) : ?>
							<div class="form-group">
								<label for="whychooseus_head">Why Choose Us Head <?php echo $i; ?></label>
								<input type="text" class="form-control" name="Whychooseus_head_<?php echo $i; ?>" id="Whychooseus_head_<?php echo $i; ?>" required>
							</div>

							<div class="form-group">
								<label for="whychooseus_desc">Why Choose Us Description <?php echo $i; ?></label>
								<textarea class="form-control" name="Whychooseus_desc_<?php echo $i; ?>" id="Whychooseus_desc_<?php echo $i; ?>" rows="3" required></textarea>
							</div>
						<?php endfor; ?>

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