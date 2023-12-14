<?php
$con=mysqli_connect('localhost','root','','student');

if(isset($_POST['save']))
{
    $ktuid1=$_POST["ktuid"];
    $sub=$_POST['subject'];
    $mark1=$_POST['m1'];
    $mark2=$_POST['m2'];
    $mark3=$_POST['a1'];
    $mark4=$_POST['a2'];
    $q="UPDATE marks SET series1='$mark1', series2='$mark2', assigment='$mark3', attentance='$mark4' where (ktuid='$ktuid1' AND subject='$sub')";
    $a=mysqli_query($con,$q);
    if($a){
        echo "Updation successfull";
    }else{
        echo "Updation failed";
    }
}
?>