<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="falcon";
    $name;
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
$r=mysqli_query($conn,"select*from book");


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vacation Rental - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col d-flex align-items-center">
							<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html">Vacation<span>Rental</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item active"><a href="services.html" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="rooms.html" class="nav-link">Apartment Room</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <!-- <div class="background-image"></div> -->
    <div class="bg-blue-light">
      <div class="container py-5">
      <ul class="list-unstyled d-flex justify-content-around quick-facts-list">
      <li>
      <img src="images/length.svg">
      <div class="quick-fact-item">
      Length
      <b>48m</b>
      </div>
      </li>
      <li>
      <img src="images/beam.svg" style="margin-top: 5px;">
      <div class="quick-fact-item">
        Beam
        <b>9.5m</b>
      </div>
      </li>
      <li>
      <img src="images/capacity.svg">
      <div class="quick-fact-item">
      Capacity
      <b>30</b>
      </div>
      </li>
      <li>
      <img src="images/speed.svg">
      <div class="quick-fact-item">
      Speed
      <b>14KTS</b>
      </div>
      </li>
      </ul>
      </div>
      
      </div>
      <section class="container py-5">
        <div class="row">
        <div class="col-md-6">
        <h2 class="text-blue" style="color: #066594;
        font-size: xxx-large;">Falcone</h2>
        <p>
        MY Seawolf Steel is a 48 m long and 9.5 m wide boat. It has 12 double cabins and 3 suites, each with private bathroom and individually controlled air conditioning and can accommodate 30 divers. The air-conditioned salon with sea view, the air-conditioned dining area and the sun deck with loungers provide enough space to relax and entertain with DVD and music.
        </p>
        <a href="/schedule" class="btn btn-orange mb-3 mb-md-0">
        Schedule
        </a>
        </div>
        <div class="col-md-6 d-flex justify-content-around">
        <div class="square-blue" style="  background-color: #03a4f3;;
        width: 54%;">
        <svg id="Group_655" data-name="Group 655" xmlns="http://www.w3.org/2000/svg" width="76.588" height="62" viewBox="0 0 76.588 62" style="">
        <g id="Group_654" data-name="Group 654" transform="translate(0 0)">
        <path id="Path_2229" data-name="Path 2229" d="M69.294,230.067v-16.6A5.477,5.477,0,0,0,63.824,208H12.765a5.477,5.477,0,0,0-5.471,5.471v16.6A9.135,9.135,0,0,0,0,239v29.176A1.824,1.824,0,0,0,1.824,270H9.118a1.824,1.824,0,0,0,1.824-1.824v-5.471H65.647v5.471A1.824,1.824,0,0,0,67.471,270h7.294a1.824,1.824,0,0,0,1.824-1.824V239A9.135,9.135,0,0,0,69.294,230.067Zm-58.353-16.6a1.827,1.827,0,0,1,1.824-1.824H63.824a1.827,1.827,0,0,1,1.824,1.824v16.412H62v-7.294a5.477,5.477,0,0,0-5.471-5.471H45.588a5.477,5.477,0,0,0-5.471,5.471v7.294H36.471v-7.294A5.477,5.477,0,0,0,31,217.118H20.059a5.477,5.477,0,0,0-5.471,5.471v7.294H10.941Zm47.412,9.118v7.294H43.765v-7.294a1.827,1.827,0,0,1,1.824-1.824H56.529A1.827,1.827,0,0,1,58.353,222.588Zm-25.529,0v7.294H18.235v-7.294a1.827,1.827,0,0,1,1.824-1.824H31A1.827,1.827,0,0,1,32.824,222.588Zm40.118,43.765H69.294v-5.471a1.824,1.824,0,0,0-1.824-1.824H9.118a1.824,1.824,0,0,0-1.824,1.824v5.471H3.647V251.765H72.941Zm0-18.235H3.647V239a5.477,5.477,0,0,1,5.471-5.471H67.471A5.477,5.477,0,0,1,72.941,239Z" transform="translate(0 -208)" fill="#fff"></path>
        </g>
        </svg>
        <dl>
        <pre id="pre"> Double Cabin :12 
    Suites:3</pre>
        </dl>
        </div>
        <a href="/photos/safari-boats/boatplan/Cabin-decks 500x500_lg.webP" id="www" class="square-orange popup-image" target="_blank" style="background-color: orange;
        width: 46%; ">
        <svg class="orange" xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 77 77">
        <g id="Group_658" data-name="Group 658" transform="translate(0 0)">
        <g id="Group_657" data-name="Group 657" transform="translate(0 0)">
        <path id="Path_2230" data-name="Path 2230" d="M76.178,6.623,57.543.07a1.229,1.229,0,0,0-.815,0L38.5,6.48,20.272.07a1.229,1.229,0,0,0-.815,0L.821,6.623A1.229,1.229,0,0,0,0,7.782V75.771A1.229,1.229,0,0,0,1.636,76.93l18.228-6.41,18.228,6.41a1.229,1.229,0,0,0,.815,0l18.228-6.41,18.228,6.41A1.229,1.229,0,0,0,77,75.771V7.782A1.23,1.23,0,0,0,76.178,6.623ZM18.636,11.649V34.173l-7.985,2.808A1.229,1.229,0,0,0,9.83,38.14v7.782a1.229,1.229,0,0,0,2.457,0V39.01l6.348-2.232v21.15L12.287,60.16V54.113a1.229,1.229,0,0,0-2.457,0v7.782a1.229,1.229,0,0,0,1.636,1.159l7.17-2.521v7.815L2.457,74.037V8.653L18.635,2.964v8.685ZM37.271,74.037,21.093,68.348V60.533l16.178,5.689v7.815Zm0-34.175-6.86-2.412V30.718a1.229,1.229,0,0,0-2.457,0v7.6a1.228,1.228,0,0,0,.821,1.159l8.5,2.988v21.15L21.093,57.927V13.383l6.86,2.412v6.731a1.229,1.229,0,0,0,2.457,0V16.66l6.86,2.412v20.79Zm0-23.394L21.093,10.778V2.964L37.271,8.653Zm21.093-3.084,6.348,2.233v20.79l-6.348-2.233ZM39.728,8.653,55.907,2.964v7.815L39.728,16.467Zm0,10.42,6.86-2.412v5.867a1.229,1.229,0,0,0,2.457,0V15.8l6.86-2.412v20.79l-6.86,2.412V30.718a1.229,1.229,0,0,0-2.457,0V37.45l-6.86,2.412ZM55.907,68.348,39.728,74.037V66.222l16.178-5.689v7.815Zm1.229-20.2a1.229,1.229,0,0,0-1.229,1.229v8.55L39.728,63.617V42.467l16.178-5.689v7.685a1.229,1.229,0,0,0,2.457,0V36.778l6.348,2.233V60.16l-6.348-2.232v-8.55A1.229,1.229,0,0,0,57.135,48.149ZM74.542,74.037,58.364,68.348V60.533l7.17,2.521a1.229,1.229,0,0,0,1.636-1.159V14.745a1.229,1.229,0,0,0-.821-1.159l-7.985-2.808V2.964L74.542,8.653Z" transform="translate(0 0)"></path>
        </g>
        </g>
        </svg>
        <p id="pra" > boat plan </p>
        </a>
        </div>
        </div>
        
        </section>
        <section class="container py-5">
          <div class="row">
          <div class="col-md-6">
          <h2 class="text-blue" style="color: #066594;
          font-size: xxx-large;"> Lounges &amp; interiors </h2>
          <ul class="list-unstyled list-checked">
            <li>8 air-conditioned double cabins lower deck, </li>
          <li>3 suites with king-size bed on the upper deck, </li>
          <li>2 double cabins on the upper deck, </li>
          <li>2 double cabins on the high deck, </li>
          <li>All cabins and suites are equipped with private bathroom and individual adjustable air conditioning </li>
          <li>1 air-conditioned salon with sea view is equipped with TV, music, DVD and bar</li>
          </ul>
          </div>
          <div class="col-md-6">
          <div class="ml-md-3">
          <h2 class="text-blue" style="color: #066594;
          font-size: xxx-large;"> Food &amp; Beverage </h2>
          <ul class="list-unstyled list-checked">
          <li>Buffet <span></span></li>
          <li>Vegetarian food <span></span></li>
          <li>Fruit <span></span></li>
          <li>Coffee, tea, water, soft drinks <span></span></li>
          <li>Coffee machine (cappuccino, espresso for payment) <span></span></li>
          <li>Alcohol (beer and wine for payment) <span></span></li>
          </ul>
          <div class="note d-flex justify-content-between">       </div>
          </div>
          </div>
          </div> 
          </section>
          <div class="slider" style="height: 500px;">
            <div class="background-image"></div>
            <img class="slide" src="images/room1.jpg" alt="Image 1">
            <img class="slide" src="images/room2.jpg" alt="Image 2">
            <img class="slide" src="images/room3.jpg" alt="Image 3">
            <img class="slide" src="images/body1.jpg" alt="Image 1">
            <img class="slide" src="images/body2.jpg" alt="Image 2">
            <img class="slide" src="images/body3.jpg" alt="Image 3">
            
            <img class="slide" src="images/room2.jpg" alt="Image 2">
            <img class="slide" src="images/room3.jpg" alt="Image 3">
            
            <img class="slide" src="images/body2.jpg" alt="Image 2">
            <img class="slide" src="images/body3.jpg" alt="Image 3">
            <img class="slide" src="images/room1.jpg" alt="Image 1">
            <img class="slide" src="images/room2.jpg" alt="Image 2">
            <img class="slide" src="images/room2.jpg" alt="Image 2">
            <img class="slide" src="images/room3.jpg" alt="Image 3">
            
            <img class="slide" src="images/body2.jpg" alt="Image 2">
            <img class="slide" src="images/body3.jpg" alt="Image 3">
            <img class="slide" src="images/room1.jpg" alt="Image 1">
            <img class="slide" src="images/room2.jpg" alt="Image 2">
            <button class="prev">❮</button>
            <button class="next">❯</button>
          </div>
         <form action="" method="post">
          <table class="table table-schedule mt-5 jrt jrt-instance-1">
                        <thead>
            <tr>
            <th>Dates</th>
            <th>Route</th>
            <th>Start / End</th>
            <th>Available</th>
            <th> Price</th>
            
            <th> Option</th>
            <th>Notes</th>
            <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
    <?php
    $selectQuery = "SELECT * FROM book ORDER BY ID ";
    $result = mysqli_query($conn, $selectQuery);
    
    while ($row = mysqli_fetch_array($result)) {
      echo '<tr>';
      echo '<td class="jrt-cell-1"><span>' . $row['begin'] . '</span><i class="material-icons right-arrow">&#8594;</i><span>'. $row['end'] .'</span> <div class="status Confirmed">Confirmed</div></td>';   
      echo '<td class="jrt-cell-2">' . $row['route'] . '</td>';
      echo '<td class="jrt-cell-3">' . $row['start'] . '<i class="material-icons right-arrow">&#8594;</i>' . $row['endTrip'] . '</td>';
      echo '<td class="jrt-cell-4">' . $row['available'] . '</td>';
      echo '<td class="jrt-cell-5">' . $row['price'] . '</td>';
      echo '<td class="jrt-cell-6">' . $row['option'] . '</td>';
      echo '<td class="jrt-cell-7">' . $row['notes'] . '</td>';
      echo '<td class="jrt-cell-8"><button type="button" class="btn btn-black disabled" onclick="redirectToOtherPage(' . $row['id'] . ')">Book</button></td>';
      echo '</tr>';
    }
    
    mysqli_close($conn);
    ?>
   <script>
