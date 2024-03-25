<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/careers.css">
  <title>
    Start Your Career at Rane Management Consultant Pvt. Ltd
  </title>
  <meta name="description" content="We are organized to help you with Career Coaches, Progress Managers, & Trainers focused on your individual career needs.">


</head>
<style>
  /* styles.css */


  .banner {
    position: relative;
    width: 100%;
    height: 500px;
    background-image: url('/assets/new-img/All-Website-Images/Career-Page/Career-page-Website.webp');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: left;
    padding: 20px;
    box-sizing: border-box;
  }

  .banner-2 {
    position: relative;
    width: 100%;
    height: 500px;
    background-image: url('/assets/new-img/All-Website-Images/working-group/Working-Groups-Banner.webp');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: left;
    padding: 20px;
    box-sizing: border-box;
  }

  .banner-3 {
    position: relative;
    width: 100%;
    height: 700px;
    background-image: url('/assets/image/Careers/Image 3/Image 3.png');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: left;
    padding: 20px;
    box-sizing: border-box;
  }

  .banner-3-test {
    position: relative;
    width: 100%;
    height: 700px;
    background-image: url('/assets/image/Careers/Image 3/mobile-banner.png');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: left;
    padding: 20px;
    box-sizing: border-box;
  }
</style>

<div class="banner">
  <div class="banner-back-careers ">
    <h1>Careers</h1>
    <BR>
    <a href="#" class="banner_btn">Join our team of game-changers!</a>
  </div>
</div>

<div class="container">

  <h4 class="heading_careers"><span class="">If we have</span> any openings we will contact you!</h4>


  <div class="container-form-carrer">
    <!--<?php echo base_url() . 'Mail_demo'; ?>-->
    <form action="<?php echo base_url(); ?>Mail_demo" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label>Resume:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <div class="form-group">
        <input class="car-submit" type="submit" name="send" value="send">
      </div>
    </form>

  </div>
</div>
<br>


<div class="banner-2">
  <h2 class="banner-2-text heading_careers-2 "><span class="decoration">Working</span> Groups</h2>
  <p class="banner-2-para">You are in charge of your career, but you’re not alone. We are organized to help you with Career Coaches, Progress Managers, & Trainers focused on your individual career needs.</p>
</div>




<div class="mobile-container">
  <div class="row">
    <h2 class="start-career">Start Your Career at</h2>

    <div class="col-md-6">
      <!-- <div class="banner-3-test"></div> -->
      <img src="<?php base_url() ?>/assets/image/Careers/Image 3/mobile-banner.png" class="banner-4-test img-fluid" alt="img">
    </div>

    <div class="col-md-6">

      <h3 class="Consultant start-career"><span class="decoration"> Rane Man</span>agement Consultant Pvt.Ltd</h3>

      <br>
      <p class="banner-3-text">We are always looking for great people to join our team & will accept resumes for consideration.</p>
      <button class="banner-3-btn">
        See Open Position
        <i class="fas fa-arrow-circle-right fa-lg"></i>
      </button>
    </div>
  </div>
</div>



<div class="banner-3 tablet">
  <h1 class="banner-3-head">
    <spna style="font-size:66px">Start Your Career at</span>
      <span style="font-size:34px; font-weight: 700; "><span class="decoration"><br> Rane Man</span>agement Consultant Pvt.Ltd</span>
  </h1>
  <br>
  <p class="banner-3-text">We are always looking for great people to join our team & will accept resumes for consideration.</p>
  <button class="banner-3-btn">
    Submit your Resume
    <i class="fas fa-arrow-circle-right fa-lg"></i>
  </button>
</div>

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>