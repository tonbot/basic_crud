<?php
session_start();
 $course1=check($_POST["course1"]);
 $course2=check($_POST["course2"]);
 $course3=check($_POST["course3"]);
 $email=check($_SESSION["email"]);
 
 
include_once "dbconnection.php";
 $data=new dbconn;  //making an object of database connection

 if ($data !=null ){   //add new course if not already added but update course if already added;
     if (isset($course1) && isset($course2) && isset($course3)) 
     {
        $result=$data->viewcourse($email); //check if user added course already
        if ($result)
        {
               $resul=$data->updatecourse($course1, $course2, $course3, $email);
               echo "<h3>Course Updated Successfully</h3><br/>";
               echo "<a href='dashboard.php'>Back to Dashboard </a>";
        }
        else
        {
              $result=$data->coursereg($course1, $course2, $course3, $email);
              echo "<h3>Course Added Successfully</h3><br/>";
              echo "<a href='dashboard.php'>Back to Dashboard </a>";
        }
     } 

     elseif (isset($email) && empty($course1) && empty($course2) && empty($course3)){ //viewing course here
    $result=$data->viewcourse($email);
    if ($result){
        foreach($result as $row){
            echo ( '<p class="px-5">'.$row["course_1"]."</p><br/>");
            echo ( '<p class="px-5">'.$row["course_2"]."</p><br/>");
            echo ( '<p class="px-5">'.$row["course_3"]."</p><br/>");
        }
        echo "<a class='px-5' href='dashboard.php'>Back to Dashboard </a> <br/>";
        
     }
    
 }    

 }
 function check($data1){ //validate user input
    if ($data1==""){
        return null;
    } else{
        return $data1;
    }
}

?>


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
<body>
    <form method="post" action="deletecourse.php">
       <button class="btn btn-danger mx-5 mt-5">Delete Course</button>
    </form>
</body>
</html>