function redirectToOtherPage(id) {
    window.location.href = "form.php?id=" + id;
}
</script>
         
            </tbody>
            </table>
          </form> 
            
           
        <style>
              .slider {

                display: flex;
                overflow-x: hidden; /* Hide scrollbars */
              }
              
              .slide {
                width: 40%; /* Each slide takes full width */
                flex: 0 0 auto; /* Disable shrinking and growing */
                transition: transform 0.5s ease-in-out; /* Smooth transition effect */
                height: 500px;
              }
              
              .prev, .next {
                position: absolute;
                top: 150%;
                transform: translateY(-50%);
                background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
                color: white;
                padding: 10px;
                cursor: pointer;
              }
              
              .prev {
                left: 10px;
              }
              
              .next {
                right: 10px;
              }
              @media only screen and (max-width: 800px) {
  .prev ,.next{
    top: 205%;
   
  }
}
              @media only screen and (max-width: 800px) {
              .slide {
                width: 100%; /* Each slide takes full width */
                
              }
            }           
              </style>
              
              
              
              <script>
              const slider = document.querySelector('.slider');
              const slides = document.querySelectorAll('.slide');
              const prevBtn = document.querySelector('.prev');
              const nextBtn = document.querySelector('.next');
              let currentSlide = 0;
              
              // Function to show the current slide
              function showSlide(index) {
  var transformValue = index * 85;
  
  if (window.innerWidth <= 800) {
    transformValue = index * 100;
  }
  
  slides.forEach(slide => slide.style.transform = `translateX(-${transformValue}%)`);
}
              
              // Event listeners for buttons
              prevBtn.addEventListener('click', () => {
                currentSlide--;
                if (currentSlide < 0) {
                  currentSlide = slides.length - 1;
                }
                showSlide(currentSlide);
              });
              
              nextBtn.addEventListener('click', () => {
                currentSlide++;
                if (currentSlide >= slides.length) {
                  currentSlide = 0;
                }
                showSlide(currentSlide);
              });
              
              // Show the first slide initially
              showSlide(currentSlide);
              </script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

    <style>
      .bg-blue-light {
  background-color: #f2faff;
}
.py-5 {
  padding-bottom: 3rem !important;
}
@media (min-width: 1200px) {
  .container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1140px;
  }
}
@media (min-width: 992px) {
  .container, .container-lg, .container-md, .container-sm {
    max-width: 960px;
  }
}
@media (min-width: 768px) {
  .container, .container-md, .container-sm {
    max-width: 720px;
  }
}
@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px;
  }
}
@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}
@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}
@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}
@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}
.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.quick-facts-list {
  margin-bottom: 0;
}
.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
dl, ol, ul {
  margin-top: 0;
  margin-bottom: 1rem;
}
.list-unstyled {
  list-style: none;
}
img {
  vertical-align: middle;
  border-style: none;
}
.quick-facts-list .quick-fact-item {
  display: inline-block;
  font-size: 16px;
  font-weight: 600;
  margin-left: 8px;
  vertical-align: middle;
}
.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
.py-5 {
  padding-bottom: 3rem !important;
}
@media (min-width: 1200px) {
  .container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1140px;
  }
}
@media (min-width: 992px) {
  .container, .container-lg, .container-md, .container-sm {
    max-width: 960px;
  }
}
@media (min-width: 768px) {
  .container, .container-md, .container-sm {
    max-width: 720px;
  }
}
@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px;
  }
}
@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}
@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}
@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}
@media (min-width: 576px) {
  .container {
    max-width: 1240px;
  }
}
@media (max-width: 767.98px) {
  .quick-facts-list li {
    text-align: center;
  }
}
.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
@media (min-width: 768px) {
  .col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
}
#Group_655 {
  margin-top: 74px;
  margin-left: 89px;    }
