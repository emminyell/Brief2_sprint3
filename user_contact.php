<?php

@include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user contact</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
  <div class="content">
      <p>this is your contact</p>
      <a href="contact.php" class="btn"> Add Contact</a>
      <a href="profile.php" class="btn"> Profile</a>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">Description</th>
      <th scope="col">Creation Date</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {

        $id=$row['contact_id'];
        $fullname=$row['full_name'];
          $email= $row['email'];
            $phone= $row['téléphone'];
            $description= $row['description'];
            $cdate= $row['date_creation'];
            echo' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$fullname.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$description.'</td>
            <td>'.$cdate.'</td>
            <td>
            <button id="update"><a href="update.php?updateid='.$id.'">Update</a></button>
            <button id="delete"><a href="delete.php?deleteid='.$id.'">delete</a></button>
            </td>
          </tr>';
  }
} else {
  echo "0 results";
}

mysqli_close($conn);


?>
</table>
