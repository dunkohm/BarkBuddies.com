<?php
session_start();
 include('includes/connect.php');
 if(isset($_POST['login'])){
  $user_username=$_POST['username'];
  $user_password=$_POST['password'];

  // select query
   $select_query="Select * from `admin_table` where admin_name='$user_username'";
   $result=mysqli_query($con,$select_query);
   $row_count=mysqli_num_rows($result);
   $row_data=mysqli_fetch_assoc($result);
   if($row_count>0){
      if(password_verify($user_password,$row_data['admin_password'])){
        echo "<script>alert('Login Successful!')</script>";
        $_SESSION['admin_name'] = $user_username;
        setcookie('session_id', uniqid(), time() + 60 * 60 * 24, '/');
        header('Location: dashboard.php');
        exit;
        // echo "<script>window.open('dashboard.php','_self')</script>";
      }else{
        echo "<script>alert('Invalid Credentials!')</script>";
      }
   }else{
    echo "<script>alert('Invalid Credentials!')</script>";
   }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin | Login</title>
  </head>
  <body style=" background: url('images/imagebg.jpg'); z-index: -1; " class="">
    <div class="container d-flex justify-content-center align-items-center my-auto" style="height:100vh; width: 500px;">
        
        <!-- form -->
        <div class="container-fluid border border-5 border-warning rounded-3 shadow-lg bg-light">
        <h1 class="text-center text-warning mt-2">Bark Buddies Admin</h1>
        <h3 class="text-center text-dark">Login</h3>
        <form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Show Password</label>
  </div>
  <div class="text-center d-grid mb-2">
  <button type="submit" class="btn btn-outline-warning"name="login">Login</button>
  </div>
  <div class="text-center mb-3">
  <a href="#" class="mt-3 text-warning text-decoration-none">Forgot password?</a>
 
  </div>
</form>
        </div>
   
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php 




?>