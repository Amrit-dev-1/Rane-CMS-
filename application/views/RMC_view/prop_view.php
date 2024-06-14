<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<style>
    /* @media only screen and (min-width: 1025px) and (max-width: 1200px) */
    form {
        width: 100% !important
    }
</style>
<!-- banner -->
<div class="banner-listing ">
    <div class="banner-back-service-8" data-aos="fade-right" data-aos-duration="2000">
        <h1 class="banner-title"> List Your Property With Us <span class="decoration"></span></h1><br>

        <p class="banner-para">Your Trust, Our Expertise – Valuing Real Estate with Integrity.</p>
    </div>
</div>
<!-- banner -->


<!-- set us apart sections  -->
<!-- <div class="container text-center">

    <h2 class="title-pro">What Sets Us Apart?</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card-icon">
                <img src="<?php base_url() ?>assets/new-img/All-Website-Images/What-Set-Us-Apart-Section/Section-01.webp" alt="icon-1">
                <h3>Buy </h3>
                <p class="sub-title">Your Dream Plot Awaits!</p>
                <p>Explore a curated selection of prime properties. Your dream home is just a click away!</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-icon">
                <img src="<?php base_url() ?>assets/new-img/All-Website-Images/What-Set-Us-Apart-Section/Section-02.webp" alt="icon-1">
                <h3>Sell </h3>
                <p class="sub-title">Unleash the True Value!</p>
                <p>Maximize the potential of your land. Our experts guide you through the selling process for the best returns.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-icon">
                <img src="<?php base_url() ?>assets/new-img/All-Website-Images/What-Set-Us-Apart-Section/Section-03.webp" alt="icon-1">
                <h3>Lease</h3>
                <p class="sub-title">Lucrative Opportunities at Your Fingertips!</p>
                <p>Lease - Lucrative Opportunities at Your Fingertips!</p>
            </div>
        </div>
    </div>

    <a class="Explore" href="#">Explore</a>
</div> -->
<!-- set us apart sections  -->
<br>
<!-- section your dream  -->

<div class="container">
    <h2 class="title-pro">List Your Property With Us </h2>
    <div class="Dream_btn_container">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <button class="button-row" data-toggle="modal" data-target="#propertyListingModal">Sell</button>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <button class="button-row" data-toggle="modal" data-target="#propertyLeaseModal">Lease</button>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <button class="button-row" data-toggle="modal" data-target="#jointDevelopmentModal">Joint Development</button>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <button class="button-row" data-toggle="modal" data-target="#redevelopmentModal">Redevelopment</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- section your dream  -->


<!-- section property card -->
<div class="container" data-aos="fade-up" data-aos-duration="3000">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="card-property" style="width: 18rem;">
                <img class="card-img-prop" src="<?= base_url() ?>assets/new-img/All-Website-Images/DummyPlot-Images/Buyimage01.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">SELL</h5>
                    <p class="card-text-1 img-fluid">List your land plots or commercial spaces effortlessly and expand your reach to a broader audience</p>
                    <a href="#" class="btn-prop-card " data-toggle="modal" data-target="#propertyListingModal">List </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="card-property" style="width: 18rem;">
                <img class="card-img-prop" src="<?= base_url() ?>assets/new-img/All-Website-Images/Plot-Images/LeasePropertyimage-copy.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">LEASE </h5>
                    <p class="card-text-1">List your land plots or commercial spaces for long term lease with ease on our platform</p>
                    <a href="#" class="btn-prop-card" data-toggle="modal" data-target="#propertyLeaseModal">List </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="card-property" style="width: 18rem;">
                <img class="card-img-prop" src="<?= base_url() ?>assets/new-img/All-Website-Images/Plot-Images/JointDevelopmentImage.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">JOINT DEVELOPMENT </h5>
                    <p class="card-text-1">If you have land and seek a developer, let us connect you with the perfect match for a joint venture.</p>
                    <a href="#" class="btn-prop-card" data-toggle="modal" data-target="#jointDevelopmentModal">List </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="card-property" style="width: 18rem;">
                <img class="card-img-prop" src="<?= base_url() ?>assets/new-img/All-Website-Images/Plot-Images/Redevlopmentimage.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">REDEVELOPMENT </h5>
                    <p class="card-text-1">If you're a society seeking a redevelopment partner, we'll seamlessly connect you with experienced developers.</p>
                    <a href="#" class="btn-prop-card" data-toggle="modal" data-target="#redevelopmentModal">List </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section property card -->

