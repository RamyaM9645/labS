<?php
$con=mysqli_connect('localhost','root','','student');
if($con)
{
    echo "connection succesful";

}
else{
    echo "connection failed";
}

$rollno=$_POST['rollno'];
$name=$_POST['fname'];
$mark=$_POST['mark'];
$sq="insert into stud values('$rollno','$name','$mark')";
$p=mysqli_query($con,$sq);
if($p)
{
    echo "<script>
    alert( 'succesfuly inserted 1 row');
    </script>";
}
?>  