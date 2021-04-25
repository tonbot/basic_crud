<?php 
include_once "include.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ajax.js"> </script>

</head>
<body class="bg-light">
         <div class="container bg-white shadow-lg p-5 w-50">
            <form method="post" action="data.php">
              <h1 class="text-center" >WELCOME TO STUDENT REGISTRATION PORTAL</h1>
              <h5 class="bg-warning p-2 text-center">pls fill out all the space</h5>
              <label for="Firstname">First name</label>
              <input class="form-control" type="text" name="fname" required>
              <label for="Lastname">Last Name</label>
              <input class="form-control " type="text" name="lname" required >
              <label for="Email">Email</label>
              <input class="form-control" type="Email" name="email"  required>
              <label for="Password">Password</label>
              <input class="form-control" type="password" name="pass"  required>
              <button class="btn btn-primary btn-lg mt-4 w-100">Submit</button>
              <p><span>Already have an account?</span><span><a href="studentlogin.php"> please login here</a></span></p>
              </div>
            </form>
         </div>
        


</body>
</html>