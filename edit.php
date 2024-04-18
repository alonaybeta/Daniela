<?php
include "connect.php";

if (isset($_POST["submit"])) {
   $full_name = $_POST['full_name'];
   $contact = $_POST['contact'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];


   $sql = "INSERT INTO `bsis info`(`full_name`, `contact`, `address`,`email`, `age`,`id`) VALUES ('$full_name','$contact','$address','$email','$age',NULL)";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
        $sql = "SELECT * FROM `bsis info`";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) 
        ?>



    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
        <div class="col">
                  <label class="form-label">Full_name:</label>
                  <input type="text" class="form-control" name="full_name" placeholder="Enter your full_name">
               </div>

               <div class="col">
                  <label class="form-label">Contact:</label>
                  <input type="text" class="form-control" name="contact" placeholder="Contact">
               </div>
        
               <div class="col">
                  <label class="form-label">Email:</label>
                  <input type="text" class="form-control" name="email" placeholder="Email">
               </div>

               <div class="col">
                  <label class="form-label">Address:</label>
                  <input type="text" class="form-control" name="address" placeholder="Address">
               </div>

               <div class="col">
                  <label class="form-label">Age:</label>
                  <input type="text" class="form-control" name="age" placeholder="Age">
               </div>

               <div class="row mb-3">
          <label class="form-label">Gender:</label>
          &nbsp;&nbsp;
          <input type="radio" class="form-check-input" name="gender" value="male">
          <label class="form-input-label">Male</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="gender" value="female">
          <label class="form-input-label">Female</label>
        </div>

              

             
        <div>

        
        <div>
        
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>