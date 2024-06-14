<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="RANE" content="width=device-width, initial-scale=1.0">
    <!-- <title>Rane Management Consultant</title> -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5CP9PWH7');
    </script>
    <!-- End Google Tag Manager -->


    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/image/Fav-icon.png">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/card.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/drop.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/advisory.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/About.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/services/service1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/services/service2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/services/service3.css">



    <!-- <link rel="stylesheet" href="assets/css/external.css"> -->

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>




    <!-- new link  -->
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <!-- new link end  -->

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">




    <script src='https://app.wotnot.io/chat-widget/6AwjU7HHSHi9031325863047Gx8NTcFs.js' defer></script>
    
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" id="" style="background-color: white;">

        <!-- <div class="home">
            <a href="<?php base_url(); ?>RANE_con">
                <img src="<?php base_url(); ?>assets/image/Rane-Logo-WebsiteTopHead-01.png" class="logo">
            </a>
        </div> -->

        <div class="home">

            <?php if (!empty($Head)) : ?>
                <?php foreach ($Head as $banner_item) : ?>
                    <a href="<?php echo base_url('Home'); ?>">
                        <img src="<?php echo base_url($banner_item['rane_icon']); ?>" class="logo" alt="Logo">
                    </a>

        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link under_logo" href="<?php echo base_url(); ?>About_us">About <span class="sr-only">(current)</span></a>
                </li>

                <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">

                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown position-static for-desktop">
                        <a class="under_logo nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0; border-top-right-radius: 0; ">
                            <div class=" mega-menu-1">
                                <div class="row justify-content-center my-4 gap-1">
                                    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0 mobile-view-menu for-mega-menu">
                                        <div class="list-group list-group-flush">
                                            <h6><span class="colour-2" href="#"><?php echo $banner_item['menu_service_title']; ?></span></h6>

                                            <div class="para0">

                                                <p class="service-para"><?php echo $banner_item['menu_service_desc']; ?></p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0 for-mega-menu">
                                        <div class="list-group list-group-flush">
                                            <h3 class="colour"><span class="decoration"><?php echo $banner_item['Experties']; ?></span></h3>

                                            <div class="link">
                                                <ul class="dot">

                                                    <li class="under-b"><a class="dropdown-item p-0 mega-menu-list" href="<?php echo base_url(); ?>Service/Top_land_survey"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i><span> Engineering Survey </span></a></li>
                                                    <li class="under-b"><a class="dropdown-item p-0 mega-menu-list" href="<?php echo base_url(); ?>Service/Top_land_acquisition_consultants_in_Mumbai"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i><span> Land Acquisition </span></a></li>
                                                    <li class="under-b"><a class="dropdown-item p-0 mega-menu-list" href="<?php echo base_url(); ?>Service/Land_Record_Village_Map"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Land Record Verification<br><span class="two-line"> & Modification </span></a></li>
                                                    <li class="under-b"><a class="dropdown-item p-0 mega-menu-list" href="<?php echo base_url(); ?>Service/Master_planning_in_city_survey"><i class="for-border fa-solid fa-chevron-right fa-sm"></i><span> Master Planning </span></a></li>
                                                    <li class="under-b"><a class="dropdown-item p-0 mega-menu-list" href="<?php echo base_url(); ?>Service/Geospatial_Land_Surveyor"><i class="for-border fa-solid fa-chevron-right fa-sm"></i><span> Geospatial & IT Solutions </span></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3 mb-md-0 for-mega-menu">
                                        <h3 class="colour"><span class="decoration"><?php echo $banner_item['Capabilities']; ?></span></h3>

                                        <div class="link">
                                            <ul class="dot">
                                                <li class="under-b"><a class="dropdown-item p-0 mega-menu-list" href="<?php echo base_url(); ?>Service/Construction_Project_management_company"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i><span> Project Planning & Management </span></a></li>
                                                <li class="under-b"><a class="dropdown-item p-0 mega-menu-list" href="<?php echo base_url(); ?>Service/Environmental_and_crz_Clearance"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i><span> Project Clearance </span></a></li>
                                                <li class="under-b"><a class="dropdown-item p-0 mega-menu-list" href="<?php echo base_url(); ?>Service/Building_plan_approval"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i><span> Architecture </span></a></li>
                                                <li class="under-b"><a class="dropdown-item p-0 mega-menu-list" href="<?php echo base_url(); ?>Service/Land_report_advisory "><i class="for-border fa-solid fa-chevron-right fa-sm"></i><span> Land & Building Valuation </span></a></li>


                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown  for-mobile">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Service
                        </a>
                        <div class="dropdown-menu drop-custom" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>Service/Top_land_survey"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Engineering Survey</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>Service/Top_land_acquisition_consultants_in_Mumbai"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Land Acquisition</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>Service/Land_Record_Village_Map"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Land Record Verification &<br><span class="hate"> Modification</span> </a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>Service/Master_planning_in_city_survey"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Master Planning</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>Service/Geospatial_Land_Surveyor"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Geospatial & IT Solutions</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>Service/Construction_Project_management_company"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Project Planning <br><span class="hate"> & Management</span> </a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>Service/Environmental_and_crz_Clearance"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Project Clearance </a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>Service/Building_plan_approval"><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Architecture</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>Service/Land_report_advisory "><i class="for-border  fa-solid fa-chevron-right fa-sm"></i> Land & Building Valuation </a>
                        </div>
                    </li>
                </ul>

                <li class="nav-item">
                    <a class="nav-link under_logo" href="<?php echo base_url(); ?>Land_advisory_services">Land-Advisory</a>
                </li>


                <!-- <li class="nav-item">
                    <a class="nav-link under_logo " href="<?php base_url(); ?>Property_lisiting_con">List Your Property</a>
                </li> -->
                <li>
                    <div class="dropdown">
                        <button class=" my-properties-drop-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class=""> Properties</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item word-link" href="<?php echo base_url() ?>Property_lisiting_con">List Properties</a>
                            <a class="dropdown-item word-link" data-toggle="modal" data-target="#comingSoonModal" href="#">View Properties</a>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="20">No data found.</td>
                </tr>
            <?php endif; ?>
                </li>

                <li class="nav-item">
                    <a class="nav-link under_logo" href="<?php echo base_url(); ?>Careers_at_Rane_management_consultant">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link under_logo" href="<?php echo base_url(); ?>Blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link under_logo" href="<?php echo base_url(); ?>Contact_us">Contacts</a>
                </li>
            </ul>
        </div>
    </nav>