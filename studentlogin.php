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
    <form method="post" action="loginprocessing.php"> 
    <div class="container bg-white p-5 w-25 shadow-lg">
         <h1 class="text-center">Please Login Here</h1>
         <form method="get" action="">
         <label for="Email" class="text-left">Email</label>
         <input class="form-control" type="Email" name="email"  required>
         <label for="Password" class="text-left">Password</label>
         <input class="form-control" type="password" name="pass"  required>
         <button class="btn btn-primary btn-lg mt-3 w-100"> LOGIN </button>
         <p class="text-center">Dont have an account?<span><a class="nav-link" href="index.php">Register here</a></span></p>
     </div>
     </form>
</body>
</html>