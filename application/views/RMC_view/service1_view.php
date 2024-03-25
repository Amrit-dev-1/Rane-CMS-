<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
	<title>
		Top Land Surveyor in Mumbai, Navi Mumbai, Maharashtra
		<link rel="stylesheet" href="<?php base_url() ?>assets/css/external.css">
	</title>
	<meta name="description" content="Land survey, Revenue Survey, GPS, GIS, Drone Survey, SRA Plot survey, Licensed Surveyor, location survey, Demarcation of plot, earthwork calculation ">
	<link rel="stylesheet" href="<?php base_url(); ?>assets/css/external.css">

</head>



<div class="banner-service-1">
	<div class="banner-back banner-back-service-1" data-aos="fade-right" data-aos-duration="2000">
		<h1 class="banner-title">Engineering <span class="decoration"> Survey </span></h1>
		<BR>
		<p class="banner-para">Crafting Tomorrow's Infrastructure with Premier Civil Engineering Consulting, Surveying, and Design Excellence.</p>
	</div>
</div>
<br>
<div class="container-para">
	<p>At our company, we have licensed surveyors who are certified experts in providing a wide range of engineering surveying solutions. We also boast a team of qualified engineers, GIS experts, and retired staff from the Revenue Department of Maharashtra, bringing a wealth of experience to our services. With proficiency in utilizing the latest technologies such as DGPS, ETS, and drones, we deliver precise and efficient surveying services for land surveying, topographic mapping, and alignment surveys. Whether for government, semi-government, or private infrastructure projects, our team is equipped to meet your surveying needs with professionalism and expertise. Our comprehensive suite of services includes topographic land surveys, contour surveys, and CAD deliverables, which can be offered separately or in combination to best suit your project requirements.</p>
</div>



<div class="container-1">
	<?php if (!empty($services)) : ?>
		<?php $service = $services[0]; ?>
		<div class="row">
			<div class="col-md-12 col-lg-6 col-xl-6">
				<h2 class="survey-head for-mobile">
					<span class="decoration"><?php echo $service->title; ?></span>
				</h2>
				<img src="<?php echo base_url('uploads/Main-img/' . $service->main_img); ?>" class="contout img-fluid">
			</div>
			<div class="col-md-12 col-lg-6 col-xl-6">
				<h4 class="survey-head for-desktop">
					<span class="decoration"><?php echo $service->title; ?></span>
				</h4>
				<p class="survey-para"><?php echo $service->content; ?></p>
				<h4 class="survey-head2 client-project">Client Projects</h4>
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-6">
							<div class="row">
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_1); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_1; ?></p>
									</div>
								</div>
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_2); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_2; ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<div class="row">
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_3); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_3; ?></p>
									</div>
								</div>
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_4); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_4; ?></p>
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
						<p><span class="decor"><?php echo $service->key_feature_1; ?></span></p>
					</div>
					<div class="col-sm-6 col-md-6" style="display: flex;">
						<i class="fa-solid fa-circle dot-1"></i> <br>
						<p><span class="decor"><?php echo $service->key_feature_2; ?></span></p>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>



<br>

<div class="container-2">
	<div class="row reverse">

		<?php if (!empty($services)) : ?>
			<?php $service = $services[1]; ?>


			<div class="col-md-12 col-lg-6 col-xl-6">
				<h4 class="survey-head for-desktop">
					<span class="decoration"><?php echo $service->title; ?></span>
				</h4>
				<p class="survey-para"><?php echo $service->content; ?></p>
				<h4 class="survey-head2 client-project">Client Projects</h4>
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-6">
							<div class="row">
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_1); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_1; ?></p>
									</div>
								</div>
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_2); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_2; ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<div class="row">
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_3); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_3; ?></p>
									</div>
								</div>
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_4); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_4; ?></p>
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
						<p><span class="decor"><?php echo $service->key_feature_1; ?></span></p>
					</div>
					<div class="col-sm-6 col-md-6" style="display: flex;">
						<i class="fa-solid fa-circle dot-1"></i> <br>
						<p><span class="decor"><?php echo $service->key_feature_2; ?></span></p>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-6 col-xl-6">
				<h4 class="survey-head3 for-mobile"> <span class="decoration"><?php echo $service->title; ?></span></h4>
				<img src="<?php echo base_url('uploads/Main-img/' . $service->main_img); ?>" class="contout img-fluid">
			</div>

		<?php endif; ?>
	</div>
