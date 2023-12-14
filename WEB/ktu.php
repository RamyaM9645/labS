<html>
<head>
    <title>login page1</title>
</head>
<body>
    <form action=" " method="POST">
        <center>
       ktu id: <input type="text" name="ktuid"><br>
       name: <input type="text" name="name"><br><br>
       roll no:<input type="text" name="rollno"><br>
       phone no:<input type="text" name="phoneno"><br>
       <input type="submit" value="submit">
       
       <a href ="studd.php">show table</a> 
       </center>
       </form>
       </body>
       </html>

       <?php
$con = mysqli_connect("localhost","root","","student");
if($con)
{
    echo "connection succefull";
}
else{
    echo "connection fail";
}

if($_POST)
{
    $ktuid = $_POST['ktuid'];
    $name=  $_POST['name'];
    $rollno= $_POST['rollno'];
    $phoneno= $_POST['phoneno'];
    
    $sq= "insert into framestud values('$ktuid','$name','$rollno','$phoneno')";
    $p= mysqli_query($con,$sq);
    if($p)
    {
        echo "<script> 
        alert('scuccesfull inserted');
        </script>";
    }
}
