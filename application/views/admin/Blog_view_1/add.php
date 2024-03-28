<head>
<link rel="stylesheet" href="https://cdn.ckeditor.com/4.16.2/standard-all/contents.css">

</head>

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

				<form action="<?php echo base_url(); ?>admin/Blog_1_Admin/add" method="POST" enctype="multipart/form-data">



					<div class="card-body">
						<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label for="Blog_title"> Blog Title </label>
									<input type="text" class="form-control" name="Blog_title" id="Blog_title" required>
								</div>


								<div class="form-group">
									<label for="Blog_Img"> Blog Image </label>
									<input type="file" class="form-control" name="Blog_Img" id="Blog_Img" required>
								</div>


								<div class="form-group">
									<label for="Blog_main_content"> Blog Content </label>
									<textarea class="form-control" name="Blog_main_content" id="Blog_main_content" required></textarea>
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

<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('Blog_main_content');
</script>