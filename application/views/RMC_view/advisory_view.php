<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
    <link rel="stylesheet" href="<?php base_url(); ?>assets/css/advisory.css">
    <title>
        Secure Your Land Report Today with Our Land Advisory Expertise
    </title>
    <meta name="description" content="Plot location verification, land report, area & possession authentication, plot connectivity verification, encroachment, land title verification">

</head>

<!-- content start -->

<div class="banner-advisory for-desktop-banner">
    <div class="banner-back-Advisory ">
        <h2 class="banner-title">Land A<span class="decoration">dvisory</span></h2>

        <p class="banner-para">Unlock the Assurance of Verified Land Information for Confident Ownership Decisions.</p>
    </div>
</div>

<div class="banner-advisory-mobile  for-mobile-banner">
    <div class="banner-back-Advisory ">
        <h2 class="banner-title">Land A<span class="decoration">dvisory</span></h2>

        <p class="banner-para">Unlock the Assurance of Verified Land Information for Confident Ownership Decisions.</p>
    </div>
</div>


<section>
    <h1 class="about_headings_adv-2"><span class="decoration">Key</span> points</h1>
    <div class="container-advisory">

        <?php $count = 0; ?>
        <?php foreach ($key_points as $point) : ?>
            <?php if ($count % 4 == 0) : ?>
                <div class="row">
                <?php endif; ?>
                <div class="col-md-3">
                    <div class="text-center-logo2">
                        <img src="<?php echo base_url('uploads/Land_advisory/' . $point->Key_points_icon); ?>" class="advisory-logo img-fluid" alt="advisory logo">
                        <h3 class="advisory-title"><?php echo $point->Key_points_head; ?></h3>
                        <p class="advisory-discription"> <?php echo $point->Key_points_description; ?> </p>
                    </div>
                </div>
                <?php if (($count + 1) % 4 == 0 || $count + 1 == count($key_points)) : ?>
                </div>
            <?php endif; ?>
            <?php $count++; ?>
        <?php endforeach; ?>
    </div>

    <div class="container-fluid ">

</section>





<!-- Amrit new sections  end -->

<div class="row button-la">
    <div class="col-md-3"><button><img src="<?php base_url(); ?>assets/image/icon/FraudPrevention-01.svg"" alt=" FraudPrevention">
            <p>Fraud Prevention</p>
        </button></div>
    <div class="col-md-3"><button><img src="<?php base_url(); ?>assets/image/icon/LocationVerification-01.svg" alt=" LocationVerification">
            <p>Location Verification</p>
        </button></div>
    <div class="col-md-3"><button><img src="<?php base_url(); ?>assets/image/icon/QuicknInformedDecisions-01.svg"" alt=" QuicknInformedDecisions">
            <p style="padding: 18px 0px;">Quick & Informed Decisions</p>
        </button></div>

    <div class="col-md-3"><button><img type="image/svg+xml" src="<?php base_url(); ?>assets/image/icon/Government-Trust.svg" alt=" GovernmentTrust">
            <p>Government Trust</p>
        </button></div>
</div>


<?php foreach ($Case as $case) : ?>

<div class="container-fluid" data-aos="fade-up" data-aos-duration="3000">
    <h2 class="about_headings_adv"><span class="decoration">Case</span> Studies</span> </h2>
    <div class="row grp-1-advisory ">
        <div class="col-sm-12 col-md-12 col-xl-4 text-center">
            <img src="<?php echo base_url('uploads/Land_advisory/' . $case->case_study_img); ?>" class="place-1">

        </div>
            <div class="col-sm-12 col-md-12 col-xl-6">
                <span class="para-1">
                    <h3 class="margin-grp case1 ">Case Study</h3>
                    <h2 class="place-title margin-grp"><?php echo $case->Case_study_title; ?></h2>
                    <p class="margin-grp"> <?php echo $case->case_study_description; ?> </p>
                </span>
                <br>
                <button class="grp-1-btn">Sample Report <i class="fas fa-arrow-circle-right fa-lg"></i></button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<br><br>
<div class="container">

    <h2 class="about_headings" style="text-align: center;">
        <span class="decoration">Blogs</span>
    </h2>
    <br>

    <div class="row grp-1-advisory">
        <div class="col-sm-12 col-md-12 col-xl-6">
            <div class="abt-para">
                <span class="para-1">

                    <h2 class="blog-place-title place-title margin-grp">Navigating Land Development Regulations in Maharashtra:</h2><br>
                    <p class="margin-grp">Agricultural land, encompassing various forms of cultivation and related activities, plays a pivotal role in sustaining communities. This article explores the classification of agricultural lands based on usage and delves into the permissible activities, farm building regulations, and restrictions on land use in Maharashtra, India.</p>
                </span>
                <br>
                <a href="<?php base_url() ?>Blog">
                    <button class="grp-1-btn">More Detail <i class="fas fa-arrow-circle-right fa-lg"></i></button>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-xl-6 text-center"><br>
            <img src="<?= base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Development-of-Land.webp" class="place-1">
        </div>
    </div>
</div>



<div class="container text-center">
    <div class="banner-container2">

        <img src="<?php base_url(); ?>assets/new-img/All-Website-Images/start-project/CTAImageNew.webp" alt="Banner Image" class="banner-image mobile-view-img">

        <div class="banner-text-adv text-center">
            <h2>Secure Your Land Legacy Today!</h2>
            <div class="connect-btn">
                <a href="<?php base_url() ?>Contact_us">
                    <button class="bybtn3">Connect</button>
                </a>
            </div>
        </div>

    </div>
</div>

<!-- content end  -->


<!-- footer area  -->

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>