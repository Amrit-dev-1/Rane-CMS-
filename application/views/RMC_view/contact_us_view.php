<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/contactus.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <title>
        Contact for Land Surveying, Land Acquisition - 8104280569 / 9820536562
    </title>
    <meta name="description" content="Rane Management Consultant - C-17 Acharya Vinobhabhave Rd Sector, 4, Airoli Bridge Road, Sector 4, Airoli, Navi Mumbai, Maharashtra 400708   ">

</head>

<style>
    .banner-contact-us {

        background-image: url('assets/new-img/All-Website-Images/contact-us/Contact-Us-Website-Banner.webp');

    }
</style>

<body>
    <div class="banner-contact-us ">
        <div class="banner-back-contact">
            <h1 class="banner-title">Get In Touch <span class="decoration">Wit</span>h Us</h1>
            <BR>
            <a href="#" class="banner_btn">Home <i class="fa-solid fa-arrow-right" style="color: #fea92c;"></i> Contact </a>
        </div>
    </div>
    <br>

    <div class="container" data-aos="fade-down" data-aos-duration="3000">
        <br>
        <h4> <span class="decoration">Get</span> In Touch With Us</h4>
        <br><br>
        <!--<p class="contact-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu urna convallis,<br> fermentum neque sed, suscipit risus.</p>-->
    </div>

    <!--<div class="container">-->
    <!--    <div class="row justify-content-center">-->
    <!--        <div class="">-->
    <!--            <div class="card card1" style="width: 18rem; ">-->
    <!--                <div class="card-body">-->
    <!--                    <h5 class="card-title1"><i class="fa-solid fa-map-location-dot fa-2xl"></i><br><br>Registered Office</h5>-->

    <!--                    <p class="card-text-con">Shubhangi Niwas, Row House No. C - 17, Sector - 4 , Airoli , Navi Mumbai - 400708. Tel. 022 27795812.</p>-->
    <!--                    <div class="container-sch">-->
    <!--                        <div class="clock-icon">-->
    <!--                            <i class=" fas fa-clock fa-2xl" style="color: #ffffff;"></i>-->
    <!--                        </div>-->
    <!--                        <p class="card-text-con2"> Working Hours :<Br> 09:00 - 18:00<Br> Mon - Sat</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--        <div class="">-->
    <!--            <div class="card" style="width: 18rem;">-->
    <!--                <div class="card-body">-->
    <!--                    <h5 class="card-title2"><i class="fa-solid fa-phone fa-lg"></i> Phone</h5>-->
    <!--                    <h6 class="card-subtitle mb-2 text-muted"> +91 9820536562 </h6><Br>-->
    <!--                    <p class="email-icon"><i class="fa-solid fa-envelope fa-xl"></i> Email </p>-->
    <!--                    <p class="email-list">rmcpl_ltd@rediffmail.com<br>rmcpl_ltd@yahoo.com<br>info@ranemanagementconsultant.com</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <?php foreach ($services_1 as $service) : ?>

        <div class="container" data-aos="fade-down" data-aos-duration="3000">

            <div class="row justify-content-center">
                <!-- First Card - Registered Office -->
                <div class="">
                    <a href="tel:+919820536562" class="card-link">
                        <div class="card card1" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title1"><i class="fa-solid fa-map-location-dot fa-2xl"></i><br><br><?php echo $service->Registered_Office_title; ?></h5>
                                <p class="card-text-con"><?php echo $service->Registered_Office_address; ?></p>
                                <div class="container-sch">
                                    <div class="clock-icon">
                                        <i class="fas fa-clock fa-2xl" style="color: #ffffff;"></i>
                                    </div>
                                    <p class="card-text-con2">Working Hours :<br><?php echo $service->Working_hours_time; ?><br><?php echo $service->Working_hours_days; ?></p>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- Second Card - Phone and Email -->
                <div class="">
                    <!-- <a href="tel:+919820536562" class="card-link">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title2"><i class="fa-solid fa-phone fa-lg"></i> Phone</h5>
                                <h6 class="card-subtitle mb-2 text-muted">+91 9820536562</h6><br>
                                <p class="email-icon"><i class="fa-solid fa-envelope fa-xl"></i> Email </p>
                                <p class="email-list">rmcpl_ltd@yahoo.com<br>ranemanagementconsultant@gmail.com</p>
                            </div>
                        </div>
                    </a> -->

                    <?php foreach ($services_2 as $ser) : ?>


                        <a href="tel:<?php echo $ser->Phone_no; ?>" class="card-link">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title2"><i class="fa-solid fa-phone fa-lg"></i> Phone</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">+<?php echo $ser->Phone_no; ?></h6><br>
                                    <p class="email-icon"><i class="fa-solid fa-envelope fa-xl"></i> Email </p>
                                    <p class="email-list"><?php echo $ser->Email_id; ?></p>
                                </div>
                            </div>
                        </a>
                </div>
            </div>
        </div>


        <div class="map-container">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3768.908459430887!2d72.9928641!3d19.1554839!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf4dc01d3731%3A0xd5d8731047c9fb0f!2sRane%20management%20consultant%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1703839183893!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

            <iframe src="<?php echo $ser->G_map; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br>
    <?php endforeach; ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <h3>Branch Office</h3>
                <p>Shop No- 07, Kamla Park Building, Phatak Road Near Post Office, Bhayandar West</p>
                <br>
                <h3>Branch Office</h3>
                <p>15, Ground Floor, Sahakar Jyot, Chhatrapati Shivaji Marg, Near Main Municipal Office, Bhayander ( W ),</p>
                <br>
                <h3>Branch Office</h3>
                <p>Meroo Housing Society Ltd., Flat No. 002, Wing-A, Phase 11, Manvel Pada Road, Virar (East), Dist. Palghar - 401303.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-5 index">

                <div class="container-form-2" data-aos="fade-up" data-aos-duration="3000">


                    <div class="col-sm-12 col-md-12 col-lg-12 index">

                        <div class="container-form">

                            <h1 class="head-form-card">Get In Touch</h1>

                            <form action="<?php echo base_url(); ?>Mail_demo" method="post">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control form-style" id="first_name" name="first_name" placeholder="First Name" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control form-style" id="last_name" name="last_name" placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control form-style" id="company" name="company" placeholder="Company" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control form-style" id="state" name="state" placeholder="State" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select id="country" class="form-control form-style-select" name="country" required>
                                        <option value="0">Select Country</option>
                                        <option value="Indian">India</option>
                                        <option value="Japan">Japan</option>
                                        <option value="KR">South Korea</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="SG">Singapore</option>
                                        <option value="TH">Thailand</option>
                                        <option value="VN">Vietnam</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="tel" class="form-control form-style" id="phone" name="phone" placeholder="Phone" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-style" id="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control form-style" id="message" name="message" rows="3" placeholder="Type your message here"></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <!--<input type="submit" class="btn btn-primary" name="contact-form" value="Submit">-->
                                    <input type="submit" class="" name="contact-form" value="Submit">
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="email-input">
                    <div class="row">
                        <div class="col-md-6 sub-1">
                            <h5 style="font-size: 25px; font-weight: 700;">Subscribe & Get More Information</h5>
                            <!-- <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu urna convallis, fermentum neque sed, suscipit risus.</p> -->
                        </div>
                        <div class="col-md-6">
                            <form class="search-wrapper cf custom-btn-submit">
                                <input type="email" class="form-control sub-1" placeholder="Enter your email..." required style="box-shadow: none;">
                                <button class=" submit-btn-contactus" type="submit">Subscribe <i class="fas fa-arrow-circle-right fa-lg"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <?php
            $this->load->view('RMC_view/layout/footeer_view.php');
            ?>