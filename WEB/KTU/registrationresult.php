<?php
$con=mysqli_connect('localhost','root','','student');
// if($con)
// {
//     echo "connection sucesful";
// }
// else
// {
//     echo "connection fail";
// }
 if($_POST)
 {
    $ktuid=$_POST['ktuid'];
    $name=$_POST['name'];
    $semester=$_POST['semester'];
    $rollno=$_POST['rollno'];
    
    $gender=$_POST['gender'];

 if($con)
   {

   $p="insert into registration values('$ktuid','$name','$semester','$rollno','$gender')";
   $s=mysqli_query($con,$p);
   if($s)
   {
   echo "registerd succesfully" ; 
    
   }
   }
   }
   ?>

    
   <html>
    <head>
        <title>registartion status</title>
</head>
<body>
    <center>
        <a href='login'>go to login page</a>
        </center>
        </body>
        </html>