</div>




<br>

<div class="container-3">
	<?php if (!empty($services)) : ?>
		<?php $service = $services[2]; ?>
		<div class="row">
			<div class="col-md-12 col-lg-6 col-xl-6">
				<h2 class="survey-head for-mobile">
					<span class="decoration"><?php echo $service->title; ?></span>
				</h2>
				<img src="<?php echo base_url('uploads/Main-img/' . $service->main_img); ?>" class="contout img-fluid">
			</div>
			<div class="col-md-12 col-lg-6 col-xl-6">
				<h4 class="survey-head for-desktop">
					<span class="decoration"><?php echo $service->title; ?></span>
				</h4>
				<p class="survey-para"><?php echo $service->content; ?></p>
				<h4 class="survey-head2 client-project">Client Projects</h4>
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-6">
							<div class="row">
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_1); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_1; ?></p>
									</div>
								</div>
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_2); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_2; ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<div class="row">
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_3); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_3; ?></p>
									</div>
								</div>
								<div class="col-6 mb-4">
									<div class="project-logo text-center">
										<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_4); ?>" class="proj-logo img-fluid">
										<p class="logo-dis text-center mb-0"><?php echo $service->client_des_4; ?></p>
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
						<p><span class="decor"><?php echo $service->key_feature_1; ?></span></p>
					</div>
					<div class="col-sm-6 col-md-6" style="display: flex;">
						<i class="fa-solid fa-circle dot-1"></i> <br>
						<p><span class="decor"><?php echo $service->key_feature_2; ?></span></p>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>
<br>
<div class="container-4">
<div class="row reverse">

<?php if (!empty($services)) : ?>
	<?php $service = $services[3]; ?>


	<div class="col-md-12 col-lg-6 col-xl-6">
		<h4 class="survey-head for-desktop">
			<span class="decoration"><?php echo $service->title; ?></span>
		</h4>
		<p class="survey-para"><?php echo $service->content; ?></p>
		<h4 class="survey-head2 client-project">Client Projects</h4>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6 col-xl-6">
					<div class="row">
						<div class="col-6 mb-4">
							<div class="project-logo text-center">
								<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_1); ?>" class="proj-logo img-fluid">
								<p class="logo-dis text-center mb-0"><?php echo $service->client_des_1; ?></p>
							</div>
						</div>
						<div class="col-6 mb-4">
							<div class="project-logo text-center">
								<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_2); ?>" class="proj-logo img-fluid">
								<p class="logo-dis text-center mb-0"><?php echo $service->client_des_2; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6">
					<div class="row">
						<div class="col-6 mb-4">
							<div class="project-logo text-center">
								<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_3); ?>" class="proj-logo img-fluid">
								<p class="logo-dis text-center mb-0"><?php echo $service->client_des_3; ?></p>
							</div>
						</div>
						<div class="col-6 mb-4">
							<div class="project-logo text-center">
								<img src="<?php echo base_url('uploads/Logo/' . $service->client_image_4); ?>" class="proj-logo img-fluid">
								<p class="logo-dis text-center mb-0"><?php echo $service->client_des_4; ?></p>
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
				<p><span class="decor"><?php echo $service->key_feature_1; ?></span></p>
			</div>
			<div class="col-sm-6 col-md-6" style="display: flex;">
				<i class="fa-solid fa-circle dot-1"></i> <br>
				<p><span class="decor"><?php echo $service->key_feature_2; ?></span></p>
			</div>
		</div>
	</div>

	<div class="col-md-12 col-lg-6 col-xl-6">
		<h4 class="survey-head3 for-mobile"> <span class="decoration"><?php echo $service->title; ?></span></h4>
		<img src="<?php echo base_url('uploads/Main-img/' . $service->main_img); ?>" class="contout img-fluid">
	</div>

