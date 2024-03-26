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

				<form action="<?php echo base_url(); ?>admin/Home_Admin_1/add" method="POST" enctype="multipart/form-data">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label for="desktop_banner_1">Desktop Banner 1</label>
									<input type="file" class="form-control" name="desktop_banner_1" id="desktop_banner_1" required>
								</div>
								<div class="form-group">
									<label for="desktop_banner_2">Desktop Banner 2</label>
									<input type="file" class="form-control" name="desktop_banner_2" id="desktop_banner_2" required>
								</div>

								<div class="form-group">
									<label for="desktop_banner_3">Desktop Banner 3</label>
									<input type="file" class="form-control" name="desktop_banner_3" id="desktop_banner_3" required>
								</div>

								<div class="form-group">
									<label for="desktop_banner_3">Desktop Banner 4</label>
									<input type="file" class="form-control" name="desktop_banner_4" id="desktop_banner_4" required>
								</div>

								<div class="form-group">
									<label for="desktop_banner_3">Desktop Banner 5</label>
									<input type="file" class="form-control" name="desktop_banner_5" id="desktop_banner_5" required>
								</div>


								<div class="row">
									<div class="col-md-6">

										<div class="form-group">
											<label for="Survey_icon_1">Survey Icon 1</label>
											<input type="file" class="form-control" name="Survey_icon_1" id="Survey_icon_1" required>
										</div>

										<div class="form-group">
											<label for="Survey_icon_2">Survey Icon 2</label>
											<input type="file" class="form-control" name="Survey_icon_2" id="Survey_icon_2" required>
										</div>


										<div class="form-group">
											<label for="Survey_icon_3">Survey Icon 3</label>
											<input type="file" class="form-control" name="Survey_icon_3" id="Survey_icon_3" required>
										</div>

										<div class="form-group">
											<label for="Survey_icon_3">Survey Icon 4</label>
											<input type="file" class="form-control" name="Survey_icon_4" id="Survey_icon_4" required>
										</div>

										<div class="form-group">
											<label for="Survey_icon_5">Survey Icon 5</label>
											<input type="file" class="form-control" name="Survey_icon_5" id="Survey_icon_5" required>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="Survey_desc_1">Survey Description 1</label>
											<textarea class="form-control" name="Survey_desc_1" id="Survey_desc_1" rows="3" required></textarea>
										</div>


										<div class="form-group">
											<label for="Survey_desc_2">Survey Description 2</label>
											<textarea class="form-control" name="Survey_desc_2" id="Survey_desc_2" rows="3" required></textarea>
										</div>

										<div class="form-group">
											<label for="Survey_desc_3">Survey Description 3</label>
											<textarea class="form-control" name="Survey_desc_3" id="Survey_desc_3" rows="3" required></textarea>
										</div>

										<div class="form-group">
											<label for="Survey_desc_3">Survey Description 4</label>
											<textarea class="form-control" name="Survey_desc_4" id="Survey_desc_4" rows="3" required></textarea>
										</div>

										<div class="form-group">
											<label for="Survey_desc_5">Survey Description 5</label>
											<textarea class="form-control" name="Survey_desc_5" id="Survey_desc_5" rows="3" required></textarea>
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="Mobile_banner_1">Mobile Banner 1</label>
									<input type="file" class="form-control" name="Mobile_banner_1" id="Mobile_banner_1" required>
								</div>

								<div class="form-group">
									<label for="Mobile_banner_1">Mobile Banner 2</label>
									<input type="file" class="form-control" name="Mobile_banner_2" id="Mobile_banner_2" required>
								</div>

								<div class="form-group">
									<label for="Mobile_banner_1">Mobile Banner 3</label>
									<input type="file" class="form-control" name="Mobile_banner_3" id="Mobile_banner_3" required>
								</div>

								<div class="form-group">
									<label for="Mobile_banner_1">Mobile Banner 4</label>
									<input type="file" class="form-control" name="Mobile_banner_4" id="Mobile_banner_4" required>
								</div>

								<div class="form-group">
									<label for="Mobile_banner_1">Mobile Banner 5</label>
									<input type="file" class="form-control" name="Mobile_banner_5" id="Mobile_banner_5" required>
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