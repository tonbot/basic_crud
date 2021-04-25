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
</head>
<body class="bg-light">
       <div class="container w-25 bg-white text-center p-5">
       <h3>Please Enter Your New Password</h3>
          <form method="post" action="reset.php">
            <input class="form-control" type="password" name="newpass" required>
            <button class="btn btn-primary m-3">Reset password</button> 
          </form>
       </div>
</body>
</html>