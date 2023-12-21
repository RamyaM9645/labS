<?php
include 'conn.php';
$ktuid=$_POST['ktuid'];
$subject=$_POST['subject'];
?>
<html>
<head><title>MARK UPDATION</title></head>
<body>
<form action='markupdationdisplay.php' method='post'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>MARK UPDATION</h1></center></td></tr>

<tr>
<td width=250px>KTU-ID</td>
<td> <?php
 echo "<input type='text' name='ktuid' readonly value=".$ktuid.">";
 ?>
 </td>
</tr>

<?php
$query = "SELECT * FROM studentregistration where ktuid='$ktuid'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) 
{
while ($row = mysqli_fetch_assoc($result)) 
{
echo" 
<tr>
<td width=250px>FIRST NAME</td>
<td>
<input type='text' name='fname' readonly value=".$row['fname'].">
</td>
</tr>

<tr>
<td width=250px>LAST NAME</td>
<td>
<input type='text' name='lname' readonly value=".$row['lname'].">
</td>
</tr>";
}
}

$query2 = "SELECT semester FROM subjects where subject='$subject'";
$result2 = mysqli_query($con, $query2);
if (mysqli_num_rows($result2) > 0) 
{
while ($row2 = mysqli_fetch_assoc($result2)) 
{
echo" 
<tr>
<td width=250px>SEMESTER</td>
<td><input type='text' name='semester' readonly value=".$row2['semester'].">
</td>
</tr>";
}
}
?>

<tr>
<td width=250px>SUBJECT</td>
<td> <?php
 echo "<input type='text' name='subject' readonly value=".$subject.">";
 ?>
</td>
</tr>

<tr>
<td width=250px>SCORES</td>
<?php
$s="select * from marks where ktuid='$ktuid' AND subject='$subject'";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
while($row = mysqli_fetch_assoc($q)) 
{
echo"<td>";
echo"FIRST SERIES:<input type='text' name='series1' value=".$row["series1"]."> <br>";
echo"SECOND SERIES:<input type='text' name='series2' value=".$row["series2"]."> <br>";
echo"ASSIGNMENT 1:<input type='text' name='assignment1' value=".$row["assignment1"]."> <br>";
echo"ASSIGNMENT 2:<input type='text' name='assignment2' value=".$row["assignment2"]."> <br>";
echo"ATTENDANCE %:<input type='text' name='attendance' value=".$row["attendance"]."> <br>";
echo"</td>";
}
}
?>
</tr>

<tr>
<td colspan=2><center><input type='submit' value='UPDATE'></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>