@media screen and (max-width: 479px) {
    #Group_655 {
      margin-left: 58px;
    }
}
#pre{
  margin-left: 52px;

  font-size: large;

  color: white;

}
@media screen and (max-width: 479px) {
    #pre {
      margin-left: 0;
    }
}
.orange {
  margin-top: 75px;
  margin-left: 93px;
}
@media screen and (max-width: 479px) {
    .orange {
      margin-left: 45px;
    }
}
#pra{
  margin-left: 92px;
        margin-top: 4px;
        font-size: larger;
        color: white;
}
@media screen and (max-width: 479px) {
    #pra {
      margin-left: 41px;
    }
}
@media screen and (max-width: 479px) {
  #www{
    margin-right: 6px;
 }
} 
.list-checked li::before {
  content: '\2713';
  color: #fa8c00;
  font-family: 'Material Icons';
  font-size: 18px;
  position: absolute;
  top: -3px;
  left: 0;
}
.list-checked li {
  position: relative;
  padding-left: 22px;
  margin-bottom: 5px;
}
.table-schedule:last-of-type {
  margin-bottom: 60px;
}
.mt-5, .my-5 {
  margin-top: 3rem !important;
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
}
table {
  border-collapse: collapse;
}.table-schedule thead tr th:first-child {
  border-radius: 6px 0 0 12px;
}
.table-schedule thead tr th {
  background-color: #09f;
  border-bottom: 0;
  color: #fff;
  font-size: 14px;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}
