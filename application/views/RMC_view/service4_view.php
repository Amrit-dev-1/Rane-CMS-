<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<?php foreach ($seo as $meta) : ?>
	<?php if ($meta->id == 4) : ?>
		<title><?php echo $meta->meta_title; ?></title>
		<meta name="description" content="<?php echo $meta->meta_description; ?>">
		<?php echo $meta->meta_description; ?>
	<?php endif; ?>
<?php endforeach; ?>


<link rel="stylesheet" href="<?php base_url() ?>assets/css/external.css">





<body>
	<div class="banner-service-4">
		<div class="banner-back-service-4" data-aos="fade-right" data-aos-duration="2000">
			<h1 class="banner-title">Master <span class="decoration"> Plannin</span>g</h1>
			<BR>
			<p class="banner-para">Empowering Governance through Masterful Mapping Strategies. </p>
		</div>
	</div>
	<br>
	<div class="container-para">
		<p>Our company specializes in providing an extensive array of master planning services exclusively designed for government and semi-government organizations. We pride ourselves on our holistic approach to urban development and land management. This includes in-depth urban planning that optimizes infrastructure and land utilization, meticulous layout designs, thorough assessments of existing land use plans to identify areas for improvement, and the preparation of comprehensive proposed land use plans that ensure future development aligns with demographic shifts, economic trends, and sustainability objectives. Our services are dedicated to assisting these organizations in shaping their development initiatives, making communities more vibrant, livable, and sustainable, adhering to the highest standards of urban planning and land management.</p>
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
							<h4 class="survey-head2 client-project">Client Projects</h4>
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
							</div>
							<h4 class="Key">Key Features</h4>
							<div class="row">
								<div class="col-sm-6 col-md-6" style="display: flex;">
									<i class="fa-solid fa-circle dot-1"></i> <br>
									<p><span class="decor"><?php echo $item->key_feature_1; ?></span></p>
								</div>
								<div class="col-sm-6 col-md-6" style="display: flex;">
									<i class="fa-solid fa-circle dot-1"></i> <br>
									<p><span class="decor"><?php echo $item->key_feature_2; ?></span></p>
								</div>
							</div>
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
								<h4 class="survey-head2 client-project">Client Projects</h4>
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
								</div>
								<h4 class="Key">Key Features</h4>
								<div class="row">
									<div class="col-sm-6 col-md-6" style="display: flex;">
										<i class="fa-solid fa-circle dot-1"></i> <br>
										<p><span class="decor"><?php echo $item->key_feature_1; ?></span></p>
									</div>
									<div class="col-sm-6 col-md-6" style="display: flex;">
										<i class="fa-solid fa-circle dot-1"></i> <br>
										<p><span class="decor"><?php echo $item->key_feature_2; ?></span></p>
									</div>
								</div>
							</div>

						</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
	<br>

	<!-- Other services start -->

	<?php
	$this->load->view('RMC_view/other_service_view.php');
	?>

	<!-- Other services end -->

	<div class="container-8">
		<div class="row01"><br>
			<h4 style="  
			    margin-top: 10%;
 			   font-size: 30px;
			">There's a lot more to us, Let's get Started</h4><br><br>
			<button class="btns active-collaborate" data-toggle="modal" data-target="#myModal">Collaborate With Us <i class="fas fa-arrow-circle-right"></i></button>
		</div>
	</div>


</body>


<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<!--Uncomment this line-->
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>