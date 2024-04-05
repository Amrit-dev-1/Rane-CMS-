<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
    <title>
        Blogs on Land Surveying, Land Acquisition for Infrastructure Projects
    </title>
    <link rel="stylesheet" href="<?php base_url() ?>assets/css/blog-font.css">
</head>
<style>
    .blog-detail-1 {
        /*text-align:center;*/
        /*box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;*/
        padding: 12px;
        /*border-radius: 10px;*/
        height: 100%;
    }

    .blog-detail-1 img {
        border-radius: 10px 10px 0px 0px;
        margin-bottom: 20px;
    }

    .blog-detail-1 p {
        font-size: 18px;
    }

    .blog-detail p {
        padding: 0 10px;
        font-size: 16px;
        letter-spacing: 0px;
        font-weight: 500;
        line-height: 20px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    .blog-detail {
        /*text-align:center;*/
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 12px;
        border-radius: 10px;
        height: 100%;
    }

    .blog-detail h3 {
        margin: 15px 10px;
        font-weight: 600;
    }

    .blog-col h3:hover {
        color: #034ea1;
    }

    .blog-detail p {
        padding: 0 10px;
        font-size: 16px;
        letter-spacing: 0px;
    }

    .blog-detail p:hover {
        color: #034ea1;
        ;
    }

    .suggested-blogs {
        margin: 20px 0px;
        border-bottom: 1px solid #E8E8E8;
        margin-bottom: 14px;
        padding-bottom: 16px;
    }

    .suggested-blogs-img {
        height: 80px;
        width: 80px !important;
        border-radius: 10px;
    }

    .blog-title {
        font-weight: 700;
        color: #034ea1;
    }

    .blog-detail-1 h3 {
        color: #034ea1;
    }

    .blog-main-container {
        margin: 110px 60px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    .list-type {
        list-style-type: lower-alpha;
    }

    /*Responsive*/

    @media only screen and (min-width: 1500px) and (max-width:5000px) {}

    @media only screen and (min-width: 1201px) and (max-width:1499px) {}

    @media only screen and (min-width: 1025px) and (max-width:1200px) {}

    @media only screen and (min-width: 769px) and (max-width: 1024px) {}

    @media only screen and (min-width: 601px) and (max-width: 768px) {
        .blog-main-container {
            margin: 110px 0px;
            text-align: justify;
        }

        .blog-detail p {
            text-align: left;
        }
    }

    @media only screen and (min-width: 481px) and (max-width: 600px) {
        .blog-main-container {
            margin: 110px 0px;
            text-align: justify;
        }

        .blog-detail p {
            text-align: left;
        }
    }

    @media only screen and (min-width: 361px) and (max-width: 480px) {
        .blog-main-container {
            margin: 110px 0px;
            text-align: justify;
        }

        .blog-detail p {
            text-align: left;
        }
    }

    @media screen and (max-width: 360px) {
        .blog-main-container {
            margin: 110px 0px;
            text-align: justify;
        }

        .blog-detail p {
            text-align: left;
        }
    }
</style>

<body>
    <!-- carousel start -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!--<img class="d-block w-100" src="<?php base_url(); ?>assets/image/slider/Website Banner (08-11)/1stbannerImage(08-11- 2023)NewBanner.jpg" alt="First slide">-->
                </div>
            </div>

        </div>

        <?php if(isset($blog_item)): ?>


        <div class="blog-main-container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="blog-detail-1">
                        <h1 class="blog-title"><?php echo $blog_item->Blog_title; ?></h1>
                        <img class="d-block w-100" src="<?php echo base_url('uploads/blog_images/' . $blog_item->Blog_Img); ?>" alt="First slide">
                        <!--<h3>Land provides basic necessities like food</h3>-->
                      

                        <p><?php echo $blog_item->Blog_detail_content; ?></p>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-detail">
                        <h2><u>Popular Post</u></h2>

                        <div class="row suggested-blogs">
                            <div class="col-4">
                                <img class="d-block w-100 suggested-blogs-img" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Agricultural-Land.webp" alt="First slide">
                            </div>
                            <div class="col-8">
                            <a href="<?php base_url() ?>Blogdetail">   <p>Agricultural land, encompassing various forms of cultivation. </p></a> 
                            </div>
                        </div>

                        <div class="row suggested-blogs">
                            <div class="col-4">
                                <img class="d-block w-100 suggested-blogs-img" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Development-of-Land.webp" alt="First slide">
                            </div>
                            <div class="col-8">
                            <a href="<?php base_url() ?>Development"><p>Development of land involves various operations aimed at changing </p></a>
                            </div>
                        </div>

                        <div class="row suggested-blogs">
                            <div class="col-4">
                                <img class="d-block w-100 suggested-blogs-img" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Investigation-of-Title.webp" alt="First slide">
                            </div>
                            <div class="col-8">
                              <a href="<?php base_url()  ?>Investigation">  <p>Title signifies ownership rights to property; investigation ensures legality through a thorough search </p></a>
                            </div>
                        </div>

                        <div class="row suggested-blogs">
                            <div class="col-4">
                                <img class="d-block w-100 suggested-blogs-img" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Land-Blog.webp" alt="First slide">
                            </div>
                            <div class="col-8">
                            <a href="<?php base_url()  ?>Land">    <p>providing essential necessities like food, clothing, and shelter.</p></a>
                            </div>
                        </div>


                        <div class="row suggested-blogs">
                            <div class="col-4">
                                <img class="d-block w-100 suggested-blogs-img" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Land-Record.webp" alt="First slide">
                            </div>
                            <div class="col-8">
                            <a href="<?php base_url()  ?>Land_record">   <p>Accurate and up-to-date land records play a crucial role not only in policy </p></a>
                            </div>
                        </div>

                        <div class="row suggested-blogs">
                            <div class="col-4">
                                <img class="d-block w-100 suggested-blogs-img" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Land-Reveune-Blog.webp" alt="First slide">
                            </div>
                            <div class="col-8">
                              <a href="<?php base_url()?>Land_Reveune">  <p>The roots of Land Administration trace back to ancient times </p> </a>
                            </div>
                        </div>

                        <div class="row suggested-blogs">
                            <div class="col-4">
                                <img class="d-block w-100 suggested-blogs-img" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Blog-Images-Work/NON-AGRICULTURAL-LAND-New.webp" alt="First slide">
                            </div>
                            <div class="col-8">
                              <a href="<?php base_url() ?>Non_Agricultural_Land">  <p>Non-agricultural land refers to land that undergoes development activities making it unsuitable for cultivation

                                </p></a>
                            </div>
                        </div>

                        <div class="row suggested-blogs">
                            <div class="col-4">
                                <img class="d-block w-100 suggested-blogs-img" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Right-over-land.webp" alt="First slide">
                            </div>
                            <div class="col-8">
                              <a href="<?= base_url() ?>Right_over_land"> <p>Land rights, a critical aspect of property ownership, undergo various changes and are subject to legal restrictions </p></a> 
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>


        <?php endif; ?>
    </section>
    <!-- carousel end -->

</body>
<!-- footer area  -->

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>