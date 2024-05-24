<?php 

if(isset($_GET['delete-puppy'])){
    $delete_id=$_GET['delete-puppy'];

    // delete query
    $delete_query="Delete from `puppies` where puppy_id=$delete_id";
    $result_delete=mysqli_query($con,$delete_query);
    if($result_delete){
        echo "<script>alert('Puppy deleted successfully!')</script>";
        echo "<script>window.open('dashboard.php?view-puppy','_self')</script>";
    }
}

?>