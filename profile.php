<?php
session_start();
@include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user profile</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
  <div class="content">
      <h3>hi, <span>there!</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name']?></span></h1>
      <p>this is your profile</p>
      <a href="user_contact.php" class="btn">contact</a>
      <a href="logout.php" class="btn">logout</a>
      <p>online</p>
      <p><?php echo $_SESSION['date_updated']?></p>
  </div>
</div>
</body>
</html>
