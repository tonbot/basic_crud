<?php
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $email=$_POST["email"];
 $pass=$_POST["pass"];

include_once "dbconnection.php";
 $data=new dbconn;

 if ($data !=null ){
    $result=$data->registerStudent($fname, $lname, $email, $pass);
    header("location:studentlogin.php");
 }


?>