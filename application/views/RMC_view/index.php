<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
    <title>
        Expert Land Surveyor & Acquisition Services
    </title>
    <meta name="description" content="We Provide Land Survey Solutions, Land Acquisition, Engineering Survey, DPR,Construction Project Planning, Building Plan Approval Services in Mumbai, Navi Mumbai, Maharashtra  ">
</head>

<body>




    <section>

        <?php if (!empty($service)) : ?>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($service as $key => $banner_item) : ?>

                    <?php endforeach; ?>
                    <!-- first banner -->
                    <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>">
                        <img class="d-block w-100 for-desktop-banner" src="<?php echo base_url($banner_item['desktop_banner_1']); ?>" alt="Banner Image">
                        <img class="d-block w-100 for-mobile-banner" src="<?php echo base_url($banner_item['Mobile_banner_1']); ?>" alt="Mobile Banner Image">
                        <a href="<?php echo base_url('Contact_us'); ?>" class="banner-button">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- second banner -->
                    <div class="carousel-item">
                        <img class="d-block w-100 for-desktop-banner" src="<?php echo base_url($banner_item['desktop_banner_2']); ?>" alt="Banner Image">
                        <img class="d-block w-100 for-mobile-banner" src="<?php echo base_url($banner_item['Mobile_banner_2']); ?>" alt="Mobile Banner Image">
                        <a href="<?php echo base_url('Contact_us'); ?>" class="banner-button">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- third banner -->
                    <div class="carousel-item">
                        <img class="d-block w-100 for-desktop-banner" src="<?php echo base_url($banner_item['desktop_banner_3']); ?>" alt="Banner Image">
                        <img class="d-block w-100 for-mobile-banner" src="<?php echo base_url($banner_item['Mobile_banner_3']); ?>" alt="Mobile Banner Image">
                        <a href="<?php echo base_url('Contact_us'); ?>" class="banner-button">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>


                    <!-- 4th banner -->
                    <div class="carousel-item">
                        <img class="d-block w-100 for-desktop-banner" src="<?php echo base_url($banner_item['desktop_banner_4']); ?>" alt="Banner Image">
                        <img class="d-block w-100 for-mobile-banner" src="<?php echo base_url($banner_item['Mobile_banner_4']); ?>" alt="Mobile Banner Image">
                        <a href="<?php echo base_url('Contact_us'); ?>" class="banner-button">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <!-- 5th banner -->
                    <div class="carousel-item">
                        <img class="d-block w-100 for-desktop-banner" src="<?php echo base_url($banner_item['desktop_banner_5']); ?>" alt="Banner Image">
                        <img class="d-block w-100 for-mobile-banner" src="<?php echo base_url($banner_item['Mobile_banner_5']); ?>" alt="Mobile Banner Image">
                        <a href="<?php echo base_url('Contact_us'); ?>" class="banner-button">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>


                <a class="carousel-control-prev black" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    </section>



    <!-- carousel end -->



    <!-- icon group-1 start -->
    <section class="icon-group-1">


        <div class="container">



            <div class="grp-1">
                <div class="row" data-aos="fade-up" data-aos-duration="1000">

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Engineering_survey_of_land'); ?>">
                            <div class="text-center-logo">
                                <div class="con">
                                    <img src="<?php echo base_url($banner_item['Survey_icon_1']); ?>" alt="Survey Icon" class="rev img-responsive">
                                </div>
                                <p class="fon"><?php echo $banner_item['Survey_desc_1'] ?? ''; ?></p>
                            </div>
                        </a>
                    </div>



                    <div class="col-md-2">
                        <a href="<?php echo base_url('Engineering_survey_of_land'); ?>">
                            <div class="text-center-logo">
                                <div class="con">
                                    <img src="<?php echo base_url($banner_item['Survey_icon_2']); ?>" alt="Survey Icon" class="rev img-responsive">
                                </div>
                                <p class="fon"><?php echo $banner_item['Survey_desc_2'] ?? ''; ?></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php base_url() ?>Land_record_verification_and_modifcation">
                            <div class="text-center-logo">
                                <div class="con">
                                    <img src="<?php echo base_url($banner_item['Survey_icon_3']); ?>" alt="Survey Icon" class="rev img-responsive">
                                </div>
                                <p class="fon"><?php echo $banner_item['Survey_desc_3'] ?? ''; ?></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php base_url() ?>Architectural_services">
                            <div class="text-center-logo">
                                <div class="con">
                                    <img src="<?php echo base_url($banner_item['Survey_icon_4']); ?>" alt="Survey Icon" class="rev img-responsive">
                                </div>
                                <p class="fon"><?php echo $banner_item['Survey_desc_4'] ?? ''; ?></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php base_url() ?>Geospatial_and_customized_mapping_solution">
                            <div class="text-center-logo">
                                <div class="con">
                                    <img src="<?php echo base_url($banner_item['Survey_icon_5']); ?>" alt="Survey Icon" class="rev img-responsive">
                                </div>
                                <p class="fon"><?php echo $banner_item['Survey_desc_5'] ?? ''; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- icon group-1 end -->

