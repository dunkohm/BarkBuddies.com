<?php
if(isset($_GET['edit-puppy'])){
    $edit_id=$_GET['edit-puppy'];
    $get_data="Select * from `puppies` where puppy_id=$edit_id";
    $result=mysqli_query($con,$get_data);
    $row=mysqli_fetch_assoc($result);
    $puppy_title=$row['puppy_title'];
    $puppy_age=$row['puppy_age'];
    $puppy_gender=$row['puppy_gender'];
    $puppy_desc=$row['puppy_desc'];
    $puppy_location=$row['puppy_location'];
    $Owner_name=$row['Owner_name'];
    $Owner_contact=$row['Owner_contact'];
    $breed_title=$row['breed_title'];
    $P_image_one=$row['P_image_one'];
    $P_image_two=$row['P_image_two'];
    $P_image_three=$row['P_image_three'];
    $puppy_price=$row['puppy_price'];  
    
}

?>
<div class="container text-center ">
    <h2 class="text-warning mb-4">Edit puppy</h2>
    <!-- form -->
    <!-- you have to add the enctype attribute to insert files that are not in text format eg. Images,videos -->
    <form action="" method="post" enctype="multipart/form-data">
        <!-- puppy-title -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_title"class="form-label ">Name</label>
            <input type="text" name="puppy_title" id="puppy_title" value="<?php echo $puppy_title;?>" class="form-control"
             autocomplete="off" required="required">
        </div>
        <!-- Puppy age -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_age"class="form-label ">Age</label>
            <input type="text" name="puppy_age" id="puppy_age"value="<?php echo $puppy_age;?>" class="form-control"
              autocomplete="off" required="required">
        </div>
        <!-- puppy gender -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_gender"class="form-label ">Gender</label>
            <input type="text" name="puppy_gender" id="puppy_gender"value="<?php echo $puppy_gender;?>" class="form-control"
              autocomplete="off" required="required">
        </div>
      
        <!-- puppy description -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_description"class="form-label ">Description</label>
            <input type="text" name="puppy_description" id="puppy_description"value="<?php echo $puppy_desc;?>" class="form-control"
              autocomplete="off" required="required">
        </div>
         <!-- puppy Location -->
         <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_location"class="form-label ">Location</label>
            <input type="text" name="puppy_location" id="puppy_location"value="<?php echo $puppy_location;?>" class="form-control"
              autocomplete="off" required="required">
        </div>
         <!-- puppy Owner name -->
         <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_owner"class="form-label ">Owner name</label>
            <input type="text" name="puppy_owner" id="puppy_owner"value="<?php echo $Owner_name;?>" class="form-control"
             autocomplete="off" required="required">
        </div>
        <!-- puppy Owner contact -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_owner_contact"class="form-label ">Owner Contact</label>
            <input type="text" name="puppy_owner_contact" id="puppy_owner_contact" value="<?php echo $Owner_contact;?>" class="form-control"
              autocomplete="off" required="required">
        </div>
        <!-- Breeds -->
        <div class="form-outline mb-2 w-50 m-auto">
            <select name="puppy_breed" id="" class="form-select">
                <option value="" require="Required"><?php echo $breed_title;?></option>
                <?php 
                //queries
                $select_query="select * from `breeds`";
                $result_query=mysqli_query($con,$select_query);
                // while loop
                while($row=mysqli_fetch_assoc($result_query)){
                    $breed_title=$row['breed_tittle'];
                    $breed_id=$row['breed_id'];
                    echo "<option value='$breed_title'>$breed_title</option>";
                }
                
                ?>
            </select> 
        </div>
        <!-- image 1 -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_image1"class="form-label">Image 1</label>
            <div class="d-flex">
                <input type="file" name="puppy_image1" id="puppy_image1" class="form-control w-90 m-auto"
                 required="required">
                 <img src="puppy-images/<?php echo $P_image_one;?>" alt="" srcset="" class="px-2"style="width: 80px; height: 80px; border-radius:20px;">
            </div>
            
        </div>
        <!-- image 2 -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_image2"class="form-label ">Image 2</label>
            <div class="d-flex ">
                <input type="file" name="puppy_image2" id="puppy_image1" class="form-control w-90 m-auto "
                 required="required">
                 <img src="puppy-images/<?php echo $P_image_two;?>" alt="" srcset="" class="px-2"style="width: 80px; height: 80px;border-radius:20px;">
            </div>
        </div>
        <!-- image 3 -->
        <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_image3"class="form-label ">Image 3</label>
            <div class="d-flex">
                <input type="file" name="puppy_image3" id="puppy_image1" class="form-control w-90 m-auto"
                 required="required">
                 <img src="puppy-images/<?php echo $P_image_three;?>" alt="" class="px-2" srcset=""style="width: 80px; height: 80px;border-radius:20px;">
            </div>
        </div>
         <!-- puppy Price -->
         <div class="form-outline mb-2 w-50 m-auto">
            <label for="puppy_price"class="form-label ">Price</label>
            <input type="text" name="puppy_price" id="puppy_price" value="<?php echo $puppy_price;?>" class="form-control"
             autocomplete="off" required="required">
        </div>
         <!-- Insert puppy button -->
         <div class="form-outline mb-2 w-50 d-grid m-auto">
            <input type="submit" value="Update puppy" class="btn btn-outline-warning" name="edit_puppy">
        </div>
    </form>
 </div>

 <?php 
 if(isset($_POST['edit_puppy'])){
    $puppy_title=$_POST['puppy_title'];
    $puppy_age=$_POST['puppy_age'];
    $puppy_gender=$_POST['puppy_gender'];
    $puppy_description=$_POST['puppy_description'];
    $puppy_location=$_POST['puppy_location'];
    $puppy_owner=$_POST['puppy_owner'];
    $puppy_owner_contact=$_POST['puppy_owner_contact'];
    $puppy_breed=$_POST['puppy_breed'];
    $puppy_price=$_POST['puppy_price'];

    $puppy_image1=$_FILES['puppy_image1']['name'];
    $puppy_image2=$_FILES['puppy_image2']['name'];
    $puppy_image3=$_FILES['puppy_image3']['name'];

    $temp_image1=$_FILES['puppy_image1']['temp_name'];
    $temp_image2=$_FILES['puppy_image2']['temp_name'];
    $temp_image3=$_FILES['puppy_image3']['temp_name'];


    move_uploaded_file($temp_image1,"puppy-images/$puppy_image1");
    move_uploaded_file($temp_image2,"puppy-images/$puppy_image2");
    move_uploaded_file($temp_image3,"puppy-images/$puppy_image3");
    
    // query to update products
    $update_puppy="update `puppies` set puppy_title='$puppy_title',puppy_age='$puppy_age',
    puppy_gender='$puppy_gender',puppy_desc='$puppy_description',
    puppy_location='$puppy_location',Owner_name='$puppy_owner',
    Owner_contact='$puppy_owner_contact',breed_title='$puppy_breed',
    P_image_one='$puppy_image1',P_image_two='$puppy_image2',
    P_image_three='$puppy_image3',puppy_price='$puppy_price',date=NOW() where puppy_id=$edit_id";
    $result_update=mysqli_query($con,$update_puppy);
    if($result_update){
        echo "<script>alert('Puppy updated successfully!')</script>";
        echo "<script>window.open('dashboard.php?view-puppy','_self')</script>";
    }
 }
 
 
 ?>