<!-- Why chouse us section -->

<div class="section" data-aos="fade-up" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
    <div class="container">
        <h2 class="title-pro">Why Choose Us? </h2>
        <div class="row">
            <div class="col-md-4">
                <div class="why-choose-us-container">
                    <div class="card-why text-center">
                        <img class="img-why-choose-us " src="<?= base_url() ?>assets/new-img/All-Website-Images/Why-Choose-Us/Land-Experties.webp" alt="Card image cap">
                        <h4>Decades of Land Revenue Expertise</h4>
                        <p>With over 25 years of seasoned experience in land revenue management, we possess unparalleled expertise in navigating the complexities of property transactions, ensuring smooth processes for our clients.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-choose-us-container">
                    <div class="card-why text-center">
                        <img class="img-why-choose-us-2" src="<?= base_url() ?>assets/new-img/All-Website-Images/Why-Choose-Us/Qualified-Employee.webp" alt="Card image cap">

                        <h4>Revenue-Qualified Staff</h4>
                        <p>Our team comprises highly skilled professionals who are not only well-versed in property regulations and revenue laws but also possess the necessary qualifications and certifications to handle all aspects of property transactions effectively. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-choose-us-container">
                    <div class="card-why text-center">
                        <img class="img-why-choose-us" src="<?= base_url() ?>assets/new-img/All-Website-Images/Why-Choose-Us/Trust-01.webp" alt="Card image cap">

                        <h4>Reliability and Trustworthiness</h4>
                        <p>We pride ourselves on our reputation for reliability. Clients can trust us to deliver on our promises, providing transparent and dependable services throughout every stage of their property transactions.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="why-choose-us-container">
                    <div class="card-why text-center">
                        <img class="img-why-choose-us" src="<?= base_url() ?>assets/new-img/All-Website-Images/Why-Choose-Us/comprehensive-01.png" alt="Card image cap">

                        <h4>Comprehensive Services</h4>
                        <p>From buying and selling to leasing and partnering for joint development or redevelopment projects, we offer a comprehensive range of services tailored to meet the diverse needs of our clients, ensuring that all their property requirements are met under one roof.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-choose-us-container">
                    <div class="card-why text-center">
                        <img class="img-why-choose-us" src="<?= base_url() ?>assets/new-img/All-Website-Images/Why-Choose-Us/Strategic-01.webp" alt="Card image cap">

                        <h4>Strategic Partnerships</h4>
                        <p>Leveraging our extensive network and strategic partnerships within the real estate industry, we are well-equipped to connect clients with lucrative opportunities for joint development or redevelopment projects, maximizing their investment potential.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-choose-us-container">
                    <div class="card-why text-center">
                        <img class="img-why-choose-us" src="<?= base_url() ?>assets/new-img/All-Website-Images/Why-Choose-Us/Customer-01.webp" alt="Card image cap">

                        <h4>Customer-Centric Approach</h4>
                        <p>At the heart of our operations lies a commitment to putting our clients' needs first. We prioritize clear communication, personalized attention, and proactive problem-solving, ensuring a seamless and satisfactory experience for every client we serve.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Why chouse us section -->


<!-- list your property -->

