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

    .client-images-container {
        display: flex;
        flex-wrap: wrap;
    }

    .client-images-container img {
        width: 20%;
        /* Adjust as needed */
        margin: 5px;
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
            <?php if (!empty($clients)) : ?>
                <?php foreach ($clients as $client) : ?>
                    <div class="client-logos-slider">
                        <img src="<?php echo base_url($client['our_client_1']); ?>" alt="client-1" class="client-logo img-fluid">
                    </div>

                    <div class="client-logos-slider">
                        <img src="<?php echo base_url($client['our_client_2']); ?>" alt="client-2" class="client-logo img-fluid">
                    </div>

                    <div class="client-logos-slider">
                        <img src="<?php echo base_url($client['our_client_3']); ?>" alt="client-3" class="client-logo img-fluid">
                    </div>

                    <div class="client-logos-slider">
                        <img src="<?php echo base_url($client['our_client_4']); ?>" alt="client-4" class="client-logo img-fluid">
                    </div>

                    <div class="client-logos-slider">
                        <img src="<?php echo base_url($client['our_client_5']); ?>" alt="client-5" class="client-logo img-fluid">
                    </div>

                    <div class="client-logos-slider">
                        <img src="<?php echo base_url($client['our_client_6']); ?>" alt="client-6" class="client-logo img-fluid">
                    </div>

                    <div class="client-logos-slider">
                        <img src="<?php echo base_url($client['our_client_7']); ?>" alt="client-7" class="client-logo img-fluid">
                    </div>

                    <div class="client-logos-slider">
                        <img src="<?php echo base_url($client['our_client_8']); ?>" alt="client-8" class="client-logo img-fluid">
                    </div>

                <?php endforeach; ?>
            <?php else : ?>
                <p>No clients found.</p>
            <?php endif; ?>

        </div>
    </div>




</div>



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