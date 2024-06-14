<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
    <link rel="stylesheet" href="<?php base_url(); ?>assets/css/About.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <title>
        Your Trusted Partner in Land Surveying - Rane Management Consultant
    </title>
    <meta name="description" content="We are Leading experts in land surveying, land acquisition, land records management, & updating in Maharashtra, trusted by the CR, MIDC, MSRDC, CIDCO">

</head>


<body style="background-color: white;">
    <div class="banner-about-page for-desktop-banner">
        <div class="banner-back"><br>
            <h1 class="banner-title"><span class="decoration">Abo</span>ut Us</h1>
            <BR>
            <p class="abt-ban">Our professional team provides independent research & consulting services</p>
        </div>
    </div>
    <div class="banner-about-mobile for-mobile-banner">
        <div class="banner-back">
            <h1 class="banner-title"><span class="decoration">Abo</span>ut Us</h1>
            <BR>
            <p class="abt-ban">Our professional team provides independent research & consulting services</p>
        </div>
    </div>

    <!-- hero banner  -->
    </div>
    <!-- our story start -->

    <?php if (!empty($services)) : ?>
        <?php foreach ($services as $service) : ?>
            <section class="all-sectios">

                <div class="container our-story-2">
                    <h2 class="about_headings pad-title">
                        <span class="decoration"><?php echo $service->our_story_titile; ?></span>
                    </h2>

                    <p>
                        <?php echo $service->our_story_para; ?>
                    </p>
                </div>
            </section>
            <!-- our story end -->



            <!-- vision start -->
            <section class="all-sectios">
                <div class="row reverse  ">
                    <div class="col-sm-12  col-lg-8 col-md-12">
                        <div class="ban_text4 our-story ">
                            <h2 class="about_headings for-desktop"><span class="decoration"><?php echo $service->our_vision_title; ?></span> </h2>
                            <?php echo $service->our_vision_para; ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 ">
                        <div class="ban_img">
                            <h2 class="about_headings for-mobile"><span class="decoration">Our</span> Vision</h2>

                            <img src="<?php echo base_url('uploads/About-us/' . $service->our_vision_img); ?>" alt="banner" class="ourvision-img" border="0" data-aos="fade-up" data-aos-duration="3000">
                        </div>
                    </div>
                </div>
            </section>
            <!-- vision end  -->



            <!-- our missions start -->
            <section class="all-sectios missions">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <h2 class="about_headings for-mobile mobile-align">
                            <span class="decoration"><?php echo $service->our_mission_title; ?></span>
                        </h2>
                        <div class="ban_img">
                            <img src="<?php echo base_url('uploads/About-us/' . $service->our_mission_img); ?>" alt="our-mission-img" class="Our-Mission-img" border="0" data-aos="fade-right" data-aos-duration="3000">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="ban_text3 our-story-2 ">
                            <h2 class="about_headings for-desktop ">
                                <span class="decoration"><?php echo $service->our_mission_title; ?></span>
                            </h2>
                            <p style="width:100%">
                                <?php echo $service->our_mission_para; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- our missions end -->


        <?php endforeach; ?>
    <?php else : ?>
        <p>No data available for services.</p>
    <?php endif; ?>
    <!-- slider time line start -->


    <?php if (!empty($services_2)) : ?>
        <div id="container">
            <h2 class="about_headings">
                <span class="decoration">Our</span><span> Journey</span>

            </h2>
            <div class="contain">
                <div id="owl-carousel" class="owl-carousel owl-theme our-story">
                    <?php foreach ($services_2 as $journey) : ?>
                        <div class="item">
                            <h4 class="year"><?php echo $journey->Our_Journey_year; ?></h4>
                            <span class="year-para">
                                <?php echo $journey->Year_content; ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php else : ?>
        <p>No data available for services.</p>
    <?php endif; ?>



    <!-- slider time line end -->



    <div class="container" style=" background-color:white">

        <h2 class="about_headings Experience-font">
            <span class="">We care for our own.</span> Experience our culture!

        </h2>

        <div class="container mx-auto">



            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="project-logo text-center mb-0">
                                <div class="con-1">
                                    <img src="<?php echo base_url(); ?>assets/image/about-grp/Group 19/Group 19.png" alt="img1" class="rev mx-auto img-fluid">
                                </div>
                                <p class="fon-1">Open & Friendly</p>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="project-logo text-center mb-0">
                                <div class="con-1">
                                    <img src="<?php echo base_url(); ?>assets/image/about-grp/Group 21/Group 21.png" alt="img1" class="rev mx-auto img-fluid">
                                </div>
                                <p class="fon-1">Engaging</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="project-logo text-center mb-0">
                                <div class="con-1">
                                    <img src="<?php echo base_url(); ?>assets/image/about-grp/Group 23/Group 23.png" alt="img1" class="rev mx-auto img-fluid">
                                </div>
                                <p class="fon-1">Equality</p>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="project-logo text-center mb-0">
                                <div class="con-1">
                                    <img src="<?php echo base_url(); ?>assets/image/about-grp/Path 60/Path 60.png" alt="img1" class="rev mx-auto img-fluid">
                                </div>
                                <p class="fon-1">Empathetic</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- client start  -->
    <section>

        <?php
        $this->load->view('RMC_view/client_view.php');
        ?>
    </section>
    <!-- clients end -->



    <!-- enquire start -->
    <section>
        <div class="banner-container">
            <h3 class="banner-heading">How can we help you?</h3><br>
            <a class="enquire-btn" data-toggle="modal" data-target="#myModal">Enquire Now <i class="fa-solid fa-arrow-right"></i> </a>
        </div>
    </section>
    <!-- enquire end -->

</body>
<!-- content end  -->
<script>
    $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        nav: true,
        items: 2,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



<!-- <?php if (!empty($service_2)) : ?>
        <?php foreach ($service_2 as $s) : ?>
            <div>
                <h2><?php echo $s->title; ?></h2>
                <p><?php echo $s->description; ?></p>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No data available for service_2.</p>
    <?php endif; ?> -->
<!-- footer area  -->

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>