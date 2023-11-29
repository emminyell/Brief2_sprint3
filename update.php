<?php

@include 'config.php';

if(isset($_GET['updateid'])){
  $id = $_GET['updateid'] ;
      $select = "SELECT `contact_id`, `full_name`, `email`, `téléphone`, `description`, `date_creation` FROM `contact` WHERE contact_id= $id";
      $result= mysqli_query($conn, $select);
      $row=mysqli_fetch_assoc($result);
      
}
if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $date=date('y_m_d h:i:s');
    $message= $_POST['message'];

        $update = "UPDATE `contact` SET `full_name`='$name',`email`='$email',`téléphone`='$phone',`description`='$message',`date_creation`='$date' where contact_id=$id";
        mysqli_query($conn, $update);
        header('location:user_contact.php'); 
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/contacts/contact-1/assets/css/contact-1.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Contact 1 - Bootstrap Brain Component -->
      <div id="contact" class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Contact</h2>
      </div>
  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-12 col-lg-9">
        <div class="bg-white border rounded shadow-sm overflow-hidden">

        <form action="" method="post">
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
              <div class="col-12">
                <label for="fullname"  class="form-label">Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname"  value="<?php echo $row['full_name']; ?>" required>
                <span id="nameeror"></span>
              </div>
              <div class="col-12 col-md-6">
                <label for="email"  class="form-label">Email <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                  </span>
                  <input type="email" class="form-control" id="email" name="email"  value="<?php echo $row['email']; ?>" required>
                  <span id="emaileror"></span>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                  </span>
                  <input type="tel" class="form-control" id="phone" name="phone"  value="<?php echo $row['téléphone']; ?>">
                  <span id="phoneeror"></span>
                </div>
              </div>
              <div class="col-12">
                <label for="message" class="form-label">description<span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="3" required><?php echo $row['description']; ?></textarea>
                <span id="messgeror"></span>
              </div>
              <div class="col-12">
                <div id="btn_submit" class="d-grid">
                  <button id="okk" name="submit" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script link="script.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("okk").addEventListener("click", function() {
    var value = "are you sure you want to save this changes?";
    alert(value);
})});
</script>
</body>
</html>