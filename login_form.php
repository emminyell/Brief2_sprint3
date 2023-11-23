<?php

@include 'config.php';


if(isset($_POST['okk'])){
   $email = $_POST['email'];
   $pasword = md5($_POST['password']);
echo $pasword ;
echo $email;
   $sql="SELECT * from user_compte where email = '$email' and  mot_passe = '$pasword' ";
   $result=mysqli_query($conn,$sql);
   if($result->num_rows > 0){
      header('location:contact.php');
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
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="okk" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>

<?php 



?>