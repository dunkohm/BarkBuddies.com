<?php 
include("Admin/includes/connect.php");
include("Admin/functions/functions.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WoofWonderKenya | puppy listing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Rubik+Scribble&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">
  <div class="container-fluid">
    <div class="preloader-container">
      <div class="preloader">
        <svg width="156" height="149" viewBox="0 0 312 298" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="XMLID_2_">
            <path id="main"
              d="M200.5 294.5C191.1 294.2 182.6 293.1 174.3 290.9C165.1 288.5 155.7 288.2 146.3 289C134.8 289.9 123.8 293 112.8 295.8C101.1 298.7 89.6 298.6 78.5 293.7C61.6 286.3 50.7 273.6 48.5 255.2C46.1 234.6 52.9 216.9 68.9 203.4C76.1 197.3 83.1 191.1 89.3 183.9C96.8 175.3 103.1 165.9 108.8 156C116.6 142.2 127.8 132.5 143.3 128.3C160.8 123.6 178.4 130.2 188.6 145.4C197.1 158 206.8 169.5 217.2 180.5C225.3 189 233.5 197.3 241.6 205.8C248.7 213.2 254.7 221.4 257.2 231.4C261.2 247.5 259.5 262.9 250 276.8C244.7 284.6 236.9 288.9 227.9 291.3C219.9 293.4 208.3 294.6 200.5 294.5Z"
              fill="black" />
            <path id="left"
              d="M0.600006 133C0.800006 118.5 4.2 104.8 12.2 92.6C14.5 89.1 17.3 85.9 20.8 83.6C28 78.9 35.9 79.3 43 84.3C50.8 89.7 56.5 97 61.7 104.7C68.2 114.2 73.2 124.5 76.3 135.7C79.6 147.4 79.3 159 74.2 170.2C66.8 186.7 48.7 193.3 32.5 185.4C22 180.3 13.4 172.9 7.7 162.6C3.8 155.6 1.70001 148 1.00001 140.1C0.800008 137.6 0.700006 135.3 0.600006 133Z"
              fill="black" />
            <path id="right"
              d="M311.4 133.3C310.8 138 310.5 142.7 309.6 147.2C306.9 160.9 299.6 171.7 288.4 179.8C283.3 183.5 277.8 186.6 271.5 188C262.6 189.9 254.5 188.1 247.2 182.6C240.7 177.6 236.8 170.8 234.8 162.9C232.1 152 233.1 141.4 236.8 130.9C242.1 115.8 250.2 102.4 261.1 90.8C264.8 86.8 269 83.4 274.3 81.5C280.8 79.1 286.7 80.4 292.1 84.6C298.8 89.8 302.6 97.1 305.8 104.8C309.5 113.8 311 123.6 311.4 133.3Z"
              fill="black" />
            <path id="left-middle"
              d="M132.4 115.5C133.6 114.3 134.8 113 136.1 111.4C136.2 111.2 136.4 111.1 136.5 110.9C136.6 110.8 136.7 110.7 136.8 110.5C136.9 110.4 137 110.3 137.1 110.2C137.1 110.1 137.2 110.1 137.2 110C145.9 98.2 149 84.7 148.2 70.3C147.5 58 144.6 46.1 141.5 34.2C139.3 26 136.4 18.1 131.7 11C128.6 6.19999 124.8 2.1 118.9 0.899996C110.3 -0.900004 102.5 1.59999 96 7.19999C83 18.2 74.1 32.2 68.4 48.2C64.1 60.2 63.1 72.5 66.6 84.8C70.4 98.3 77.2 109.9 88.9 118.3C98.6 125.2 110.6 126.8 121.2 122.7C122.2 122.3 123.1 121.9 124.1 121.4C125.9 120.5 127.6 119.6 129.3 118.4C130.4 117.3 131.7 116.3 132.4 115.5Z"
              fill="black" />
            <path id="right-middle"
              d="M245.8 56.9C242 40.6 234.4 26.1 223.1 13.6C218.2 8.19999 212.5 4.09999 205.5 1.89999C194.3 -1.70001 186.4 1.19999 180.1 11C176.1 17.2 173.2 23.9 171.3 31C169 39.7 167.2 48.6 165.3 57.4C162.5 70.3 162.7 83 167 95.6C170.5 105.9 176.3 114.7 185.9 120.2C198.5 127.4 210.9 126.1 222.7 118.2C222.8 118.1 223 118.1 223.1 118C223.9 117.5 224.9 116.9 225.8 116.1C226.5 115.4 226.9 115.1 227.2 114.8C232 110.6 235.9 105.7 238.9 100.1C246.4 86.6 249.4 72.2 245.8 56.9Z"
              fill="black" />
          </g>
        </svg>
      </div>
    </div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light w-100">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">WoofWonderKenya.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="puppy-listing.php">Find a puppy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ's</a>
            </li>
          </ul>
          <span class="navbar-text g-2">
          <i class="bi bi-tiktok"> WoofWonder</i>
          <i class="bi bi-instagram"> WoofWonderKe</i>
          <i class="bi bi-telephone-fill"></i> (+254)114 063 049
          </span>
        </div>
      </div>
    </nav>
    <!-- Nav end -->
    <!-- yellow line -->
    <nav class="bg">

    </nav>
    <!-- Hero -->
    <div class="bigimage img-fluid">
      <div class="overlay">
        <h1>Connecting Hearts, One Paw Print at a Time</h1>
        <a href="puppy-listing.php"><input type="button" value="Find a Puppy" class="expbtn"></a>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row px-2 d-flex justify-content-around">
        <h4 class="text-center mt-3 heading2">Puppies for sale from across Kenya!</h4>

       <?php
       
       getPuppies();
       
       ?>

        <div class="text-center mt-3">
          <a href="puppy-listing.php"><input type="button" value="See More Puppies" class="expbtn"></a>
        </div>
      </div>
    </div>
    <!-- Why choose us -->
    <section class="abt bg-light" id="about">
      <div class="row d-flex mx-auto px-auto">
        <div class=" mt-3 mb-3">
          <h2 class="text-center" style="color:#4682B4;">Why we are different</h2>
        </div>
        <div class="row d-flex">
          <!-- image side -->
          <div class="col-md-6">
            <div>
              <img src="pups/img3.jpg" class="abt-img" alt="">
            </div>

          </div>
          <!-- content side -->
          <div class="col-md-6">
            <h3 class="abt-header text-center mt-5">Lorem ipsum dolor sit.</h3>
            <p class="abt-text text-center p-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eos facere alias incidunt sunt omnis minima corrupti! Officiis praesentium earum perferendis.</p>
          </div>
        </div>
        <!-- row 2 -->
        <div class="row d-flex">
          <!-- image side -->
          <div class="col-md-6">
            <div class="">
              <img src="pups/img4.jpg" class="abt-img2" alt="">
            </div>
          </div>
          <!-- content side -->
          <div class="col-md-6">
            <h3 class="abt-header text-center mt-5">Lorem ipsum dolor sit.</h3>
            <p class="abt-text2 text-center p-0 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eos facere alias incidunt sunt omnis minima corrupti! Officiis praesentium earum perferendis.</p>
          </div>

        </div>
        <!-- row 3 -->
        <div class="row d-flex mb-2">
          <!-- image side -->
          <div class="col-md-6">
            <div>
              <img src="pups/img5.jpg" class="abt-img3 text-center" alt="">
            </div>
          </div>
          <!-- content side -->
          <div class="col-md-6">
            <h3 class="abt-header text-center mt-5">Lorem ipsum dolor sit.</h3>
            <p class="abt-text3 text-center p-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eos facere alias incidunt sunt omnis minima corrupti! Officiis praesentium earum perferendis.</p>
          </div>
        </div>
    </section>
  </div>
  <!-- Footer -->
  <div class="footer bg-primary m-0 p-0 ">
    <div class="row">
      <div class="col-md-4">
        <ul class="navbar-nav me-auto text-center quick-links">
          <h4 class="quick-link-header">Quick links</h4>
          <li class="nav-item">
            <a href="listed.html" class="nav-link text-light"> Breeds available</a>
          </li>
          <li class="nav-item">
            <a href="blogs.html" class="nav-link text-light"> Blogs</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light"> WoofWonder care</a>
          </li>
          <li class="nav-item">
            <a href="aboutus.html" class="nav-link text-light"> About us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light"> Delivery Policies</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="navbar-nav me-auto text-center quick-links">
          <h4 class="quick-link-header">Talk to Us</h4>
          <li class="nav-item">
            <a href="#" class="nav-link text-light"> <i class="bi bi-whatsapp"></i> Whatsapp : +254 114063049</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light"><i class="bi bi-instagram"></i> Instagram : WoofWonderKe</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light"><i class="bi bi-telephone-inbound-fill"></i> Call/SMS : +254
              114063049</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light"><i class="bi bi-facebook"></i> Facebook : WoofWonderKe</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4 class="quick-link-header text-center">Location</h4>
        <div class="container-fluid">
          <!--map-->
          <div class="text-center">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.059131819083!2d37.00634660970169!3d-1.1177450988668258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f465a193ee57b%3A0x814a130f89ad8320!2sJuja%20City%20Mall!5e0!3m2!1sen!2ske!4v1692887348333!5m2!1sen!2ske"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="text-center copy">
        <p>&copy; 2023 WoofWonderKenya.com All rights reserved.</p>
      </div>
      <div class="scrollToTopButton">
        <button id="scrollToTopButton" title="Go to top">&#9650;</button>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>