<?php endif; ?>
</div>
</div><br>

<div class="container-5">
	<div class="row ">
		<div class="col-md-12 col-lg-6 col-xl-6">
			<h2 class="survey-head5 for-mobile"> <span class="decoration"> Drone S</span>urvey</h2>

			<img src="<?php base_url() ?>/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/Other-Images/Drone-Survey.webp" class="contout">

		</div>
		<div class="col-md-12 col-lg-6 col-xl-6">
			<h4 class="survey-head5 for-desktop"> <span class="decoration"> Drone S</span>urvey</h4>
			<!--<p class="survey-para">Our drone survey service leverages the latest drone technology to provide unparalleled aerial insights. Our fleet of drones is registered with the DGCA (Directorate General of Civil Aviation), ensuring compliance with safety and regulatory standards. With these advanced tools, we offer an array of surveying and mapping solutions, from land surveying and infrastructure inspections to environmental monitoring and more. Our commitment to using state-of-the-art drones, coupled with a dedication to safety and accuracy, makes us the go-to choice for high-quality aerial survey services.</p>-->
			<p class="survey-para">Our drone survey service stands out with the expertise of DGCA-approved licensed qualified drone pilots, ensuring a top-tier experience. Leveraging cutting-edge drone technology, our fleet is registered with the Directorate General of Civil Aviation (DGCA), guaranteeing compliance with rigorous safety and regulatory standards. This commitment to excellence extends to our comprehensive range of surveying and mapping solutions, covering everything from land surveying and infrastructure inspections to environmental monitoring. By combining state-of-the-art drones, DGCA-approved licensing, and an unwavering dedication to safety and precision, we've become the go-to choice for unparalleled aerial insights in high-quality survey services.</p>
			<h4 class="survey-head2 client-project ">Client Projects</h4>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-6 col-xl-6">
						<div class="row">
							<div class="col-6 mb-4">
								<div class="project-logo text-center">
									<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/MIDC Logo-01.png" class="proj-logo  img-fluid">
									<p class="logo-dis text-center mb-0">Pen 300 Acres</p>
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="project-logo text-center">
									<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/Mira-Bhayander Logo-01-01.png" class="proj-logo img-fluid">
									<p class="logo-dis text-center mb-0">Uttan 250 Acres</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-xl-6">
						<div class="row">
							<div class="col-6 mb-4">
								<div class="project-logo text-center">
									<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/Vasai-Virar Logo-01-01.png" class="proj-logo img-fluid">
									<p class="logo-dis text-center mb-0">Virar 250 Acres</p>
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="project-logo text-center">
									<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/Maharashtra Seal-01-01.png" class="proj-logo img-fluid">
									<p class="logo-dis text-center mb-0">Poladpur 870 Acres</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<h4 class="Key">Key Features</h4>
			<div class="row">
				<div class="col-sm-6 col-md-6" style="display: flex;">
					<i class="fa-solid fa-circle dot-1"></i> <Br>
					<p><span class="decor">Trained</span> Drone Pilots</p>
				</div>
				<div class="col-sm-6 col-md-6" style="display: flex;">
					<i class="fa-solid fa-circle dot-1"></i> <br>
					<p><span class="decor">Over 1000 </span>Hectares Surveyed by Our Team</p>
				</div>
			</div>
		</div>

	</div>
</div>
<br>