<section>
    <h2 class="title-pro"> List Your Property </h2>
    <div class="list-para-conatainer">
        <p>
            List your property with Rane Management Consultant Pvt. Ltd. and tap into our decades-long expertise in precision land surveying, revenue data management, and infrastructure development. Trust us to showcase your property with unparalleled accuracy and attention to detail.</p>
    </div>

    <div class="container-icons text-center">
        <!-- <div class="row">
            <div class="col-md-4">
                <div class="icon-cards">
                    <img src="<?= base_url() ?>assets/new-img/All-Website-Images/List-Your-Property/contact-information-01.webp" alt="">
                    <p>Contact Information</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-cards">
                    <img src="<?= base_url() ?>assets/new-img/All-Website-Images/List-Your-Property/PropertyDetails-01.webp" alt="">
                    <p>Property Details</p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-cards">
                    <img src="<?= base_url() ?>assets/new-img/All-Website-Images/List-Your-Property/Submission-01.webp" alt="">
                    <p>Submission</p>

                </div>
            </div>

            <button data-toggle="modal" data-target="#redevelopmentModal" class="list-btn"> <i class="fa-solid fa-list"></i> List </button>
        </div> -->
        <img src="<?php echo base_url() ?>assets/new-img/All-Website-Images/timeline/List-Your-Property.jpg" class="img-fluid time-line-img for-desktop " alt="">

        <img src="<?php echo base_url() ?>assets/new-img/All-Website-Images/timeline/List-Your-Property-Mobile-View.jpg" class="img-fluid time-line-img for-mobile " alt="">
        <button data-toggle="modal" data-target="#redevelopmentModal" class="list-btn "> <i class="fa-solid fa-list"></i> List </button>
    </div>

</section>

<!-- list your property -->



<!-- our client section  -->

    <?php
    $this->load->view('RMC_view/client_view.php');
    ?>

<!-- our client section  -->



