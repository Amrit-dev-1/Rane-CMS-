<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
    <title>
        Blogs on Land Surveying, Land Acquisition for Infrastructure Projects
    </title>
    <link rel="stylesheet" href="<?php base_url()?>assets/css/blog-font.css">
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


        <div class="blog-main-container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="blog-detail-1">
                        <h1 class="blog-title">The Journey of Land Administration   </h1>
                        <img class="d-block w-100" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Blog-Images-Work/Land-Reveune-Blog-Main.webp" alt="First slide">
                        <!--<h3>Land provides basic necessities like food</h3>-->

                        <h1>Historical Background:</h1>
                        <p>The roots of Land Administration trace back to ancient times when kingdoms thrived under the rule of kings. Land revenue stood as the primary source of income for monarchs, dictating the prosperity of their realms. Todarmal, the Minister of Vijapur kingdom, pioneered the Ryotwari land revenue system, a significant contribution later adopted by Chhatrapati Shivaji in his "Hindavi Swaraj." The Ryotwari system gained such acclaim that even the British administration in the old Bombay Province found it compelling to integrate into their governance. Today's system of managing land records is a refined iteration of the Ryotwari Land Revenue System, grounded in scientific principles.</p>

                        <h2>Objectives:</h2>
                        <p>The primary objectives of Land Revenue Administration encompass various facets:</p>
                        <ul>
                            <li>Assessment and collection of land revenue, local cess on behalf of local bodies, court fees, loan recoveries, and other dues.</li>
                            <li>Preparation and maintenance of "Land Records" pertaining to revenue accounts.</li>
                            <li>Exercise of statutory powers conferred by legislations like the Maharashtra Land Revenue Code, 1966, the Mamlatdar Courts Act, the Land Acquisition Act, 1894, and various other land reform enactments.</li>
                        </ul>

                        <h2>Departments of Revenue Administration:</h2>
                        <p>Revenue administration comprises four distinct departments:</p>
                        <ol>
                            <li>Revenue Recovery</li>
                            <li>Land Measurement</li>
                            <li>Registration of Land Alienations</li>
                            <li>Treasury</li>
                        </ol>

                        <h2>Roles and Responsibilities:</h2>
                        <ol>
                            <li><strong>Recovery of Revenue:</strong> This department interfaces with virtually every citizen of the state. Apart from revenue recovery, it extends services like issuing ration cards, caste certificates, and overseeing election duties. The hierarchy within this department ranges from the Revenue Minister to officers at the village level, ensuring smooth functioning and service delivery.</li>
                            <li><strong>Land Measurement:</strong> Popularly known as the Survey Department, this unit is responsible for measuring land, demarcating boundaries, and assessing agricultural land. From determining village boundaries to maintaining land records, this department plays a pivotal role. The hierarchy within this department spans from the Revenue Minister to land measurers at the grassroots level.</li>
                            <li><strong>Registration of Land Alienations:</strong> The legality and validity of land transfers hinge upon registration as per the Transfer of Property Act and the Indian Registration Act, 1908. Sub-Registrars, stationed in each Taluka, oversee the registration process, ensuring compliance with legal provisions.</li>
                            <li><strong>Treasury:</strong> Formerly integral to revenue administration, the treasury department now falls under the purview of the finance department. However, collectors retain oversight responsibility, reflecting their pivotal role in district administration.</li>
                        </ol>

                        <h2>Revenue Division:</h2>
                        <p>The state is divided into six divisions, 35 districts, and 399 talukas for efficient revenue administration. Each division, comprising several talukas, is headed by a Divisional Commissioner. District administration, under the purview of the Collector, ensures effective governance at the grassroots level.</p>

                        <h2>Revenue Officers: Powers and Duties:</h2>
                        <ol>
                            <li><strong>Divisional Commissioner:</strong> As the chief controlling authority in revenue matters, the Divisional Commissioner operates under the state government's superintendence. Delegated with extensive powers, the Divisional Commissioner oversees revenue administration within the division.</li>
                            <li><strong>Collector:</strong> The Collector occupies a central position in district administration, serving as the head of revenue affairs. Empowered to convert land use and responsible for revenue fixation, collection, and accounting, the Collector wields significant authority. Additionally, the Collector administers various Acts, including those related to land tenure abolition, forest administration, and land acquisition.</li>
                            <li><strong>Sub-Divisional Officer:</strong> Responsible for coordinating revenue matters within the sub-division, the Sub-Divisional Officer acts as a liaison between Tahsildars and the District Collector. Holding appellate authority over revenue issues, the Sub-Divisional Officer also functions as the Sub-Divisional Magistrate and Returning Officer for electoral constituencies.</li>
                            <li><strong>Tahsildars and Naib Tahsildars:</strong> Tahsildars oversee revenue collection and other government dues, maintaining close engagement with local communities and addressing agricultural concerns. With extensive jurisdiction over revenue matters, they play a critical role in grassroots governance.</li>
                            <li><strong>Circle Inspectors/Officers:</strong> Working under Tahsildars, Circle Inspectors oversee revenue matters at the village level, ensuring compliance with regulations and facilitating administrative functions.</li>
                            <li><strong>Talathis/Patwaris:</strong> As representatives of the government at the village level, Talathis play a crucial role in recording land-related data, facilitating revenue collection, and providing assistance during crises. Their comprehensive knowledge of local affairs renders them invaluable assets in grassroots governance.</li>
                        </ol>

                        <p>Through the collective efforts of these officials and departments, India's Land Revenue Administration navigates the complexities of land management, ensuring equitable distribution of resources and efficient governance at every level.</p>

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
                                <img class="d-block w-100 suggested-blogs-img" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/NON-AGRICULTURAL-LAND.webp" alt="First slide">
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
    </section>
    <!-- carousel end -->

</body>
<!-- footer area  -->

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>