.table-schedule td, .table-schedule th {
  border: 0;
    border-bottom-width: 0px;
    border-bottom-style: none;
    border-bottom-color: currentcolor;
  font-weight: 500;
  text-align: center;
  vertical-align: middle;
}
.table td, .table th {
  padding: .75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
th {
  text-align: inherit;
}.table-schedule tbody tr td:first-child {
  border-radius: 12px 0 0 12px;
}
.table-schedule tbody tr td {
  background-color: #f5f8fc;
  border-bottom: 10px solid #fff;
  border-top: 10px solid #fff;
  color: #545656;
  font-size: 16px;
  padding: 15px 10px;
}
.table-schedule td, .table-schedule th {
  border: 0;
    border-top-width: 0px;
    border-top-style: none;
    border-top-color: currentcolor;
    border-bottom-width: 0px;
    border-bottom-style: none;
    border-bottom-color: currentcolor;
  font-weight: 500;
  text-align: center;
  vertical-align: middle;
}
.table td, .table th {
  padding: .75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;

}.table-schedule td .right-arrow, .table-schedule th .right-arrow {
  font-size: 12px;
  margin: 0 2px;
  vertical-align: middle;
}
.material-icons {
  vertical-align: middle;
}
.material-icons {
  vertical-align: middle;
}
.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -moz-font-feature-settings: 'liga';
  -moz-osx-font-smoothing: grayscale;
}
.btn {
  padding: 12px 16px;
  cursor: pointer;
  border-radius: 4px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 3px;
  border: 1px black solid;
  background-color: black;
  color: white;
}@media only screen and (max-width: 800px) {
  .jrt-instance-1 > tbody > tr > td.jrt-cell-2::before {
    content: "Route";
  }
}
@media only screen and (max-width: 800px) {
  .jrt td::before {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    max-width: 45%;
    padding-right: 6px;
    font-weight: bold;
  }
}@media (max-width: 991.98px) {
  .table-schedule tbody tr td {
    border-bottom-width: 5px;
    border-top-width: 5px;
  }
}
@media (max-width: 767.98px) {
  .table-schedule tbody tr td {
    font-size: 14px;
    text-align: left;
  }
}
.table-schedule tbody tr td {
  background-color: #f5f8fc;
  border-bottom: 10px solid #fff;
    border-bottom-width: 10px;
  border-top: 10px solid #fff;
    border-top-width: 10px;
  color: #545656;
  font-size: 16px;
  padding: 15px 10px;
}
.table-schedule td, .table-schedule th {
  border: 0;
    border-top-width: 0px;
    border-top-style: none;
    border-top-color: currentcolor;
    border-right-width: 0px;
    border-right-style: none;
    border-right-color: currentcolor;
    border-bottom-width: 0px;
    border-bottom-style: none;
    border-bottom-color: currentcolor;
  font-weight: 500;
  text-align: center;
  vertical-align: middle;
}
@media only screen and (max-width: 800px) {
  .jrt td {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border: none;
    border-bottom: 1px solid #eee;
    font-weight: normal;
    border-right: 0 !important;
  }
}
@media only screen and (max-width: 800px) {
  .jrt table, .jrt thead, .jrt tbody, .jrt th, .jrt td, .jrt tr {
    display: block;
    text-align: left;
  }
}
.table td, .table th {
  padding: .75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
*, ::after, ::before {
  box-sizing: border-box;
}
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}@media only screen and (max-width: 800px) {
  .jrt-instance-1 > tbody > tr > td.jrt-cell-1::before {
    content: "Dates";
  }
}
@media only screen and (max-width: 800px) {
  .jrt td::before {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    max-width: 45%;
    padding-right: 6px;
    font-weight: bold;
  }
}
element {
}
@media (max-width: 991.98px) {
  .table-schedule tbody tr td:last-child, .table-schedule tbody tr td:first-child {
    border-radius: 0;
  }
}
.table-schedule tbody tr td:first-child {
  border-radius: 12px 0 0 12px;
}
@media (max-width: 991.98px) {
  .table-schedule tbody tr td {
    border-bottom-width: 5px;
    border-top-width: 5px;
  }
}
@media (max-width: 767.98px) {
  .table-schedule tbody tr td {
    font-size: 14px;
    text-align: left;
  }
}
.table-schedule tbody tr td {
  background-color: #f5f8fc;
  border-bottom: 10px solid #fff;
    border-bottom-width: 10px;
  border-top: 10px solid #fff;
    border-top-width: 10px;
  color: #545656;
  font-size: 16px;
  padding: 15px 10px;
}
.table-schedule td, .table-schedule th {
  border: 0;
    border-top-width: 0px;
    border-top-style: none;
    border-top-color: currentcolor;
    border-right-width: 0px;
    border-right-style: none;
    border-right-color: currentcolor;
    border-bottom-width: 0px;
    border-bottom-style: none;
    border-bottom-color: currentcolor;
  font-weight: 500;
  text-align: center;
  vertical-align: middle;
}
@media only screen and (max-width: 800px) {
  .jrt td {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border: none;
    border-bottom: 1px solid #eee;
    font-weight: normal;
    border-right: 0 !important;
  }
}
@media only screen and (max-width: 800px) {
  .jrt-instance-1 > tbody > tr > td.jrt-cell-3::before {
    content: "Start / End";
  }
}@media only screen and (max-width: 800px) {
  .jrt-instance-1 > tbody > tr > td.jrt-cell-4::before {
    content: "Available";
  }
}@media only screen and (max-width: 800px) {
  .jrt-instance-1 > tbody > tr > td.jrt-cell-5::before {
    content: " Price";
  }
}@media only screen and (max-width: 800px) {
  .jrt-instance-1 > tbody > tr > td.jrt-cell-6::before {
    content: " Option";
  }
}@media only screen and (max-width: 800px) {
  .jrt-instance-1 > tbody > tr > td.jrt-cell-7::before {
    content: "Notes";
  }
}
@media only screen and (max-width: 800px) {
  .jrt-instance-1 > tbody > tr > td.jrt-cell-8::before {
    content: "";

  }
}@media (max-width: 991.98px) {
  .table-schedule tbody tr td:first-child div {
    margin-left: 10px;
  }
}
.table-schedule tbody tr td div.Open, .table-schedule tbody tr td div.Confirmed {
  color: #00c800;
}@media only screen and (max-width: 800px) {
  .jrt thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
}
@media only screen and (max-width: 800px) {
  .jrt tr {
    border: 0;
  }
}
.owl-carousel .owl-stage-outer {
  position: relative;
  overflow: hidden;
  -webkit-transform: translate3d(0,0,0);
}.carousel-standard .owl-item::after {
  content: '';
  width: 100%;
  height: 400px;
  background-image: linear-gradient(to top,rgba(0,0,0,.8),rgba(31,26,85,0));
  position: absolute;
  bottom: 0;
}
element {
  width: 1536px;
}
.owl-carousel .owl-stage, .owl-carousel.owl-drag .owl-item {
  -ms-touch-action: auto;
  touch-action: auto;
}
.owl-carousel.owl-drag .owl-item {
  -ms-touch-action: pan-y;
  touch-action: pan-y;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.owl-carousel .owl-item {
  min-height: 1px;
  float: left;
  -webkit-backface-visibility: hidden;
  -webkit-touch-callout: none;
}
.owl-carousel .owl-item, .owl-carousel .owl-wrapper {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -webkit-transform: translate3d(0,0,0);
  -moz-transform: translate3d(0,0,0);
  -ms-transform: translate3d(0,0,0);
}
.owl-carousel, .owl-carousel .owl-item {
  -webkit-tap-highlight-color: transparent;
  position: relative;
}.owl-carousel .owl-stage::after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
element {
  transform: translate3d(0px, 0px, 0px);
  transition: all;
  width: 1536px;
}
.owl-carousel .owl-stage, .owl-carousel.owl-drag .owl-item {
  -ms-touch-action: auto;
  touch-action: auto;
}
.owl-carousel .owl-stage {
  position: relative;
  -ms-touch-action: pan-Y;
  touch-action: manipulation;
  -moz-backface-visibility: hidden;
}
.background-image {
      background-image: url("images/1.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      width: 100vw;
      height: 100vh;
    }
    </style>
  </body>
</html>