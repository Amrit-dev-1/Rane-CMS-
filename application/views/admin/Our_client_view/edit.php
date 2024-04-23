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
					<?php if (!empty($Banner)) : ?>
						<div class="container">
							<div class="row">
								<div class="col-md-12 ">
									<h2>Edit Banner</h2>
									<form action="<?php echo base_url('admin/Our_client_Admin/edit/' . $id); ?>" method="post" enctype="multipart/form-data">
										<input type="hidden" name="id" value="<?php echo $id; ?>">

										<?php $banner_data = $Banner[0]; ?>

										<div class="row">
											<?php for ($i = 1; $i <= 8; $i++) : ?>
												<div class="col-md-3">
													<div class="form-group">
														<label for="our_client_<?php echo $i; ?>">Our Client Icon <?php echo $i; ?></label>
														<input type="file" class="form-control-file" id="our_client_<?php echo $i; ?>" name="our_client_<?php echo $i; ?>">
														<?php if (!empty($banner_data['our_client_' . $i])) : ?>
															<img src="<?php echo base_url($banner_data['our_client_' . $i]); ?>" class="img-fluid admin-img" alt="Our Client Icon <?php echo $i; ?>">
														<?php else : ?>
															<p>No image found for this client.</p>
														<?php endif; ?>
													</div>
												</div>
												<?php if ($i % 4 == 0) : ?>
										</div>
										<div class="row">
										<?php endif; ?>
									<?php endfor; ?>
										</div>


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