<!-- Modal -->
<div class="modal fade" id="propertyListingModal" tabindex="-1" aria-labelledby="propertyListingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyListingModalLabel">Property Sales Listing Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <form action="<?php base_url() ?>mail_demo" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="property_type">Type of Property:</label>
                        <select class="form-control" id="property_type" name="property_type" required>
                            <option value="">Select Type</option>
                            <option value="Building Residential">Building Residential</option>
                            <option value="Building Commercial">Building Commercial</option>
                            <option value="Building Industrial">Building Industrial</option>
                            <option value="Building Industrial">Others</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="property_description">Property Description:</label>
                        <textarea class="form-control" id="property_description" name="property_description" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>

                    <div class="form-group">
                        <label>Existing Structures:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="existing_structures" id="existing_yes" value="yes" required>
                            <label class="form-check-label" for="existing_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="existing_structures" id="existing_no" value="no" required>
                            <label class="form-check-label" for="existing_no">No</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="total_area">Total Area:</label>
                        <input type="text" class="form-control" id="total_area" name="total_area" required>
                    </div>

                    <div class="form-group">
                        <label for="built_up_area">Built-up Area:</label>
                        <input type="text" class="form-control" id="built_up_area" name="built_up_area">
                    </div>

                    <div class="form-group">
                        <label for="features_highlights">Features/Highlights:</label>
                        <textarea class="form-control" id="features_highlights" name="features_highlights" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="asking_price">Asking Price:</label>
                        <input type="text" class="form-control" id="asking_price" name="asking_price" required>
                    </div>

                    <div class="form-group">
                        <label for="specific_terms_conditions">Specific Terms or Conditions:</label>
                        <textarea class="form-control" id="specific_terms_conditions" name="specific_terms_conditions" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="photos">Photos:</label>
                        <input type="file" class="form-control-file" id="photos" name="photos[]" accept="image/*" multiple required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit_property_listing">Submit</button>
                </form> -->
                <form action="<?php echo base_url(); ?>mail_demo" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="property_type">Residential Plot/ Commercial building</label>
                        <select class="form-control" id="property_type" name="property_type" required>
                            <option value="">Select Type</option>
                            <option value="Residential Plot"> Residential Building</option>
                            <option value="Building Commercial"> Commercial Building</option>
                            <option value="Building Industrial"> Industrial Building</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="property_description">Property Description:</label>
                        <textarea class="form-control" id="property_description" placeholder="E.g. Survey No.5 /Hissa No.2A / Akurli / Panvel / Raigad/ Maharashtra" name="property_description" rows="4" required></textarea>
                        <small class="text-muted">Please provide a detailed description including number of rooms, amenities, etc.</small>
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input pattern="[A-Za-z0-9]+" type="text" class="form-control" id="location" name="location" placeholder="E.g.  Akurli/ Raigad/ Maharashtra" required>
                        <small class="text-muted">Are there any existing structures on the property</small>
                    </div>

                    <div class="form-group">
                        <label>Existing Structures:</label><br>
                        <div class="form-check form-check-inline">
                            <input pattern="[A-Za-z0-9]+" class="form-check-input" type="radio" name="existing_structures" id="existing_yes" value="yes" required>
                            <label class="form-check-label" for="existing_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input pattern="[A-Za-z0-9]+" class="form-check-input" type="radio" name="existing_structures" id="existing_no" value="no" required>
                            <label class="form-check-label" for="existing_no">No</label>
                        </div><br>
                        <small class="text-muted">Specify whether there are any existing structures on the property.</small>
                    </div>

                    <div class="form-group">
                        <label for="total_area">Total Area:</label>
                        <input pattern="[A-Za-z0-9]+" type="text" class="form-control" id="total_area" name="total_area" placeholder="E.g.4000 Sq.mt " required>
                        <small class="text-muted">Enter the total area of the property in square feet or square meters.</small>
                    </div>

                    <div class="form-group">
                        <label for="built_up_area">Built-up Area:</label>
                        <input pattern="[A-Za-z0-9]+" type="text" class="form-control" id="built_up_area" placeholder="E.g. 400 Sq.mt " name="built_up_area">
                        <small class="text-muted">If applicable, enter the built-up area in square feet or square meters.</small>
                    </div>

                    <div class="form-group">
                        <label for="features_highlights">Features/Highlights:</label>
                        <textarea class="form-control" id="features_highlights" name="features_highlights" placeholder="Market Area" rows="4" required></textarea>
                        <small class="text-muted">Highlight key features or amenities of the property.</small>
                    </div>

                    <div class="form-group">
                        <label for="asking_price">Asking Price:</label>
                        <input pattern="[A-Za-z0-9]+" type="text" class="form-control" id="asking_price" placeholder="INR 5,00,00,000 " name="asking_price" required>
                        <small class="text-muted">Enter the desired price for the property.</small>
                    </div>

                    <div class="form-group">
                        <label for="specific_terms_conditions">Specific Terms or Conditions:</label>
                        <textarea class="form-control" id="specific_terms_conditions" name="specific_terms_conditions" placeholder="Specify any additional details or conditions" rows="4"></textarea>
                        <small class="text-muted">Specify any additional terms or conditions for the property.</small>
                    </div>

                    <div class="form-group">
                        <label for="photos">Photos:</label>
                        <input  type="file" class="form-control-file" id="photos_sends[]" name="photos_sends[]" accept="image/*" multiple required>
                        <small class="text-muted">Upload high-quality photos to showcase the property.</small>
                    </div>

                    <button type="submit" class="prop-listing-btn" name="submit_property_listing">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="propertyLeaseModal" tabindex="-1" aria-labelledby="propertyLeaseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyLeaseModalLabel">Property Lease Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url() ?>mail_demo" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="property_type">Type of Property:</label>
                        <select class="form-control" id="property_type" name="property_type" required>
                            <option value="">Select Type</option>
                            <option value="Building Residential"> Residential Building</option>
                            <option value="Building Commercial"> Commercial Building</option>
                            <option value="Building Industrial"> Industrial Building</option>
                            <option value="Building Industrial">Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="property_description">Property Description:</label>
                        <textarea class="form-control" id="property_description" name="property_description" rows="4" placeholder="E.g. 2 Storey Factory in Navi Mumbai MIDC" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input pattern="[A-Za-z0-9]+" type="text" class="form-control" id="location" name="location" placeholder="E.g. Plot no. 8, Gansoli, Navi Mumbai" required>
                    </div>

                    <div class="form-group">
                        <label>Existing Structures:</label><br>
                        <div class="form-check form-check-inline">
                            <input pattern="[A-Za-z0-9]+" class="form-check-input" type="radio" name="existing_structures" id="existing_yes" value="yes" required>
                            <label class="form-check-label" for="existing_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  class="form-check-input" type="radio" name="existing_structures" id="existing_no" value="no" required>
                            <label class="form-check-label" for="existing_no">No</label>
                        </div>
                        <br>
                        <small class="text-muted">Specify whether there are any existing structures on the property.</small>
                    </div>

                    <div class="form-group">
                        <label for="total_area">Total Area:</label>
                        <input pattern="[A-Za-z0-9]+" type="text" class="form-control" id="total_area" name="total_area" placeholder="E.g.4000 Sq.mt " required>
                    </div>

                    <div class="form-group">
                        <label for="built_up_area">Built-up Area:</label>
                        <input type="text" pattern="[A-Za-z0-9]+"  class="form-control" id="built_up_area" placeholder="E.g 8000 Sq.mt " name="built_up_area">
                    </div>

                    <div class="form-group">
                        <label for="features_highlights">Features/Highlights:</label>
                        <textarea class="form-control" id="features_highlights" name="features_highlights" placeholder="Ample water supply and electric substation inside plot " rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="lease_period">Lease Period:</label>
                        <input type="text" pattern="[A-Za-z0-9]+" class="form-control" id="lease_period" name="lease_period" placeholder="E.g. 10 years " required>
                    </div>

                    <div class="form-group">
                        <label for="asking_price_month">Asking Price per Month:</label>
                        <input type="text" pattern="[A-Za-z0-9]+" class="form-control" id="asking_price_month" placeholder="INR 5,00,000 " name="asking_price_month" required>
                    </div>

                    <div class="form-group">
                        <label for="specific_terms_conditions">Specific Terms or Conditions:</label>
                        <textarea class="form-control" placeholder="Specify any additional details or conditions" id="specific_terms_conditions" name="specific_terms_conditions" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="photos">Photos:</label>
                        <input type="file" class="form-control-file" id="photos_sends[]" name="photos_sends[]" accept="image/*" multiple required>
                        <small class="text-muted">Upload high-quality photos to showcase the property.</small>
                    </div>

                    <button type="submit" name="submit_property_lease" class="prop-listing-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="jointDevelopmentModal" tabindex="-1" aria-labelledby="jointDevelopmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jointDevelopmentModalLabel">Joint Development/JV Property Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>mail_demo" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="property_type">Type of Property:</label>
                        <select class="form-control" id="property_type" name="property_type" required>
                            <option value="">Select Type</option>
                            <option value="Building Residential"> Residential Building</option>
                            <option value="Building Commercial"> Commercial Building</option>
                            <option value="Building Industrial"> Industrial Building</option>
                            <option value="Building Industrial">Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="property_description">Property Description:</label>
                        <textarea class="form-control" id="property_description" name="property_description" placeholder="Non-Agriculture Plot in Panvel under Village Gram Panchayat Seeking Developer for Development" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" pattern="[A-Za-z0-9]+" class="form-control" placeholder="E.g. Survey No.5 /Hissa No.2A / Akurli / Panvel / Raigad/ Maharashtra" id="location" name="location" required>
                    </div>

                    <div class="form-group">
                        <label>Existing Structures:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="existing_structures" id="existing_yes" value="yes" required>
                            <label class="form-check-label" for="existing_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="existing_structures" id="existing_no" value="no" required>
                            <label class="form-check-label" for="existing_no">No</label>
                        </div>
                        <br>
                        <small class="text-muted">Specify whether there are any existing structures on the property.</small>
                    </div>

                    <div class="form-group">
                        <label for="total_area">Total Area:</label>
                        <input pattern="[A-Za-z0-9]+" type="text" class="form-control" placeholder="E.g.4000 sq.mt " id="total_area" name="total_area" required>
                    </div>

                    <div class="form-group">
                        <label for="built_up_area">Built-up Area:</label>
                        <input pattern="[A-Za-z0-9]+" type="text" class="form-control" id="built_up_area" name="built_up_area" disabled>
                        <small class="form-text text-muted">Not Applicable (NA)</small>
                    </div>

                    <div class="form-group">
                        <label for="features_highlights">Features/Highlights:</label>
                        <textarea class="form-control" id="features_highlights" placeholder="Open Plot with flat terrain  " name="features_highlights" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="lease_period">Lease Period:</label>
                        <input pattern="[A-Za-z0-9]+" type="text" class="form-control" id="lease_period" placeholder="E.g. 10 years " name="lease_period" required>
                    </div>

                    <div class="form-group">
                        <label for="specific_terms_conditions">Specific Terms or Conditions for JV:</label>
                        <textarea class="form-control" placeholder="Looking for 60:40 Split " id="specific_terms_conditions" name="specific_terms_conditions" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="photos">Photos:</label>
                        <input pattern="[A-Za-z0-9]+" type="file" class="form-control-file" id="photos_sends[]" name="photos_sends[]" accept="image/*" multiple required>
                        <small class="text-muted">Upload high-quality photos to showcase the property.</small>
                    </div>

                    <button type="submit" name="submit_joint_development" id="submit_joint_development" class="prop-listing-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="redevelopmentModal" tabindex="-1" aria-labelledby="redevelopmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="redevelopmentModalLabel">Redevelopment Property Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>mail_demo" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="property_type">Type of Property:</label>
                        <select class="form-control" id="property_type" name="property_type" required>
                            <option value="">Select Type</option>
                            <option value="Building Residential"> Residential Building</option>
                            <option value="Building Commercial"> Commercial Building</option>
                            <option value="Building Industrial"> Industrial Building</option>
                            <option value="Building Industrial">Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="property_description">Property Description:</label>
                        <textarea class="form-control" id="property_description" placeholder="Seeking developer for 50-year-old building with society, housing 50 tenants,  FSI development potential of 4" name="property_description" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" pattern="[A-Za-z0-9]+" class="form-control" id="location" placeholder="Laskya Apartments, Kurla " name="location" required>
                    </div>

                    <div class="form-group">
                        <label>Existing Structures:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="existing_structures" id="existing_yes" value="yes" required>
                            <label class="form-check-label" for="existing_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="existing_structures" id="existing_no" value="no" required>
                            <label class="form-check-label" for="existing_no">No</label>
                        </div>
                        <br>
                        <small class="text-muted">Specify whether there are any existing structures on the property.</small>
                    </div>

                    <div class="form-group">
                        <label for="total_area">Total Area:</label>
                        <input type="text" pattern="[A-Za-z0-9]+" placeholder="E.g.4000 sq.mt " class="form-control" id="total_area" name="total_area" required>
                    </div>

                    <div class="form-group">
                        <label for="built_up_area">Built-up Area:</label>
                        <input type="text" pattern="[A-Za-z0-9]+" placeholder="2000 " class="form-control" id="built_up_area" name="built_up_area" required>
                    </div>

                    <div class="form-group">
                        <label for="features_highlights">Features/Highlights:</label>
                        <textarea class="form-control" placeholder="Nearby Railway Station  " id="features_highlights" name="features_highlights" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="specific_terms_conditions">Specific Terms or Conditions for Redevelopment:</label>
                        <textarea class="form-control" placeholder="500sqft area per tenan" id="specific_terms_conditions" name="specific_terms_conditions" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photos">Photos:</label>
                        <input type="file" class="form-control-file" id="photos_sends[]" name="photos_sends[]" accept="image/*" multiple required>
                        <small class="text-muted">Upload high-quality photos to showcase the property.</small>
                    </div>

                    <button type="submit" name="submit_redevelopment" class="prop-listing-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>