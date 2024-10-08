<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="x-icon" href="Images/logo.png">
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
	<title>The Kennel - Puppy Listing</title>
	<style>
	
	</style>
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
              <a class="nav-link" href="blogs.php">Blogs</a>
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
	<!-- Search -->
	<div class="row text-center m-3 justify-content-center bg-light ">
		<div class="col-8 col-xl-3">
		  <div class="input-group">
			<input type="search" class="form-control" placeholder="Search">
			<button type="button" class="btn btn-outline-secondary">
				<i class="bi bi-search"></i>
			</button>
		  </div>
		</div>
		<div class="col-4 col-xl-3">
		  <select class="form-select" aria-label="Filter by">
			<option value="most-recent">Most recent</option>
			<option value="top-stories">Top stories</option>
			<option value="training">Training</option>
		  </select>
		</div>
	  </div>
	  
	<!-- featured section -->
	<section class="featured-breeds p-2 bg-light">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10">
					<div class="header">
						<h2 class="text-center">Recent stories</h2>
					</div>
					<!-- card 1 -->
                    <div class="card mb-3 shadow border border-0">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="pups/img3.jpg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title text-center">Choosing the Perfect Puppy: A Step-by-Step Guide</h5>
							  <p class="card-text text-center"><small class="text-muted">Grooming</small></p>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, nesciunt numquam 
                                quae necessitatibus at libero repellat rem ipsa. Corrupti repellat necessitatibus ipsam incidunt omnis 
                                blanditiis illo nesciunt dicta labore sequi vel doloribus reprehenderit repellendus vero iusto magni error 
                                eos unde cupiditate rem, voluptate pariatur cumque! Repellendus perferendis deleniti fugit doloremque.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago.</small></p>
                              <a href="#" style="text-decoration: none;" class="text-warning">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- card 2 -->
                      <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="Images/img2.jpg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">"Choosing the Perfect Puppy: A Step-by-Step Guide"</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, nesciunt numquam 
                                quae necessitatibus at libero repellat rem ipsa. Corrupti repellat necessitatibus ipsam incidunt omnis 
                                blanditiis illo nesciunt dicta labore sequi vel doloribus reprehenderit repellendus vero iusto magni error 
                                eos unde cupiditate rem, voluptate pariatur cumque! Repellendus perferendis deleniti fugit doloremque.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago.</small></p>
                              <a href="#">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                       <!-- card 3 -->
                       <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="Images/img2.jpg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">"Choosing the Perfect Puppy: A Step-by-Step Guide"</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, nesciunt numquam 
                                quae necessitatibus at libero repellat rem ipsa. Corrupti repellat necessitatibus ipsam incidunt omnis 
                                blanditiis illo nesciunt dicta labore sequi vel doloribus reprehenderit repellendus vero iusto magni error 
                                eos unde cupiditate rem, voluptate pariatur cumque! Repellendus perferendis deleniti fugit doloremque.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago.</small></p>
                              <a href="#">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                       <!-- card 4 -->
                       <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="Images/img2.jpg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">"Choosing the Perfect Puppy: A Step-by-Step Guide"</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, nesciunt numquam 
                                quae necessitatibus at libero repellat rem ipsa. Corrupti repellat necessitatibus ipsam incidunt omnis 
                                blanditiis illo nesciunt dicta labore sequi vel doloribus reprehenderit repellendus vero iusto magni error 
                                eos unde cupiditate rem, voluptate pariatur cumque! Repellendus perferendis deleniti fugit doloremque.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago.</small></p>
                              <a href="#">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                       <!-- card 5 -->
                       <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="Images/img2.jpg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">"Choosing the Perfect Puppy: A Step-by-Step Guide"</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, nesciunt numquam 
                                quae necessitatibus at libero repellat rem ipsa. Corrupti repellat necessitatibus ipsam incidunt omnis 
                                blanditiis illo nesciunt dicta labore sequi vel doloribus reprehenderit repellendus vero iusto magni error 
                                eos unde cupiditate rem, voluptate pariatur cumque! Repellendus perferendis deleniti fugit doloremque.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago.</small></p>
                              <a href="#">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                       <!-- card 6 -->
                       <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="Images/img2.jpg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">"Choosing the Perfect Puppy: A Step-by-Step Guide"</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, nesciunt numquam 
                                quae necessitatibus at libero repellat rem ipsa. Corrupti repellat necessitatibus ipsam incidunt omnis 
                                blanditiis illo nesciunt dicta labore sequi vel doloribus reprehenderit repellendus vero iusto magni error 
                                eos unde cupiditate rem, voluptate pariatur cumque! Repellendus perferendis deleniti fugit doloremque.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago.</small></p>
                              <a href="#">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
					  <div class="text-center mt-3 mb-3">
				<a href="listed.html" class="btn btn-outline-warning shadow">Explore More</a>
			</div>
                </div>
				<div class="col-md-2 bg-warning p-0">
					<!-- Popular breeds -->
					<ul class="navbar-nav me-auto text-center">
						<li class="nav-item side-nav-header">
							<a href="#" class="nav-link bg-light border border-2 text-dark">Popular Breeds</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Labrador Retriever</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> German Shepherd</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Rottweiler</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Bulldog</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Golden Retriever</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Boxer</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Dachshund</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Great Dane</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Poodle</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Siberian Husky</a>
						</li>

					</ul>
					<!-- Recent blogs -->
					<ul class="navbar-nav me-auto text-center mt-3">
						<li class="nav-item side-nav-header">
							<a href="#" class="nav-link bg-light border border-2 text-dark">Recent Blogs</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Blog 1</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Blog 1</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Blog 1</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Blog 1</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Blog 1</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Blog 1</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Blog 1</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light"> Blog 1</a>
						</li>

					</ul>

				</div>
			</div>
			

		</div>
	</section>
	<div class="footer bg-primary m-0 p-0">
		<div class="row">
			<div class="col-md-4">
				<ul class="navbar-nav me-auto text-center quick-links">
					<h4 class="quick-link-header" >Quick links</h4>
					<li class="nav-item">
						<a href="#" class="nav-link text-light"> Breeds available</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-light"> Blogs</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-light"> WoofWonder petcare</a>
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
					<h4 class="quick-link-header" >Talk to Us</h4>
					<li class="nav-item">
						<a href="#" class="nav-link text-light"> <i class="bi bi-whatsapp"></i> Whatsapp : +254 114063049</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-light"><i class="bi bi-instagram"></i> Instagram : theKennelke</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-light"><i class="bi bi-telephone-inbound-fill"></i> Call/SMS : +254 114063049</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-light"><i class="bi bi-facebook"></i> Facebook : TheKennelke</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4 class="quick-link-header text-center" >Location</h4>
				<div class="container-fluid">
					<!--map-->
			<div class= "">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.059131819083!2d37.00634660970169!3d-1.1177450988668258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f465a193ee57b%3A0x814a130f89ad8320!2sJuja%20City%20Mall!5e0!3m2!1sen!2ske!4v1692887348333!5m2!1sen!2ske"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="text-center copy">
				<p>&copy; 2023 theKennel.com All rights reserved.</p>
			</div>
			<div class="scrollToTopButton">
				<button id="scrollToTopButton" title="Go to top">&#9650;</button>
			</div>
		</div>
	</div>
	<script src="script.js"></script>
</body>

</html>