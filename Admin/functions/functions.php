<?php
// include('Admin/includes/connect.php');
function is_logged_in() {
    // Check if the user has a session.
    if (!isset($_SESSION['admin_name'])) {
        return false;
    }

    // Check if the user has a session cookie.
    if (!isset($_COOKIE['session_id'])) {
        return false;
    }

    // If the user has both a session and a session cookie, they are logged in.
    return true;
}
// function to fetch puppies from the database
function getPuppies(){
    global $con;
    // condition to check if isset or not
    if(!isset($_GET['breed'])){
        $select_query="select * from `puppies` order by rand() limit 0,4";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
          $puppy_id =$row['puppy_id'];
          $puppy_title =$row['puppy_title'];
          $puppy_age =$row['puppy_age'];
          $puppy_gender =$row['puppy_gender'];
          $puppy_desc =$row['puppy_desc'];
          $puppy_location =$row['puppy_location'];
          $P_image_one =$row['P_image_one'];
          $puppy_price =$row['puppy_price'];
          $breed_title =$row['breed_title'];
    //   display products
       echo "<div class='card shadow border border-0 mb-3' style='width: 18rem;'>
       <img src='Admin/puppy-images/$P_image_one' class='card-img-top' alt='$puppy_title'>
       <div class='card-body'>
         <h5 class='card-title text-center'>$puppy_title</h5>
         <p class='text-center'>$breed_title</p>
         <ul class='list-group list-group-flush'>
             <li class='list-group-item'><i class='bi bi-calendar-date text-primary fs-4'></i>   $puppy_age</li>
             <li class='list-group-item'><i class='bi bi-gender-male text-primary fs-4'></i>  $puppy_gender</li>
             <li class='list-group-item'><i class='bi bi-geo-alt-fill text-primary fs-4'></i>  $puppy_location</li>
             <li class='list-group-item text-center'><span class='text-danger'>KES</span>  $puppy_price</li>
         </ul>
        <div class='text-center'>
        <a href='' class='btn btn-outline-success'><i class='bi bi-whatsapp'></i> Enquire</a>
        <a href='puppy_details.php?puppy_id=$puppy_id' class='btn btn-outline-warning'>View more</a>
        </div>
       </div>
    
   </div>";
       
     }
    }
}
// Function to display all display all the products
function get_all_puppies(){
    global $con;
      // condition to check if isset or not
      if(!isset($_GET['breed_title'])){
           
       // query
       $select_query="select * from `puppies` order by rand()";
       $result_query=mysqli_query($con,$select_query);
      //  while loop
       while($row=mysqli_fetch_assoc($result_query)){
          $puppy_id=$row['puppy_id'];
          $puppy_title=$row['puppy_title'];
          $puppy_age=$row['puppy_age'];
          $puppy_gender=$row['puppy_gender'];
          $puppy_desc=$row['puppy_desc'];
          $puppy_location=$row['puppy_location'];
          $P_image_one=$row['P_image_one'];
          $puppy_price=$row['puppy_price'];
          $breed_title=$row['breed_title'];
      //   display puppies
         echo "<div class='card shadow border border-0 mb-3' style='width: 18rem;'>
           <img src='Admin/puppy-images/$P_image_one' class='card-img-top' alt='$puppy_title'>
           <div class='card-body'>
             <h5 class='card-title text-center'>$puppy_title</h5>
             <p class='text-center'>$breed_title</p>
             <ul class='list-group list-group-flush'>
                 <li class='list-group-item'><i class='bi bi-calendar-date text-primary fs-4'></i>   $puppy_age</li>
                 <li class='list-group-item'><i class='bi bi-gender-male text-primary fs-4'></i>  $puppy_gender</li>
                 <li class='list-group-item'><i class='bi bi-geo-alt-fill text-primary fs-4'></i>  $puppy_location</li>
                 <li class='list-group-item text-center'><span class='text-danger'>KES</span>  $puppy_price</li>
             </ul>
            <div class='text-center'>
            <a href='' class='btn btn-outline-success'><i class='bi bi-whatsapp'></i> Enquire</a>
            <a href='puppy_details.php?puppy_id=$puppy_id' class='btn btn-outline-warning'>View more</a>
            </div>
           </div>
        
       </div>";
         
       }
      }
  }

  // Function to view Related products on the view product details page
