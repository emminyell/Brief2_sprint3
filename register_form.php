<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email= $_POST['email'];
   $password =md5($_POST['password']);
  
         $insert = "INSERT INTO user_compte(user_name,email,mot_passe) VALUES('$name','$email','$password')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" id="fullname" name="name" required placeholder="enter your name">
      <span id="nameeror"></span>
      <input type="email" id="email" name="email" required placeholder="enter your email">
      <span id="emaileror"></span>
      <input type="password" id="password" name="password"  required placeholder="enter your password">
      <span id="passeror"></span>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>
<script link="script.js"></script>

</body>
</html>