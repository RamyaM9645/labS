<?php
$con=mysqli_connect('localhost','root','','student');
if ($_POST)
{
$ktuid=$_POST['ktuid'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$series1=$_POST['series1'];
$series2=$_POST['series2'];
$assignment=$_POST['assignment'];
$attendance=$_POST['attendance'];

if($con)
{
$rq="insert into marks values('$ktuid','$semester','$subject','$series1','$series2','$assignment','$attendance')";
$rs=mysqli_query($con,$rq);
if($rs)
{
echo "Marks added Succesfully";
}
}
}
?>