function view_puppy_details(){
    global $con;
      if(isset($_GET['puppy_id'])){
      // condition to check if isset or not
    //   if(!isset($_GET['puppy_id'])){
          $puppy_id=$_GET['puppy_id']; 
       // query
       $select_query="select * from `puppies` where puppy_id=$puppy_id";
       $result_query=mysqli_query($con,$select_query);
      //  while loop
       while($row=mysqli_fetch_assoc($result_query)){
        $puppy_id=$row['puppy_id'];
        $puppy_title=$row['puppy_title'];
        $puppy_age=$row['puppy_age'];
        $puppy_gender=$row['puppy_gender'];
        $puppy_desc=$row['puppy_desc'];
        $puppy_location=$row['puppy_location'];
        $P_image_one=$row['P_image_one'];
        $P_image_two=$row['P_image_two'];
        $P_image_three=$row['P_image_three'];
        $puppy_price=$row['puppy_price'];
        $breed_title=$row['breed_title'];

        echo "<div class='col-md-4'>
        <div class='img' style='width: 350px;'>
          <img src='Admin/puppy-images/$P_image_one' class='img-fluid'>
         </div>
         </div>
      <!-- puppy details -->
      <div class='col-md-8'>
        <div class='row p-0 m-0'>
          <div class='col p-0 mx-3'>
            <div class='row d-flex mt-3 px-2 text-center justify-content-center'>
            <h5 class='heading2 text-center'>$breed_title</h5>
              <h5 class='heading2'>Other Images</h5>
                 <!-- Image 2 -->
                 <div class='img mb-2' style='width: 200px;'>
                  <img src='Admin/puppy-images/$P_image_two' class='img-fluid' >
                 </div>
                 <!-- Image 3 -->
                 <div class='img' style='width: 200px;'>
                  <img src='Admin/puppy-images/$P_image_three' class='img-fluid'>
                 </div>
                
                
            </div>
          </div>
          <div class='col'>
            <div class='pricebox bg-warning mt-4' style='height: 200px; width: 350px;'>
               <div class='row '>
                <div class='text mt-5'>
                  <p class='text-center text-light' style=' font-family: Open Sans, sans-serif; font-size: 22px; font-weight: bold;'>Available for: </p>
                  <p class='text-center' style=' font-family: Open Sans, sans-serif; font-size: 14px;'>Pickup & Local delivery</p>
                  <p class='text-center text-dark' style=' font-family: Open Sans, sans-serif; font-size: 22px; font-weight: bold;'>KES $puppy_price /-</p>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    <div class='container-fluid'>
      <!-- Puppy detail section -->
      <div class='row d-flex mx-auto justify-content-center px-5'>
        <!-- puppy Bio data -->
        <div class='col-md-4 mb-2'>
          <h5 class='heading2 text-center'> $puppy_title</h5>
          <ul class='list-group list-group-flush'>
          <li class='list-group-item'><i class='bi bi-calendar-date text-primary fs-4'></i>   $puppy_age</li>
          <li class='list-group-item'><i class='bi bi-gender-male text-primary fs-4'></i>  $puppy_gender</li>
          <li class='list-group-item'><i class='bi bi-geo-alt-fill text-primary fs-4'></i>  $puppy_location</li>
          
      </ul>
        <div class='d-grid'>
         <button class='btn btn-outline-success'><i class='bi bi-whatsapp'></i> Contact Us</button>
        </div>
        </div>
        <!-- All about me -->
        <div class='col-md-4 mb-2'>
          <div class='aboutme'>
            <h5 class='heading2 text-center'>All about me</h5>
            <p class='text-dark text-center' > $puppy_desc</p>
          </div>
        </div>
        <!-- Why I stand Out -->
        <div class='col-md-4 mb-2'>
          <h5 class='heading2 text-center'>Why I Stand Out</h5>
          <ul class='list-group list-group-flush bg-light'>
            <li class='list-group-item' ><i class='bi bi-check-circle-fill text-success'></i>  Health Guarantee</li>
            <li class='list-group-item' ><i class='bi bi-check-circle-fill text-success'></i>  Vaccinated</li>
            <li class='list-group-item' ><i class='bi bi-check-circle-fill text-success'></i>  Health Certificate</li>
            <li class='list-group-item' ><i class='bi bi-check-circle-fill text-success'></i> Vet Exam</li>
          </ul>
        </div>
      </div>
    </div>";
       }
    }
 }
 // This is the function to fetch brands from the db.
