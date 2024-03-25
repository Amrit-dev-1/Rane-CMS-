<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
  <link rel="stylesheet" href="<?php base_url(); ?>assets/css/pro2.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<style>
  /* CSS for different screen sizes using media queries */

  /* For screens larger than 1200px, use the default height of 300px */
</style>

<Br><Br>
<Br><Br>
<Br>

<div class="container">
  <div class="row" id="myItems">
    <div class="col-md-6">
      <div class="map-container" id="mapFrame">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3768.940088013346!2d72.99383817381874!3d19.154099649518862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20Shubhangi%20Niwas%2C%20Row%20House%20No.%20C%20-%2017%2C%20Sector%20-%204%2C%20Airoli%2C%20Navi%20Mumbai%20-%20400708.!5e0!3m2!1sen!2sin!4v1703651197266!5m2!1sen!2sin" width="650px" height="522" style=" 
			box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
			border:none	;		
			" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>



    <!-- scroller -->

    <div id="columnElement1" class="col-md-6">

      <div class="container-filter">
        <div class="row">
          <div class="col-md-2">
            <div class="inputs">
              <input type="text" id="myFilter" onkeyup="myFunction()" placeholder=" Maharashtra" class="input-states">
              <i class="fa-solid fa-location-dot rel"></i>
              <i class="fa-solid fa-location-dot rel"></i>
            </div><br>
          </div>


          <div class="col-md-2">

            <div class="dropdown">
              <select id="columnElement" class="dropdown-sale">
                <option value="sales">Sales </option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
                <option value="option4">Option 4</option>
              </select>
              <Br>

              <i class="fa-solid fa-circle-check rel2"></i>
            </div>



          </div>

          <div class="col-md-2">

            <button class="dropdown-sale2" id="modifyBtn"> Hide Map </button>
          </div>
          <br>
          <i class="fa-solid fa-map-location-dot rel3"></i>

        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col">
            <h4 class="update">3,705 Properties for Sale in or near Maharashtra Last Updated</h4>
          </div>
          <div class="">
            <div class="update-btn">
              <select id="columnElement" value="apple" class="dropdown-sale form-control">
                <option value="option1"> Last Updated </option>
                <option value="option2">Rent (High to Low)</option>
                <option value="option3">Rent (Low to high)</option>
                <option value="option3">Last Updated</option>
                <option value="option3">Size (Smallest) </option>
                <option value="option3">Size (Largest)</option>
              </select>
            </div>
          </div>
          <div class="">
            <div class="redirect-container ">
              <i class="fa-solid fa-arrow-up-right-from-square fa-lg"></i>
            </div>
          </div>
        </div>
      </div>


      <ul class="scroller" id="style-9">

        <div class="col-md-12">




          <li class="scroll-card" id="option1Card">
            <div class="card flex-row">
              <img class="card-img-left2 example-card-img-responsive card-image" src="assets/image/Placement Area [ASSETsmall][SIZEDefault][STATEDEFAULT]/Placement Area [ASSETsmall][SIZEDefault][STATEDEFAULT]@2x.png" />
              <div class="card-body">
                <p class="font1">Office For Lease</p>
                <h5 class="card-title h5 h4-sm">Building option 1</h5>
                <p class="font1">Mumbai, Worli West<br>20,550 sqft</p>
                <p class="font1">₹3,750,000</p>
                <a href="<?php base_url(); ?>Properties_con" class="btns">Read More</a>

                <!-- <button class="btns">Read More</button> -->
              </div>
            </div>

          </li>



          <li class="scroll-card" id="option2Card">
            <div class="card flex-row">
              <img class="card-img-left2 example-card-img-responsive card-image" src="<?php base_url(); ?>assets/image/new ser/Placement Area [ASSETsmall][SIZEDefault][STATEDEFAULT]/Placement Area [ASSETsmall][SIZEDefault][STATEDEFAULT].png" />

              <div class="card-body">
                <p class="font1">Office For Lease</p>
                <h4 class="card-title h5 h4-sm">Building option 2</h4>
                <p class="font1">Mumbai, Worli West<br>20,550 sqft</p>
                <p class="font1">₹3,750,000</p>
                <a href="<?php base_url(); ?>Properties_con" class="btns">Read More</a>
                <!-- <button class="btns">Read More</button> -->
              </div>
            </div>

          </li>
          </li>


          <li class="scroll-card" id="option3Card">
            <div class="card flex-row">
              <img class="card-img-left2 example-card-img-responsive card-image" src="assets/image/Placement Area [ASSETsmall][SIZEDefault][STATEDEFAULT]/Placement Area [ASSETsmall][SIZEDefault][STATEDEFAULT]@2x.png" />
              <div class="card-body">

                <p class="font1">Office For Lease</p>
                <h4 class="card-title h5 h4-sm">Building option 3</h4>
                <p class="font1">Mumbai, Worli West<br>20,550 sqft</p>
                <p class="font1">₹3,750,000</p>
                <a href="<?php base_url(); ?>Properties_con" class="btns">Read More</a>
                <!-- <button class="btns">Read More</button> -->
              </div>
            </div>

          </li>

          </li>

          <li class="scroll-card" id="option4Card">
            <div class="card flex-row">
              <img class="card-img-left2 example-card-img-responsive card-image" src="<?php base_url(); ?>assets/image/new ser/Placement Area [ASSETsmall][SIZEDefault][STATEDEFAULT]/Placement Area [ASSETsmall][SIZEDefault][STATEDEFAULT].png" />
              <div class="card-body">

                <p class="font1">Office For Lease</p>
                <h4 class="card-title h5 h4-sm">Building option 4</h4>
                <p class="font1">Mumbai, Worli West<br>20,550 sqft</p>
                <p class="font1">₹3,750,000</p>
                <a href="<?php base_url(); ?>Properties_con" class="btns">Read More</a>

              </div>
            </div>

          </li>

          </li>

        </div>

    </div>
  </div>

  <script>
    document.getElementById("modifyBtn").addEventListener("click", function() {
      var columnElement1 = document.getElementById("columnElement1");
      var mapFrame = document.getElementById("mapFrame");

      if (columnElement1) {

        columnElement1.classList.remove("col-md-6");
        columnElement1.classList.add("col-md-9");
      } else {
        alert("Column element not found!");
      }

      if (mapFrame) {

        mapFrame.remove();
      } else {
        alert("Map iframe not found!");
      }
    });
  </script>



  <script>
    const dropdown = document.getElementById('columnElement');
    const cards = document.querySelectorAll('.scroll-card');

    // Add event listener for change in the dropdown
    dropdown.addEventListener('change', function() {
      const selectedValue = dropdown.value;

      // If "Sales" is selected, hide all cards
      if (selectedValue === 'sales') {
        cards.forEach(card => {
          card.style.display = 'block';
        });
      } else {
        // Show the specific card based on the selected value
        cards.forEach(card => {
          card.style.display = 'none';
          const cardId = selectedValue + 'Card';
          if (card.id === cardId) {
            card.style.display = 'block';
          }
        });
      }
    });
  </script>



  <br><Br><br>
  <?php
  $this->load->view('RMC_view/layout/footeer_view.php');
  ?>