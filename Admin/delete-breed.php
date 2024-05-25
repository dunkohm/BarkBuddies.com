<?php 

if(isset($_GET['delete-breed'])){
    $delete_id=$_GET['delete-breed'];

    // delete query
    $delete_query="Delete from `breeds` where breed_id=$delete_id";
    $result_delete=mysqli_query($con,$delete_query);
    if($result_delete){
        echo "<script>alert('Breed deleted successfully!')</script>";
        echo "<script>window.open('dashboard.php?view-breed','_self')</script>";
    }
}

?>