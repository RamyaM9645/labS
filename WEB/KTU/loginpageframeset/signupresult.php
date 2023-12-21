<?php
include 'conn.php';
if ($_POST)
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($con)
{
    if($password == $password2)
    {
$rq="insert into userdetails values('$fname','$lname','$age','$email','$phone','$username','$password')";
$rs=mysqli_query($con,$rq);
if($rs)
{
$res="Account created!";
}
    }
else{
    $res2="Passwords are not same!";
}
}
}
?>

<html>
<head><title>Account status</title></head>
<body>
<center>
<h2><?php
if($password == $password2)
{
echo "$res <br><br><br>";
echo "<a href='login.php'>go to login page</a>";
}
else{
    echo "$res2";
}
?></h2>

</center>
</body>
</html>
