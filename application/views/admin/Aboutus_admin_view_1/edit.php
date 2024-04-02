<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<head>
<link rel="stylesheet" href="https://cdn.ckeditor.com/4.16.2/standard-all/contents.css">

</head>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
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
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- SELECT2 EXAMPLE -->
			<div class="card card-default">
				<div class="card-header d-none">
					<h3 class="card-title">Select2 (Default Theme)</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove">
							<i class="fas fa-times"></i>
						</button>
					</div>
				</div>
				<!-- /.card-header -->
				<!--<div class="card-body">-->
				<!-- form start -->
				<form id="demo-form2" action="<?php echo base_url(); ?>admin/About_Us_Admin_1/edit" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

					<input type="hidden" id="id" required="required" class="form-control" name="id" value="<?php echo $service['id']; ?>">


					<!-- <div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="main-img">Main Image</label>
						<div class="col-md-6 col-sm-6">
		
							<img src="<?php echo base_url('uploads/Main-img/' . $service['main_img']); ?>" alt="Main Image" width="100">
							<br>

							<input type="file" id="main-img" class="form-control" name="main-img">
							<div class="error"><?php echo form_error('main-img'); ?></div>
						</div>
					</div> -->


					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">our_story_titile<span class="required">*</span></label>

						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="title" required="required" class="form-control" name="our_story_titile" value="<?php echo $service['our_story_titile']; ?>">
							<div class="error"><?php echo form_error('our_story_titile'); ?></div>
						</div>

					</div>

					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">Our Story Para</label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="our_story_para"><?php echo $service['our_story_para']; ?></textarea>
							<div class="error"><?php echo form_error('our_story_para'); ?></div>
						</div>

					</div>



					<!-- vision -->

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">our_vision_title<span class="required">*</span></label>

						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="title" required="required" class="form-control" name="our_vision_title" value="<?php echo $service['our_vision_title']; ?>">
							<div class="error"><?php echo form_error('our_vision_title'); ?></div>
						</div>

					</div>

					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">Our vision Para</label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="our_vision_para"><?php echo $service['our_vision_para']; ?></textarea>
							<div class="error"><?php echo form_error('our_vision_para'); ?></div>
						</div>

					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="main-img">Our vision image</label>
						<div class="col-md-6 col-sm-6">

							<img src="<?php echo base_url('uploads/About-us/' . $service['our_vision_img']); ?>" alt="Main Image" width="100">
							<br>

							<input type="file" id="our_vision_img" class="form-control" name="our_vision_img">
							<div class="error"><?php echo form_error('main-img'); ?></div>
						</div>
					</div>
					<!-- vision -->



					<!-- mission -->

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">our_mission_title<span class="required">*</span></label>

						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="our_mission_title" required="required" class="form-control" name="our_mission_title" value="<?php echo $service['our_mission_title']; ?>">
							<div class="error"><?php echo form_error('our_mission_title'); ?></div>
						</div>

					</div>

					<div class="item form-group">

						<label for="content" class="col-form-label col-md-3 col-sm-3 label-align">Our Mission Para</label>

						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" name="our_mission_para"><?php echo $service['our_mission_para']; ?></textarea>
							<div class="error"><?php echo form_error('our_mission_para'); ?></div>
						</div>

					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="our_mission_img">Our vision image</label>
						<div class="col-md-6 col-sm-6">

							<img src="<?php echo base_url('uploads/About-us/' . $service['our_mission_img']); ?>" alt="Main Image" width="100">
							<br>

							<input type="file" id="our_mission_img" class="form-control" name="our_mission_img">
							<div class="error"><?php echo form_error('our_mission_img'); ?></div>
						</div>

					</div>
					<div class="item form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>

					<!-- mission -->




				</form>
				<!--</div>-->
				<!-- /.row -->
				<!-- /.row -->
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>


<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('our_story_para');
    CKEDITOR.replace('our_vision_para');
    CKEDITOR.replace('our_mission_para');
</script>
