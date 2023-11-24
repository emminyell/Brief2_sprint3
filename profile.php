<?php

@include 'config.php';
session_start();
if (!isset($_SESSION['id'])) {
  header('location:login_form.php');}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="contact.php" class="btn">Add contact</a>
      <a href="logout.php" class="btn">logout</a>
   </div>
</div>
<table>
<?php

$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {?>
<tr>
<td> <?=$row['full_name']?></td>
            <td> <?= $row['email']?></td>
            <td> <?= $row['téléphone']?></td>
            <td> <?= $row['description']?></td>
            <td> <?= $row['date_creation']?></td>
        </tr>
   <?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);


?>

</table>

</body>
</html>
