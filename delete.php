<?php
@include 'config.php';
if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `contact` WHERE  contact_id=$id";
    $result=mysqli_query($conn,$sql);
    if ($result) {
    header("location:user_contact.php");
    } else {
        die(mysqli_error($conn));
    }
}
?>