<?php else : ?>
    <p>No banners available.</p>
<?php endif; ?>
<!-- about-banner for desktop start -->

<?php if (!empty($service_2)) : ?>
    <?php foreach ($service_2 as $key => $banner_item_2) : ?>
        <section class="desktop-view-section">
            <div class="about-banner">
                <div class="about-description">
                    <h2 class="abt-title">About US</h2><br>
                    <?php if (!empty($banner_item_2['About_us_desc'])) : ?>
                        <p class="about-para"><?php echo $banner_item_2['About_us_desc']; ?></p>
                    <?php else : ?>
                        <p>About us description not available.</p>
                    <?php endif; ?>
                    <p class="about-para">This expansion led to further growth in land acquisition, infrastructure planning, & design. Anticipating future demands, the company established an IT cell for GIS solutions in 2014 to meet the emerging consumer needs in application development related to mapping technology.</p><br>
                    <a href="<?php echo base_url(); ?>About_us">
                        <button class="read-about-us-btn"> Read more </button>
                    </a>
                </div>
            </div>
        </section>

        <!-- about-banner for mobile start -->
        <section class="mobile-view" data-aos="zoom-out-up" data-aos-duration="2000">

            <div class="about-banner-2">

                <div class="about-description">

                    <h4 class="abt-title" style="color: white;">About US</h4><br>
                    <p style="color: white;">Founded in 1995 Director Mr. Manmohan B. Rane, Specializes in providing precise land survey data for both private & government agencies. In 2002, the company expanded its services to include city survey work for various Maharashtra corporations, successfully completing 8 municipal city survey projects</p>

                    <p style="color: white;">This expansion led to further growth in land acquisition, infrastructure planning, & design. Anticipating future demands, the company established an IT cell for GIS solutions in 2014 to meet the emerging consumer needs in application development related to mapping technology.</p><br>
                    <a href="<?php echo base_url(); ?>About_us">
                        <buton class="read-about-us-btn"> Read more </button>
                    </a>

                </div>


            </div>

        </section>
        <!-- about-banner for mobile end -->
    <?php endforeach; ?>
<?php else : ?>
    <p>No banners available.</p>
<?php endif; ?>


