<?php
$con= mysqli_connect('localhost','root','','logindetails',);
if($con)
{
    echo "connection succesful";

}
else{
    echo "connection failed";
}
?>