<div class="container-6">
	<div class="row reverse">

		<div class="col-md-12 col-lg-6 col-xl-6">
			<h2 class="survey-head3 for-desktop"> <span class="decoration">SRA Su</span>rvey</h2>
			<p class="survey-para">As an empanelled agency within the (Slum Rehabilitation Authority) SRA Mumbai, we offer comprehensive SRA surveys tailored to your specific needs. Our services encompass door-to-door biometric surveys and topographic surveys, ensuring a detailed understanding of the project area in alignment with both client and SRA requirements. What sets us apart is our commitment to precision, with all survey data submissions in the WGS 84 grid, meticulously GIS-mapped and coordinates referenced to the SRA's base stations. This dedication to accuracy and adherence to SRA standards make us the trusted choice for SRA surveys in the Mumbai Metropolitan Region, facilitating effective slum rehabilitation and urban development initiatives.</p>

			<h4 class="survey-head2 client-project ">Client Projects</h4>
			<div class="container">
				<div class="row">
					<!-- Desktop view: 4 columns -->
					<div class="col-md-3 d-none d-md-block">
						<div class="project-logo mb-4">
							<div class="img-1">
								<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/Hubtown Logo-01-01.png" class="proj-logo hubtown img-fluid">
								<p class="logo-dis2">Andheri 14 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-none d-md-block">
						<div class="project-logo mb-4">
							<div class="img-1">
								<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/Ashar Logo-01-01.png" class="proj-logo ashar img-fluid">
								<p class="logo-dis2">Thane 09 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-none d-md-block">
						<div class="project-logo mb-4">
							<div class="img-1">
								<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/Jangid Logo-01-01.png" class="proj-logo img-fluid">
								<p class="logo-dis3">Malad 05 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-none d-md-block">
						<div class="project-logo mb-4">
							<div class="img-1">
								<h4 class="four-logo">Mangal Moorti <br>Developers</h4>
								<p class="logo-dis2">Kurla 08 Acres</p>
							</div>
						</div>
					</div>

					<!-- Mobile view: 4 columns stacked -->
					<div class="col-6 d-block d-md-none">
						<div class="project-logo mb-4">
							<div class="img-1">
								<img src="<?php base_url() ?>assets/image/new ser/Hubtown_logo/Hubtown_logo.png" class="proj-logo  img-fluid">
								<p class="logo-dis2">Andheri 14 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-6 d-block d-md-none">
						<div class="project-logo mb-4">
							<div class="img-1">
								<img src="<?php base_url() ?>assets/image/new ser/ashar-logo/ashar-logo.png" class="proj-logo  img-fluid">
								<p class="logo-dis2">Thane 09 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-6 d-block d-md-none">
						<div class="project-logo mb-4">
							<div class="img-1">
								<img src="<?php base_url() ?>assets/image/new ser/Jangid Logo/Jangid Logo.png" class="proj-logo img-fluid">
								<p class="logo-dis2">Malad 05 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-6 d-block d-md-none">
						<div class="project-logo mb-4">
							<div class="img-1">
								<h4 class="four-logo">Mangal Moorti <br>Developers</h4>
								<p class="logo-dis2">Kurla 08 Acres</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<h4 class="Key">Key Features</h4>
			<div class="row">
				<div class="col-sm-6 col-md-6" style="display: flex;">
					<i class="fa-solid fa-circle dot-1"></i> <Br>
					<p><span class="decor">Government Empanelment </span></p>
				</div>
				<div class="col-sm-6 col-md-6" style="display: flex;">
					<i class="fa-solid fa-circle dot-1"></i> <br>
					<p><span class="decor"> Pioneering</span> in Mumbai</p>
				</div>
			</div>
		</div>

		<div class="col-md-12 col-lg-6 col-xl-6">
			<h4 class="survey-head3 for-mobile"> <span class="decoration">SRA Su</span>rvey</h4>

			<img src="<?php base_url() ?>/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/Other-Images/SRA-(Slum-Rehabilitation-Authority)-copy.webp" class="contout">

		</div>

	</div>
</div>
<br>

