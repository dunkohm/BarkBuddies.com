<?php
if(isset($_GET['edit-breed'])){
    $edit_id=$_GET['edit-breed'];
    $get_data="Select * from `breeds` where breed_id=$edit_id";
    $result=mysqli_query($con,$get_data);
    $row=mysqli_fetch_assoc($result);
    $breed_title=$row['breed_tittle'];
   
   
    
}

?>
<!-- breeds input form -->
<div class="row mt-5  d-flex justify-content-center align-items-center">
     <h2 class="text-center text-warning mt-2" style="font-family: Roboto sans-serif;">Update Breed</h2>
        <div class="container-fluid mx-5">
       <form action="" method="post" class="mb-3 ">
         <div class="input-group w-50 mb-3 m-auto shadow">
           <span class="input-group-text bg-warning" id="basic-addon1">Breeds</span>
           <input type="text" class="form-control" value="<?php echo $breed_title;?>"name="breed-title" aria-label="Breeds">
         </div>
         <div class="input-group d-grid w-50 m-auto mb-3 px-5">
           <input type="submit" value="Update Breed" class="btn btn-outline-warning text-dark" name="update-breed">
          </div>
        </form>
  
    </div>



    <?php 
    
    if(isset($_POST['update-breed'])){
        $breed_title=$_POST['breed-title'];
      // query to update breed
    $update_breed="update `breeds` set breed_tittle='$breed_title' where breed_id=$edit_id";
    $result_update=mysqli_query($con,$update_breed);
    if($result_update){
        echo "<script>alert('Breed updated successfully!')</script>";
        echo "<script>window.open('dashboard.php?view-breed','_self')</script>";
    }

            
    }
    
    ?>