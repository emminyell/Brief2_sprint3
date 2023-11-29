<?php
session_start();
@include 'config.php';


if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $pasword = md5($_POST['password']);

   $sql="SELECT * from user_compte where email = '$email' and  mot_passe = '$pasword' ";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)> 0){
      $row=mysqli_fetch_assoc($result);
      $_SESSION['id']=$row['user_id'];
      $_SESSION['user_name']=$row['user_name'];
      $_SESSION['date_updated']=$row['date_updated'];
      header('location:profile.php');
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter your email">
      <span id="emaileror"></span>
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>
<script link="script.js"></script>
</body>
</html>

<?php 



?>