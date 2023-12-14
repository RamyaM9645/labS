<html>
    <head>
        <title>login</title>
</head>
<body>
    <form action=" " method="POST">
        name:<input type="text" name="name"><br>
        age:<input type="text" name="age"><br>
        email:<input tpe="text" name="email"><br>
        phone number:<input type="text" name="phoneno"><br>
        password:<input type="password" name="pass"><br>
        <input type="submit" value="register">
        <input type="submit" value="reset">

</form>
</body>
</html>

<?php
include 'connection.php';
if($_POST)
{
    $name = $_POST['name'];
    $age=  $_POST['age'];
    $email= $_POST['email'];
    $phoneno= $_POST['phoneno'];
    $password= $_POST['pass'];
    $sq= "insert into login values('$name',$age,'$email','$phoneno','$password')";
    $p= mysqli_query($con,$sq);
    if($p)
    {
        echo "<script> 
        alert('scuccesfull inserted');
        </script>";
    }
}
