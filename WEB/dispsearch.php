<?php
include 'dbconnection.php';
if($_POST)
{
    if(isset($_POST["rollnumber"]))
    {

    
    $rollno=$_POST["rollnumber"];
    
    $s="SELECT * from stud WHERE rollno='$rollno';";
    $q=mysqli_query($con,$s);

    $row = mysqli_fetch_array($q);
    echo "<br>";
    for($i=0;$i<3;$i++)
    {
        echo " " . $row[$i] . " ";

    }
    
    }
}
?>