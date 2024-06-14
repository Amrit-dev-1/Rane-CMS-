<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
    <title>
        Blogs on Land Surveying, Land Acquisition for Infrastructure Projects
    </title>
</head>
<style>
    .blog-col{
        /*text-align:center;*/
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 12px;
        border-radius: 10px;
    }
   .blog-col button{
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
    
    .blog-col button:hover{
        background-color: #a6a8ab;
        color: #034ea1;
    }
    
    .blog-col h3 {
    margin: 15px 10px;
    font-weight: 600;
    }
    .blog-col h3:hover{
        color: #034ea1;
    }
    
    .blog-col p{
    padding: 0 10px; 
    font-size: 17px;
    letter-spacing: 1px;
    }
</style>
<body>
    <!-- carousel start -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php base_url(); ?>assets/image/slider/Website Banner (08-11)/1stbannerImage(08-11- 2023)NewBanner.jpg" alt="First slide">
                </div>
            </div>
           
        </div>
        
        <div style="margin: 110px 60px;">
            <div class="row">
            <div class="col-4">
                <div class="blog-col">
                   <img class="d-block w-100" src="<?php base_url(); ?>assets/image/slider/Website Banner (08-11)/1stbannerImage(08-11- 2023)NewBanner.jpg" alt="First slide">
                   <h3>Land:</h3>
                   <p>Land provides basic necessities like food, clothing and shelter to human being. Land has always been an
important locus for the economic activity necessary for human life. Any developmental activity is nearly
impossible to conceive without taking land into consideration.</p>
                <button>Read More</button>
                </div>
            </div>
            <div class="col-4">
               <div class="blog-col">
                   <img class="d-block w-100" src="<?php base_url(); ?>assets/image/slider/Website Banner (08-11)/1stbannerImage(08-11- 2023)NewBanner.jpg" alt="First slide">
                    <h3>Land:</h3>
                   <p>Land provides basic necessities like food, clothing and shelter to human being. Land has always been an
important locus for the economic activity necessary for human life. Any developmental activity is nearly
impossible to conceive without taking land into consideration.</p>
                <button>Read More</button>
                </div>
            </div>
            <div class="col-4">
                <div class="blog-col">
                   <img class="d-block w-100" src="<?php base_url(); ?>assets/image/slider/Website Banner (08-11)/1stbannerImage(08-11- 2023)NewBanner.jpg" alt="First slide">
                    <h3>Land:</h3>
                   <p>Land provides basic necessities like food, clothing and shelter to human being. Land has always been an
important locus for the economic activity necessary for human life. Any developmental activity is nearly
impossible to conceive without taking land into consideration.</p>
                <button>Read More</button>
                </div>
            </div>
            </div>
        </div>
        
        
        <div style="margin: 110px 60px;">
            <div class="row">
            <div class="col-4">
                <div class="blog-col">
                   <img class="d-block w-100" src="<?php base_url(); ?>assets/image/slider/Website Banner (08-11)/1stbannerImage(08-11- 2023)NewBanner.jpg" alt="First slide">
                   <h3>Land:</h3>
                   <p>Land provides basic necessities like food, clothing and shelter to human being. Land has always been an
important locus for the economic activity necessary for human life. Any developmental activity is nearly
impossible to conceive without taking land into consideration.</p>
                <button>Read More</button>
                </div>
            </div>
            <div class="col-4">
               <div class="blog-col">
                   <img class="d-block w-100" src="<?php base_url(); ?>assets/image/slider/Website Banner (08-11)/1stbannerImage(08-11- 2023)NewBanner.jpg" alt="First slide">
                    <h3>Land:</h3>
                   <p>Land provides basic necessities like food, clothing and shelter to human being. Land has always been an
important locus for the economic activity necessary for human life. Any developmental activity is nearly
impossible to conceive without taking land into consideration.</p>
                <button>Read More</button>
                </div>
            </div>
            <div class="col-4">
                <div class="blog-col">
                   <img class="d-block w-100" src="<?php base_url(); ?>assets/image/slider/Website Banner (08-11)/1stbannerImage(08-11- 2023)NewBanner.jpg" alt="First slide">
                    <h3>Land:</h3>
                   <p>Land provides basic necessities like food, clothing and shelter to human being. Land has always been an
important locus for the economic activity necessary for human life. Any developmental activity is nearly
impossible to conceive without taking land into consideration.</p>
                <button>Read More</button>
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