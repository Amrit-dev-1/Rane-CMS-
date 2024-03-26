<head>
    <link rel="stylesheet" href="<?php base_url() ?>assets/css/client.css">
    <link rel="stylesheet" href="<?php base_url() ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!--<link rel="stylesheet" href="<?php base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">-->
    <link rel="stylesheet" href="<?php base_url() ?>https://unpkg.com/swiper/swiper-bundle.min.css">

</head>
<style>
    .owl-carousel {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
    }

    .owl-carousel .owl-item {

        margin: auto;
    }

    .owl-item img {
        width: 80% !important;
        height: auto;
        display: block;
        margin: auto;
    }

    .client {
        margin: auto;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0 10px;
        /* Adjust as needed */
    }


    .client-logo img-fluid {
        display: flex;
        margin: auto;
    }


    .client-logo:hover {
        transform: scale(1.2);
    }
</style>
<!-- <div class="row"> -->
<div style="margin: 40px 0px">
    <!--<h2 class="about_heading"><span class="decoration"> Our</span> Client </h2>-->
    <h2 class="about_headings Experience-font"> <strong>
            <span class="decoration">Our</span> Client
        </strong>
    </h2>

    <div class="client-carousel col-sm-6 col-md-9 col-xl-6">
        <div class="owl-carousel">
            <div class="client-logos-slider">
                <img src="<?php base_url(); ?>/assets/new-img/All-Website-Images/client-slider-logo/Cidco-Color-Logo-01.webp" alt="logo1" class=" client-logo img-fluid">

            </div>
            <div class="client-logos-slider ">
                <img src="<?php base_url(); ?>/assets/new-img/All-Website-Images/client-slider-logo/DFC-Logo-Color-01.webp" alt="logo1" class="client-logo img-fluid">

            </div>
            <div class="client-logos-slider ">
                <img src="<?php base_url(); ?>/assets/new-img/All-Website-Images/client-slider-logo/Suez-ColorLogo-01.webp" alt="logo1" class="client-logo img-fluid">

            </div>
            <div class=" client-logos-slider">
                <img src="<?php base_url(); ?>/assets/new-img/All-Website-Images/client-slider-logo/MMRD-Logo-Color-01.webp" alt="logo1" class="client-logo img-fluid">
            </div>

            <!-- 2nd row -->
            <div class="client-logos-slider ">
                <img src="<?php base_url(); ?>assets/image/Client/Color/Reliance Color Logo-01.png" alt="logo1" class="client-logo img-fluid">
            </div>
            <div class=" client-logos-slider">
                <img src="<?php base_url(); ?>/assets/new-img/All-Website-Images/client-slider-logo/NHAI-ColorLogo-01.webp" alt="logo1" class="client-logo img-fluid">

            </div>
            <div class="client-logos-slider ">
                <img src="<?php base_url(); ?>/assets/new-img/All-Website-Images/client-slider-logo/RNVL-Color-Logo-01.webp" alt="logo1" class="client-logo img-fluid">

            </div>
            <div class=" client-logos-slider">
                <img src="<?php base_url(); ?>/assets/new-img/All-Website-Images/client-slider-logo/MSRDC-ColorLogo-01.webp" alt="logo1" class="client-logo img-fluid">

            </div>

        </div>
    </div>
</div>
<!-- </div> -->


<!-- 
<div class="client ">
    <div class="row">
        <div class="col-md-2 col-sm-4 col-6">
            <img src="<?php base_url(); ?>assets/image/Client/Color/Cidco Color Logo-01.png" alt="logo1" class=" client-logo img-fluid">
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <img src="<?php base_url(); ?>assets/image/Client/Color/DFC Logo Color-01.png" alt="logo1" class="client-logo img-fluid">
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <img src="<?php base_url(); ?>assets/image/Client/Color/Suez Color Logo-01.png" alt="logo1" class="client-logo img-fluid">
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <img src="<?php base_url(); ?>assets/image/Client/Color/MMRD Logo Color-01.png" alt="logo1" class="client-logo img-fluid">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-sm-4 col-6">
            <img src="<?php base_url(); ?>assets/image/Client/Color/Reliance Color Logo-01.png" alt="logo1" class="client-logo img-fluid">
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <img src="<?php base_url(); ?>assets/image/Client/Color/RNVL Color Logo-01.png" alt="logo1" class="client-logo img-fluid">
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <img src="<?php base_url(); ?>assets/image/Client/Color/NHAI Color Logo-01.png" alt="logo1" class="client-logo img-fluid">
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <img src="<?php base_url(); ?>assets/image/Client/Color/MSRDC Color Logo-01.png" alt="logo1" class="client-logo img-fluid">
        </div>
    </div>
</div>

 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 1800,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4

                }
            }
        });
    });
</script>