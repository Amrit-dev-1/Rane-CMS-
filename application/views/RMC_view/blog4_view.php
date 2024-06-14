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
                        <h1 class="blog-title"> Understanding Maharashtra Land Records  </h1>
                        <img class="d-block w-100" src="<?php base_url() ?>assets/new-img/All-Website-Images/Blog-Images-Work/Blog-Images-Work/Land-Record-Main.webp" alt="First slide">
                        <!--<h3>Land provides basic necessities like food</h3>-->

                        <h1>Introduction:</h1>
                        <p>Accurate and up-to-date land records play a crucial role not only in policy formulation but also in fostering harmonious relations within rural societies by minimizing land-related disputes. In the context of the Maharashtra Land Revenue Code 1966 (MLR Code 1966), the term "Land Records" refers to records maintained under its provisions, encompassing maps, plans, and various schemes related to land.</p>

                        <h2>Department of Land Records:</h2>
                        <p>At the state level, the Land Records Department is overseen by the Director of Land Records and Settlement Commissioner in Maharashtra, Pune. The district and taluka levels are managed by the District Inspector of Land Records and Taluka Inspector of Land Records, respectively. The department's functions include maintaining survey, classification, and settlement records, providing statistical information for land-related matters, and simplifying procedures to reduce litigation costs.</p>

                        <h2>Key Land Records:</h2>
                        <p><strong>Village Forms:</strong></p>
                        <ul>
                            <li>Village Form VI (Register of Mutation): Documents changes in the Record of Right, such as transfers through wills, sales, mortgages, leases, exchanges, gifts, or inheritance. This form is vital for understanding the historical evolution of land.</li>
                            <li>Village Forms VII-XII: Combined registers of Record of Right and crops, providing detailed information on land tenure, occupants, cultivable areas, assessments, and other relevant details.</li>
                            <li>Village Form VIII-A: Contains details of khatedars' land, including areas and taxes payable, maintained by Talathi.</li>
                        </ul>
                        <p><strong>Subsidiary Registers:</strong></p>
                        <ul>
                            <li>Village Form VI-C (Registered of Heir-ship Cases): Records details of deceased occupants, date of death, old khata numbers, legal heirs, and decisions made by Tahsildar regarding heir-ships.</li>
                            <li>Village Form VII-B: Records persons in actual possession of land whose names do not appear in the Record of Rights, initiating a process for further investigation.</li>
                        </ul>

                        <h2>Inspection and Access:</h2>
                        <p>Land records, subject to prescribed rules and fees, are open to public inspection during reasonable hours. Certified extracts or copies can be obtained upon application. The Maharashtra Land Revenue (Inspection, Search and Supply of Copies of Land Records) Rules, 1970, govern the process of inspection, search, and obtaining copies.</p>

                        <h3>Important Rules for Inspection and Copies:</h3>
                        <ul>
                            <li>Application for Inspection: Interested individuals must submit an application specifying the particulars of the records and the purpose of the inspection.</li>
                            <li>Fees for Inspection: Prepaid fees in cash, as per the prescribed schedule, are required for inspecting records.</li>
                            <li>Conditions for Inspection: Inspection is conducted under the directions of the officer-in-charge, with restrictions on using pens and inks.</li>
                            <li>Fees for Search: Fees are payable in advance for searching records if an application lacks accurate descriptions.</li>
                            <li>Supply of Certified Copies: Certified extracts or copies can be obtained with the officer's permission, adhering to prescribed fees.</li>
                            <li>Application for Copies: Applicants need to provide details and state the purpose when seeking copies.</li>
                            <li>Fees for Copies: Prescribed fees are payable for obtaining true copies of records.</li>
                        </ul>

                        <h2>Conclusion:</h2>
                        <p>Land records are invaluable for maintaining transparency, resolving disputes, and facilitating effective governance. Access to these records, governed by specific rules, ensures accountability and aids in responsible land management. Individuals, through proper channels and adherence to regulations, can contribute to the responsible use and understanding of land records in Maharashtra.</p>
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