<!-- Our Services start -->
<section data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
    <div class="container-fluid">

        <div class="container-fluid text-center">
            <!--<h4 class="about_headings text-center"><strong>-->
            <!--        <span class="decoration">Our</span><span> Services</span>-->
            <!--    </strong>-->
            <!--</h4>-->

            <h2 class="about_headings"><strong>
                    <span class="decoration">Our</span><span> Services</span></strong>
            </h2>
            <div class="row services-icon">
                <?php if (!empty($service_3)) : ?>
                    <?php $count = count($service_3); ?>
                    <?php for ($i = 0; $i < min(4, $count); $i++) : ?>
                        <?php $item = $service_3[$i]; ?>
                        <div class="col-md-6 col-sm-3 col-xl-3">
                            <div class="text-center-logo1">
                                <div class="con">
                                    <img src="<?php echo base_url() . $item['our_service_icon']; ?>" alt="Service Icon" class="other-service-icon-hp">
                                </div>
                                <p class="fon-head"><?php echo $item['our_service_title']; ?></p>
                                <p class="fon-text"><?php echo $item['our_service_desc']; ?></p>
                            </div>
                        </div>
                    <?php endfor; ?>

                    <?php for ($i = 4; $i < min(8, $count); $i++) : ?>
                        <?php $item = $service_3[$i]; ?>
                        <div class="col-md-6 col-sm-3 col-xl-3">
                            <div class="text-center-logo1">
                                <div class="con">
                                    <img src="<?php echo base_url() . $item['our_service_icon']; ?>" alt="Service Icon" class="other-service-icon-hp">
                                </div>
                                <p class="fon-head"><?php echo $item['our_service_title']; ?></p>
                                <p class="fon-text"><?php echo $item['our_service_desc']; ?></p>
                            </div>
                        </div>
                    <?php endfor; ?>
                <?php else : ?>
                    <div class="col-md-12">
                        <p>No services available.</p>
                    </div>
                <?php endif; ?>
            </div>



            <br>
    


        </div>
        <br>
        <div class="read">
            <center><a class="btn-2" href="<?php base_url(); ?>Top_land_survey">Read More </a></center>
        </div>
    </div>

</section>

<!-- Our Services end -->

<bR><br>
<!-- properties sections start -->
<section class="section-1" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">

    <div class="contaner-fluid">

        <!-- cards sections start  -->

        <?php if (!empty($service_2)) : ?>
            <?php foreach ($service_2 as $key => $banner_item_2) : ?>
                <section>

                    <div class="container">
                        <h2 class="about_headings"><strong>
                                <span class="decoration">Pro</span>perties </strong>
                        </h2>
                        <div class="container-cards">

                            <div class="row">

                                <div class="col-lg-4 col-md-4 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <!-- <a href="<?php base_url(); ?>#"> -->
                                    <div class="card" data-toggle="modal" data-target="#comingSoonModal">
                                        <img src="<?php base_url() ?><?php echo $banner_item_2['Properties_card_image_1']; ?>" class="image">

                                        <div class="overlay">
                                            <h2 class="mytop"><?php echo $banner_item_2['Properties_card_title_1']; ?></h2>

                                        </div>
                                        <button class="read-more-button read-btn">Read More <i class='fas fa-arrow-circle-right' style='font-size:18px'></i></button>
                                        </a>
                                    </div>
                                </div>
                                <!-- </a> -->
                                <br><Br>
                                <div class="col-lg-4 col-md-4 mb-4 " data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <!-- <a href="<?php base_url(); ?>#"> -->

                                    <div class="card" data-toggle="modal" data-target="#comingSoonModal">
                                        <img src="<?php base_url() ?><?php echo $banner_item_2['Properties_card_image_2']; ?>" class="image">

                                        <div class="overlay">
                                            <h2 class="mytop"><?php echo $banner_item_2['Properties_card_title_2']; ?></h2>

                                        </div>
                                        <button class="read-more-button read-btn">Read More <i class='fas fa-arrow-circle-right' style='font-size:18px'></i></button>
                                    </div>
                                </div>
                                <!-- </a> -->
                                <br><br>
                                <div class="col-lg-4 col-md-4 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <!-- <a href="<?php base_url(); ?>#"> -->

                                    <div class="card" data-toggle="modal" data-target="#comingSoonModal">
                                        <img src="<?php base_url() ?><?php echo $banner_item_2['Properties_card_image_3']; ?>" class="image">

                                        <div class="overlay">
                                            <h2 class="mytop"><?php echo $banner_item_2['Properties_card_title_3']; ?></h2>

                                        </div>
                                        <!-- <p class="card_text details">Properties for For Joint Development </p> -->
                                        <button class="read-more-button read-btn">Read More <i class='fas fa-arrow-circle-right' style='font-size:18px'></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No banners available.</p>
        <?php endif; ?>
        <!-- cards sections ends   -->




    </div>
    </div>
    </div>
    <br><br>
