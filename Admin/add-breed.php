<?php  -
include("includes/connect.php");
// include('functions/functions.php');
if (!is_logged_in()) {
    // The user is not logged in, so redirect them to the login page.
    header('Location: index.php');
    exit;
  }
if(isset($_POST['insert-breed'])){
    $br_title = $_POST['breed-title'];
    // code to avoid repetition of breeds
    $select_query ="select * from `breeds` where breed_tittle= '$br_title'";
    $result_query =mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_query);
    if($number >0){
        echo"<script>alert('This Breed is already present in the database')</script>";
    }else{
    // code to insert breed input to the database
    $insert_query ="insert into `breeds` (breed_tittle) values ('$br_title')";//mysql insert query
    $result= mysqli_query($con,$insert_query);//execution
    if($result){
        echo "<script>alert('Breed has been added successfully')</script>";
    }
}}
?>
<!-- breeds input form -->
    <div class="row mt-5  d-flex justify-content-center align-items-center">
     <h2 class="text-center text-warning mt-2" style="font-family: Roboto sans-serif;">Insert new Breed</h2>
        <div class="container-fluid mx-5">
       <form action="" method="post" class="mb-3 ">
         <div class="input-group w-50 mb-3 m-auto shadow">
           <span class="input-group-text bg-warning" id="basic-addon1">Breeds</span>
           <input type="text" class="form-control" placeholder=" insert Breed"name="breed-title" aria-label="Breeds">
         </div>
         <div class="input-group d-grid w-50 m-auto mb-3 px-5">
           <input type="submit" value="Add Breed" class="btn btn-outline-warning text-dark" name="insert-breed">
          </div>
        </form>
  
    </div>
   


