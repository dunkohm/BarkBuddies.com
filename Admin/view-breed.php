<?php 
include("includes/connect.php");

?>

<!doctype html>
<html lang="en">


<body class="bg-light">
    <!-- adminpage header -->
 <div class="container-fluid text-center ">
    <h2 class="text-warning mb-4">All Breeds listed</h2>
  <table class="table table-bordered border-warning mt-5 table-hover table-responsive ">
    <thead class="table-warning">
        <tr>
            <th>#</th>
            <th>Breed Name</th>
            <th colspan="2">Action</th>
            
        </tr>
    </thead>
    <tbody class="">
    <?php
      $getBreeds="select * from `breeds`";
      $resultGet=mysqli_query($con,$getBreeds);
      $number=0;
      while($row=mysqli_fetch_assoc($resultGet)){
        $id=$row['breed_id'];
        $name=$row['breed_tittle'];
        $number++;
      ?>
        <tr class='text-center'>
        <td><?php echo $number;?></td>
        <td><?php echo $name;?></td>
        <td><a href="dashboard.php?edit-breed=<?php echo $id?>;"><i class='bi bi-pencil-square text-warning'></i></a></td>
        <td><a href="dashboard.php?delete-breed=<?php echo $id?>;"type="button" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bi bi-trash-fill text-danger'></i></a></td></tr>
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
        <h4>Are you sure you want to delete this breed?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal"><a href="dashboard.php?view-breed"class="text-decoration-none text-dark">No</button>
        <button type="button" class="btn btn-outline-danger"><a href='dashboard.php?delete-breed=<?php echo $id?>;'class="text-decoration-none text-dark">Yes</a></button>
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