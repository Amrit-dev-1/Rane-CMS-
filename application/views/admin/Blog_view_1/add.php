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

				<form id="demo-form2" action="<?php echo base_url(); ?>admin/Blog_1_Admin/add" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

					<input type="hidden" id="id" required="required" class="form-control" name="id" >



					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Blog_title"> Blog title <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="Blog_title" required="required" class="form-control" name="Blog_title" >
							<!-- <div class="error"><?php echo form_error('Blog_title'); ?></div> -->
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Blog_Img">Blog Images </label>
						<div class="col-md-6 col-sm-6">
							<!-- <img src="<?php echo base_url('uploads/blog_images/' . $service['Blog_Img']); ?>" alt="Main Image" width="100"> -->
							<br>

							<input type="file" id="Blog_Img" class="form-control" name="Blog_Img">
							<!-- <div class="error"><?php echo form_error('Blog_Img'); ?></div> -->
						</div>
					</div>


					<div class="item form-group">
						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align"> blog Content  </label>
						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="Blog_main_content"></textarea>
							<!-- <div class="error"><?php echo form_error('Blog_main_content'); ?></div> -->
						</div>
					</div>


					<div class="item form-group">
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