<div class="container-7">
	<div class="row">
		<div class="col-md-12 col-lg-6 col-xl-6">
			<h2 class="survey-head6 for-mobile"> Licensed Surveyor Certified <br> <span class="decoration">Plot Su</span>rvey </h2>

			<img src="<?php base_url() ?>assets/new-img/All-Website-Images/Licensed-Survey-Certfied-Newer.webp" class="contout">

		</div>
		<div class="col-md-12 col-lg-6 col-xl-6">
			<h4 class="survey-head6 for-desktop"> Licensed Surveyor Certified <br> <span class="decoration">Plot Su</span>rvey </h4>
			<p class="survey-para">Our specialized services involve certifying precise plot coordinates and site elevation, authenticated by an experienced licensed surveyor. This authenticated certificate is crucial for securing various building approval certifications. Additionally, we present all survey data in CAD format, facilitating smooth integration into your design and planning processes and ensuring adherence to rigorous authentication standards.</p>

			<h4 class="survey-head2 client-project ">Client Projects</h4>
			<div class="container">
				<div class="row">
					<!-- For Desktop View: 4x1 Grid -->
					<div class="col-md-3 d-none d-md-block">
						<div class="project-logo mb-4">
							<div class="img-1 text-center">
								<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/HCC-01.png" class="proj-logo hcc img-fluid">
								<p class="logo-dis">Vikhroli 35 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-none d-md-block">
						<div class="project-logo mb-4">
							<div class="img-1 text-center">
								<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/Kalpaturu Logo-01-01.png" class="proj-logo kalpa img-fluid">
								<p class="logo-dis">Thane 05 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-none d-md-block">
						<div class="project-logo mb-4">
							<div class="img-1 text-center">
								<h4 class="four-logo">India Land<br> Hotels Mumbai <br>Private Limited</h4>
								<p class="logo-dis">Mahim 05 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-none d-md-block">
						<div class="project-logo mb-4">
							<div class="img-1 text-center">
								<h4 class="four-logo">Siddhi Real Estate Developers</h4>
								<p class="logo-dis">Thane 02 Acres</p>
							</div>
						</div>
					</div>

					<!-- For Mobile View: 4x4 Grid -->
					<div class="col-6 d-block d-md-none">
						<div class="project-logo mb-4">
							<div class="img-1 text-center">
								<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/HCC-01.png" class="proj-logo hcc img-fluid">
								<p class="logo-dis">Vikhroli 35 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-6 d-block d-md-none">
						<div class="project-logo mb-4">
							<div class="img-1 text-center">
								<img src="<?php base_url() ?>assets/image/All-Logos-PNGs/Kalpaturu Logo-01-01.png" class="proj-logo kalpa img-fluid">
								<p class="logo-dis">Thane 05 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-6 d-block d-md-none">
						<div class="project-logo mb-4">
							<div class="img-1 text-center">
								<h4 class="four-logo">India Land<br> Hotels Mumbai <br>Private Limited</h4>
								<p class="logo-dis">Mahim 05 Acres</p>
							</div>
						</div>
					</div>
					<div class="col-6 d-block d-md-none">
						<div class="project-logo mb-4">
							<div class="img-1 text-center">
								<h4 class="four-logo">Siddhi Real Estate Developers</h4>
								<p class="logo-dis">Thane 02 Acres</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<h4 class="Key">Key Features</h4>
			<div class="row">
				<div class="col-sm-6 col-md-6" style="display: flex;">
					<i class="fa-solid fa-circle dot-1"></i> <Br>
					<p><span class="decor">Expert Liaison</span> Capabilities </p>
				</div>
				<div class="col-sm-6 col-md-6" style="display: flex;">
					<i class="fa-solid fa-circle dot-1"></i> <br>
					<p><span class="decor">Proficient </span> in Submissions & Fillings</p>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- Other services start -->

<?php
$this->load->view('RMC_view/other_service_view.php');
?>

<!-- Other services end -->

<div class="container-8">
	<div class="row01"><br>
		<h4 style="margin-top: 10%; font-size: 30px;">There's a lot more to us, Let's get Started</h4><br><br>

		<button class="btns active-collaborate" data-toggle="modal" data-target="#myModal">Collaborate With Us <i class="fas fa-arrow-circle-right"></i></button>
	</div>
</div>


<!-- JavaScript -->
<!--Uncomment this line-->
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>