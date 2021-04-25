<?php 
session_start();
if (!isset($_SESSION["email"])){
    header("location:studentlogin.php");
}
include_once "include.php";

?>   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasboard</title>
    <script src="js/jquery.js"> </script>
</head>
<body>
      
    <div class="container p-5">
    <h1>Welcome to your dashboard</h1>
    <h6 class="bg-warning p-3">pls select all the three courses</h6>
     <h4>Select a course</h4>
     <form method="post" action="courseregister.php">
     <div class="form-group">
         <label for="my-select">Select course 1</label>
         <select id="my-select" class="form-control" name="course1">
             <option></option>
             <option>Computer Science</option>
             <option>Information Tecnology</option>
             <option>Data Science</option>
             <option>Business</option>
             <option>Personal Development</option>   
         </select>
         <label for="my-select">Select course 2</label>
         <select id="my-select" class="form-control" name="course2">
             <option></option>
             <option>Computer Science</option>
             <option>Information Tecnology</option>
             <option>Data Science</option>
             <option>Business</option>
             <option>Personal Development</option>   
         </select>
         <label for="my-select">Select course 3</label>
         <select id="my-select" class="form-control" name="course3">
             <option></option>
             <option>Computer Science</option>
             <option>Information Tecnology</option>
             <option>Data Science</option>
             <option>Business</option>
             <option>Personal Development</option>   
         </select>
     </div>
         <button class="btn btn-success">Save Course</button>
         <button class="btn btn-primary">View Course</button>
         <button class="btn btn-secondary">Update Course</button>
         </form>
    <form method="get" action="logout.php">
     <button class="btn btn-danger">Log Out</button>
    </form>
    <a href="resetpassword.php">RESET PASSWORD</a>
     </div>
   
     
     
</body>
</html>