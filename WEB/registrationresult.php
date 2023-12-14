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
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    if($con)
    {

       $p="insert into registration value('$ktuid','$name','$semester','$rollno','$email','$gender')";
       $s=mysqli_query($con,$p);
    if($s)
    {
      $res="registerd succesfully" ; 
    
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
       <h2> <?php
        echo "$res";
        ?></h2>
        <a href='login'>go to login page</a>
        </center>
        </body>
        </html>

