<?php

 class dbconn 
 {
   
   public  $pdo=null;

    function __construct()
    { //making connection to the database
        try
        {
        
              $host="localhost";
              $dbname="student";
              $password="";
              $user="root";
              $this->pdo=new PDO("mysql:host=$host; dbname=$dbname", $user, $password );
              $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        } catch(PDOException $e)
        {
            echo ($e->getMessage());
        }
    }


function registerStudent($fname, $lname, $email, $pass) // register student
 {  
    $query="INSERT INTO students_profile(first_name, last_name, email, passwordd ) VALUES ( '$fname', '$lname', '$email', '$pass')";
    $result_set=$this->pdo->exec($query);
    if ($result_set)
    {
        return $result_set;
    }
 }

 
    function login($email, $pass) // login user;
    { 
        $query="SELECT * FROM students_profile WHERE email='$email' AND passwordd='$pass'" ;
        $result_set=$this->pdo->query($query);
        $result= $result_set->fetchall();
        $count=sizeof($result);
        return $count;
   
     }
 
  
 function coursereg($course1, $course2, $course3, $email){ // course registration
    $query="INSERT INTO students_course(email, course_1, course_2, course_3 ) VALUES ( '$email', '$course1', '$course2', '$course3')";
    $result_set=$this->pdo->exec($query);
    if ($result_set){
        return $result_set;
    }
 }


 
 function viewcourse($email){  /// view Course ;
    $query="SELECT * FROM students_course WHERE email='$email'" ;
    $result_set=$this->pdo->query($query);
    $result = $result_set->setFetchMode(PDO::FETCH_ASSOC);
    $result= $result_set->fetchall();
    return $result;

 }

 function updatecourse($course1, $course2, $course3, $email){ // course registration
    $query="UPDATE students_course  SET course_1='$course1', course_2='$course2', course_3='$course3' WHERE email='$email'";
    $result_set=$this->pdo->exec($query);
    if ($result_set){
        return $result_set;
    }
 }


 function deletecourse($email){ // course Delete
    $query="DELETE FROM students_course WHERE email='$email'";
      $result_set=$this->pdo->exec($query);
    if ($result_set){
        return $result_set;
    }
 }


  function resetpassword($email, $newpass)
  {
    $query="UPDATE students_profile  SET  passwordd='$newpass' WHERE email='$email'";
    $result_set=$this->pdo->exec($query);
    if ($result_set){
        return $result_set;
    }
  }


 }





 ?>