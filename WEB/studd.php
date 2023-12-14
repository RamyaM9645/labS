<?php
$con = mysqli_connect("localhost","root","","student");
if($con)
{
    echo "connection succefull";
}
else{
    echo "connection fail";
}

$p= "select * from framestud";

$result=mysqli_query($con,$p);
echo "<table border = 1>
<tr><th>KTU ID</th>
<th>NAME</th>
<th>ROLL NO</th>
<th>PHONE NO</th>";

while ($row = mysqli_fetch_array($result))
{
    echo "<tr><td>".$row['ktuid'];
    echo "<td>".$row['name'];
    echo "<td>".$row['rollno'];
    echo "<td>".$row['phoneno']."</tr>";
}
echo "</table>";
?>
