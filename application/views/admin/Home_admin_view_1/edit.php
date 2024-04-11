<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit City</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
						<li class="breadcrumb-item active">Edit City</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="card card-default">
				<div class="card-body">
					<?php if (isset($Banner)) : ?>
						<div class="container">
							<div class="row">
								<div class="col-md-6 offset-md-3">
									<h2>Edit Banner</h2>
									<!-- <form action="<?php echo base_url('admin/Home_Admin_1/edit/' . $id); ?>" method="post" enctype="multipart/form-data">
										<input type="hidden" name="id" value="<?php echo $id; ?>">
										<?php for ($i = 1; $i <= 5; $i++) : ?>
											<div class="form-group">
												<label for="desktop_banner_<?php echo $i; ?>">Desktop Banner <?php echo $i; ?></label>
												<input type="file" class="form-control-file" id="desktop_banner_<?php echo $i; ?>" name="desktop_banner_<?php echo $i; ?>">
												<?php if (isset($Banner['desktop_banner_' . $i])) : ?>
													<img src="<?php echo base_url($Banner['desktop_banner_' . $i]); ?>" class="img-fluid admin-img" alt="Desktop Banner <?php echo $i; ?>">
												<?php endif; ?>
											</div>
										<?php endfor; ?>

										<?php for ($i = 1; $i <= 5; $i++) : ?>
											<div class="form-group">
												<label for="Mobile_banner_<?php echo $i; ?>">Mobile Banner <?php echo $i; ?></label>
												<input type="file" class="form-control-file" id="Mobile_banner_<?php echo $i; ?>" name="Mobile_banner_<?php echo $i; ?>">
												<?php if (isset($Banner['Mobile_banner_' . $i])) : ?>
													<img src="<?php echo base_url($Banner['Mobile_banner_' . $i]); ?>" class="img-fluid admin-img" alt="Mobile Banner <?php echo $i; ?>">
												<?php endif; ?>
											</div>
										<?php endfor; ?>


										<?php for ($i = 1; $i <= 5; $i++) : ?>
											<div class="form-group">
												<label for="Survey_icon_<?php echo $i; ?>">Survey Icon <?php echo $i; ?></label>
												<input type="file" class="form-control-file" id="Survey_icon_<?php echo $i; ?>" name="Survey_icon_<?php echo $i; ?>">
												<?php if (isset($Banner['Survey_icon_' . $i])) : ?>
													<img src="<?php echo base_url($Banner['Survey_icon_' . $i]); ?>" class="img-fluid admin-img" alt="survey Banner <?php echo $i; ?>">
												<?php endif; ?>
											</div>
										<?php endfor; ?>

										<?php for ($i = 1; $i <= 5; $i++) : ?>
											<div class="form-group">
												<label for="Survey_desc_<?php echo $i; ?>">Survey Description <?php echo $i; ?></label>
												<input type="text" class="form-control" id="Survey_desc_<?php echo $i; ?>" name="Survey_desc_<?php echo $i; ?>" value="<?php echo isset($Banner['Survey_desc_' . $i]) ? $Banner['Survey_desc_' . $i] : ''; ?>">
											</div>
										<?php endfor; ?>



										<button type="submit" class="btn btn-primary">Submit</button>
									</form> -->
									<form id="demo-form2" action="<?php echo base_url('admin/Home_Admin_1/edit/' . $id); ?>" method="post" enctype="multipart/form-data" class="custom-form">
										<input type="hidden" name="id" value="<?php echo $id; ?>">

										<!-- Desktop Banners -->
										<?php for ($i = 1; $i <= 5; $i++) : ?>
											<div class="form-group">
												<label for="desktop_banner_<?php echo $i; ?>">Desktop Banner <?php echo $i; ?></label>
												<input type="file" class="form-control-file" id="desktop_banner_<?php echo $i; ?>" name="desktop_banner_<?php echo $i; ?>">
												<?php if (isset($Banner['desktop_banner_' . $i])) : ?>
													<img src="<?php echo base_url($Banner['desktop_banner_' . $i]); ?>" class="img-fluid admin-img" alt="Desktop Banner <?php echo $i; ?>">
												<?php endif; ?>
											</div>
										<?php endfor; ?>

										<!-- Mobile Banners -->
										<?php for ($i = 1; $i <= 5; $i++) : ?>
											<div class="form-group">
												<label for="Mobile_banner_<?php echo $i; ?>">Mobile Banner <?php echo $i; ?></label>
												<input type="file" class="form-control-file" id="Mobile_banner_<?php echo $i; ?>" name="Mobile_banner_<?php echo $i; ?>">
												<?php if (isset($Banner['Mobile_banner_' . $i])) : ?>
													<img src="<?php echo base_url($Banner['Mobile_banner_' . $i]); ?>" class="img-fluid admin-img" alt="Mobile Banner <?php echo $i; ?>">
												<?php endif; ?>
											</div>
										<?php endfor; ?>

										<!-- Survey Icons -->
										<?php for ($i = 1; $i <= 5; $i++) : ?>
											<div class="form-group">
												<label for="Survey_icon_<?php echo $i; ?>">Survey Icon <?php echo $i; ?></label>
												<input type="file" class="form-control-file" id="Survey_icon_<?php echo $i; ?>" name="Survey_icon_<?php echo $i; ?>">
												<?php if (isset($Banner['Survey_icon_' . $i])) : ?>
													<img src="<?php echo base_url($Banner['Survey_icon_' . $i]); ?>" class="img-fluid admin-img" alt="survey Banner <?php echo $i; ?>">
												<?php endif; ?>
											</div>
										<?php endfor; ?>

										<!-- Survey Descriptions -->
										<?php for ($i = 1; $i <= 5; $i++) : ?>
											<div class="form-group">
												<label for="Survey_desc_<?php echo $i; ?>">Survey Description <?php echo $i; ?></label>
												<input type="text" class="form-control" id="Survey_desc_<?php echo $i; ?>" name="Survey_desc_<?php echo $i; ?>" value="<?php echo isset($Banner['Survey_desc_' . $i]) ? htmlspecialchars($Banner['Survey_desc_' . $i]) : ''; ?>">
											</div>
										<?php endfor; ?>

										


										<button type="submit" class="btn btn-primary">Submit</button>
									</form>

								</div>
							</div>
						</div>
					<?php else : ?>
						<p>Banner data not found.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>