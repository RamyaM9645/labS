<?php
include 'conn.php';
if ($_POST)
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$ktuid=$_POST['ktuid'];
$rollno=$_POST['rollno'];
$gender=$_POST['gender'];

if($con)
{
$rq="insert into studentregistration values('$fname','$lname','$ktuid','$rollno','$gender')";
$rs=mysqli_query($con,$rq);
if($rs)
{
$res="Registered Successfully!";
}
}
}
?>

<html>
<head><title>Registration Status</title></head>
<body>
<center>
<h2><?php
echo "$res";
?></h2>
</center>
</body>
</html>
