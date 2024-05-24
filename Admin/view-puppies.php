<?php 
include("includes/connect.php");

?>

<!doctype html>
<html lang="en">


<body class="bg-light">
    <!-- adminpage header -->
 <div class="container-fluid text-center ">
    <h2 class="text-warning mb-4">All Puppies listed</h2>
  <table class="table table-bordered border-warning mt-5 table-hover table-responsive ">
    <thead class="table-warning">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Location</th>
            <th>Owner Name</th>
            <th>Contact</th>
            <th>Breed</th>
            <th>Image</th>
            <th>Price</th>
            <th colspan="2">Action</th>
            
        </tr>
    </thead>
    <tbody class="">
    <?php
      $getPuppies="select * from `puppies`";
      $resultGet=mysqli_query($con,$getPuppies);
      $number=0;
      while($row=mysqli_fetch_assoc($resultGet)){
        $id=$row['puppy_id'];
        $name=$row['puppy_title'];
        $age=$row['puppy_age'];
        $Gender=$row['puppy_gender'];
        $location=$row['puppy_location'];
        $owner=$row['Owner_name'];
        $contact=$row['Owner_contact'];
        $breed=$row['breed_title'];
        $image=$row['P_image_one'];
        $price=$row['puppy_price'];
        $number++;
      ?>
        <tr class='text-center'>
        <td><?php echo $number;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $age;?></td>
        <td><?php echo $Gender;?></td>
        <td><?php echo $location;?></td>
        <td><?php echo $owner;?></td>
        <td><?php echo $contact;?></td>
        <td><?php echo $breed;?></td>
        <td><img src='puppy-images/<?php echo $image;?>' style='width:60px;height:60px;'/></td>
        <td><?php echo $price;?></td>
        <td><a href="dashboard.php?edit-puppy=<?php echo $id?>;"><i class='bi bi-pencil-square text-warning'></i></a></td>
        <td><a href="dashboard.php?delete-puppy=<?php echo $id?>;"type="button" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bi bi-trash-fill text-danger'></i></a></td></tr>
        <?php
      }
    ?>

        
    </tbody>

  </table>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h4>Are you sure you want to delete this puppy?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal"><a href="dashboard.php?view-puppy"class="text-decoration-none text-dark">No</button>
        <button type="button" class="btn btn-outline-danger"><a href='dashboard.php?delete-puppy=<?php echo $id?>;'class="text-decoration-none text-dark">Yes</a></button>
      </div>
    </div>
  </div>
</div>
 </div>

    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>