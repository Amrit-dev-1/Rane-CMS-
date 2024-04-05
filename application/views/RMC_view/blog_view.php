<?php
$this->load->view('RMC_view/layout/header_view.php');
?>


<head>
    <title>
        Blogs on Land Surveying, Land Acquisition for Infrastructure Projects
    </title>
    <meta name="description" content="Land survey, Revenue Survey, GPS, GIS, Drone Survey, SRA Plot survey, Licensed Surveyor, location survey, Demarcation of plot, earthwork calculation, Estimation, Top Surveyor in Maharashtra  ">

</head>
<style>
    .blog-col {
        /*text-align:center;*/
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 12px;
        border-radius: 10px;
        height: 100%;
    }

    .blog-col button {
        cursor: pointer;
        /* margin: -10px 0 6px -51px; */
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        font-size: 20px;
        font-weight: 600;
        background-color: #034ea1;
        color: white;
        border: none;
    }

    .blog-col button:hover {
        background-color: #a6a8ab;
        color: #034ea1;
    }

    .blog-col h3 {
        margin: 15px 10px;
        font-weight: 600;
        font-size: 1.3rem;
        color: #273d71;
    }

    .blog-col h3:hover {
        color: #034ea1;
    }

    .blog-col p {
        padding: 0 10px;
        font-size: 17px;
        letter-spacing: 1px;
    }

    .blog-col img {
        border-radius: 15px 10px 0 0;
    }

    .read-more-btn a {
        color: #fff;
    }

    .blog-title-1 {
        font-weight: 700;
        color: #034ea1;
        text-align: center;
    }

    .blog-main-container {
        margin: 110px 60px;
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
    }

    @media only screen and (min-width: 481px) and (max-width: 600px) {
        .blog-main-container {
            margin: 110px 0px;
            text-align: justify;
        }
    }

    @media only screen and (min-width: 361px) and (max-width: 480px) {
        .blog-main-container {
            margin: 110px 0px;
            text-align: justify;
        }
    }

    @media screen and (max-width: 360px) {
        .blog-main-container {
            margin: 110px 0px;
            text-align: justify;
        }
    }

    .custom-margin {
        margin: 11px 0px;
    }
</style>

<body>
    <!-- carousel start -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        </div>

        <div class="blog-main-container">
            <h1 class="blog-title-1">Blogs </h1>
            <div class="row">
                <?php foreach ($service as $blog_item) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 custom-margin">
                        <div class="blog-col">
                            <img class="d-block w-100" src="<?php echo base_url('uploads/blog_images/' . $blog_item->Blog_Img); ?>" alt="First slide">
                            <h3><?php echo $blog_item->Blog_title; ?></h3>
                            <p><?php echo $blog_item->Blog_main_content; ?></p>
                            <!-- "Read More" button with dynamically generated URL -->
                            <a href="<?php echo base_url('Blogdetail?id=' . $blog_item->id); ?>"><button class="read-more-btn">Read More </button></a>
                        </div>
                    </div>
                <?php endforeach; ?>



            </div>
        </div>
    </section>
    <!-- carousel end -->

</body>
<!-- footer area  -->

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>