function getBreeds(){
    global $con;
    // mysqli_query
    $select_breeds= "select * from `breeds`";
    $result_breeds=mysqli_query($con,$select_breeds);
    // $row_data=mysqli_fetch_assoc($result_brands);
    while($row_data=mysqli_fetch_assoc($result_breeds)){
      $breed_title=$row_data['breed_tittle'];
      $breed_id=$row_data['breed_id'];
      echo " <ul class='text-center bg-transparent list-group list-group-flush'>
      <li class='list-group-item'>
      <a href='puppy-listing.php?breed=$breed_id' class='nav-link text-dark' style='font-style: italic;font-size: 17px;'>$breed_title</a>
    </li></ul>";
    }
}

// search breed
function searchBreed(){
  global $con;
  // condition to check if isset or not
  if(isset($_GET['search_data_breed'])){
    $search_value=$_GET['search_data'];
      $search_query="select * from `puppies` where breed_title like '%$search_value%'";
      $result_query=mysqli_query($con,$search_query);
      //  checks number of products in db with the search value and if none displays message
    $number_of_rows=mysqli_num_rows($result_query);
    if($number_of_rows==0){
       echo "<h1 class='text-danger text-center p-5  my-5'>Sorry! No Results match for this breed.</h1>";
        }
      while($row=mysqli_fetch_assoc($result_query)){
        $puppy_id =$row['puppy_id'];
        $puppy_title =$row['puppy_title'];
        $puppy_age =$row['puppy_age'];
        $puppy_gender =$row['puppy_gender'];
        $puppy_desc =$row['puppy_desc'];
        $puppy_location =$row['puppy_location'];
        $P_image_one =$row['P_image_one'];
        $puppy_price =$row['puppy_price'];
        $breed_title =$row['breed_title'];
  //   display products
     echo "<div class='card shadow border border-0 mb-3 mx-3' style='width: 18rem;'>
     <img src='Admin/puppy-images/$P_image_one' class='card-img-top' alt='$puppy_title'>
     <div class='card-body'>
       <h5 class='card-title text-center'>$puppy_title</h5>
       <p class='text-center'>$breed_title</p>
       <ul class='list-group list-group-flush'>
           <li class='list-group-item'><i class='bi bi-calendar-date text-primary fs-4'></i>   $puppy_age</li>
           <li class='list-group-item'><i class='bi bi-gender-male text-primary fs-4'></i>  $puppy_gender</li>
           <li class='list-group-item'><i class='bi bi-geo-alt-fill text-primary fs-4'></i>  $puppy_location</li>
           <li class='list-group-item text-center'><span class='text-danger'>KES</span>  $puppy_price</li>
       </ul>
      <div class='text-center'>
      <a href='' class='btn btn-outline-success'><i class='bi bi-whatsapp'></i> Enquire</a>
      <a href='puppy_details.php?puppy_id=$puppy_id' class='btn btn-outline-warning'>View more</a>
      </div>
     </div>
  
 </div>";
     
   }
  }
}

 ?>   
     