</section>

<!-- properties sections end -->




<?php if (!empty($service_2)) : ?>
    <?php foreach ($service_2 as $key => $banner_item_2) : ?>
        <!-- Why Choose Us section start -->
        <section>
            <div class="banner">
                <div class="container02">

                    <h1 class="about_headings"><strong><span class="decoration"> Why </span>Choose Us
                        </strong>
                    </h1>


                    <strong>
                        <span class="head4"><span class="decoration"><?php echo $banner_item_2['Whychooseus_head_1']; ?></span><br>
                    </strong>
                    <p class="font2"><?php echo $banner_item_2['Whychooseus_desc_1']; ?></p>


                    <strong>
                        <span class="head4"><span class="decoration"><?php echo $banner_item_2['Whychooseus_head_2']; ?></span>
                    </strong>
                    <p class="font2"><?php echo $banner_item_2['Whychooseus_desc_2']; ?></p>


                    <strong>
                        <span class="head4"><span class="decoration"><?php echo $banner_item_2['Whychooseus_head_3']; ?></span>
                    </strong>
                    <p class="font2"><?php echo $banner_item_2['Whychooseus_desc_3']; ?></p>


                    <strong>
                        <span class="head4"><span class="decoration"><?php echo $banner_item_2['Whychooseus_head_4']; ?></span>

                    </strong>
                    <p class="font2"><?php echo $banner_item_2['Whychooseus_desc_4']; ?></p>


                    <strong>
                        <span class="head4"><span class="decoration"><?php echo $banner_item_2['Whychooseus_head_5']; ?></span>

                    </strong>
                    <p class="font2"><?php echo $banner_item_2['Whychooseus_desc_5']; ?></p>



                    <strong>
                        <span class="head4"><span class="decoration"><?php echo $banner_item_2['Whychooseus_head_6']; ?></span>

                    </strong>
                    <p class="font2"><?php echo $banner_item_2['Whychooseus_desc_6']; ?></p>



                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php else : ?>
    <p>No banners available.</p>
<?php endif; ?>
<!-- Why Choose Us section end -->

<section>
    <div class="connect-project">

        <div class="container-connect" style="padding: 0 20px 0 20px; margin: auto;">
            <div class="project">
                <!-- <img src="assets/image/Image 10/Image 10.png" class="connect"> -->
                <div class="text-overlay">

                    <h3>We Are Ready to Start Your Project</h3><br>
                    <!-- <p class="ready">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu urna<br> convallis, fermentum neque sed, suscipit risus.</p> -->
                    <br>
                    <a class="btn-3" href="<?php base_url(); ?>Contact_us ">Connect</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!--<h4><span class="decoration">Our </span>Client</h4>-->
<!--<h4 class="headings"><strong><span style="font-weight: 600;"><span class="decoration"> Our</span> Client </span>-->
<!--    </strong>-->
<!--</h4>-->




<?php
$this->load->view('RMC_view/client_view.php');
?>



<section class="Collaborate">
    <div class="let-get-started">
        <!--<h4 class="h4-getstarted" style="font-weight:800">There's a lot more<br> to us Let's get Started</h4>-->
        <h2 class="home_headings"><strong><span style="font-weight: 600;"> There's a lot more<br> to us Let's get Started</span>
            </strong>
        </h2>

        <button type="button" class="btn btn-6" data-toggle="modal" data-target="#myModal">
            Collaborate With Us
        </button>
    </div>
</section>
<!-- Modal -->





</body>
<!-- footer area  -->

<div class="modal fade" id="comingSoonModal" tabindex="-1" role="dialog" aria-labelledby="comingSoonModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="comingSoonModalLabel">Coming Soon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Stay tuned for updates!</p>
            </div>

        </div>
    </div>
</div>
</div>


<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>