<?php
@include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table>
<?php

$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {?>

<tr>
            <td> <?= $row['first_name']?></td>
            <td> <?= $row['last_name']?></td>
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
