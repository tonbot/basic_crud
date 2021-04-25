<?php
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $email=$_POST["email"];
 $pass=$_POST["pass"];

include_once "dbconnection.php";
 $data=new dbconn;

 if ($data !=null ){
    $result=$data->registerStudent($fname, $lname, $email, $pass);
    if ($result=="Exist")
    {
      echo "<h3>USER WITH THIS EMAIL ALREADY REGISTERED</h3><br/>";
      echo "<a href='index.php'>Back to REGISTRATION PORTAL</a>";
    }
    else 
    {
      header("location:studentlogin.php");
    }
    
 }


?>