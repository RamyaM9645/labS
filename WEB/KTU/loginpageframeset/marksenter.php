<?php
include 'conn.php';
if ($_POST)
{
$ktuid=$_POST['ktuid'];
$semester=$_POST['semester'];
}
?>
<html>
<head><title>MARKS ENTERING</title></head>
<body>
<form action='marksadded.php' method='post'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>MARKS ENTERING</h1></center></td></tr>


<tr>
<td width=250px>KTU-ID</td>
<td><?php
 echo "<input type='text' name='ktuid' readonly value=".$ktuid.">";
 ?></td>
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
</tr>

<tr>
<td width=250px>SEMESTER</td>
<td><input type='text' name='semester' readonly value='$semester'>
</td>
</tr>

<tr>
<td width=250px>SUBJECT</td>
<td>
<select name='subject'>
<option value=''>Select an option</option>";
$query2 = "SELECT subject FROM subjects where semester='$semester'";
$result2 = mysqli_query($con, $query2);
if (mysqli_num_rows($result2) > 0) 
{
while ($row2 = mysqli_fetch_assoc($result2)) 
{
echo "<option>".$row2['subject'] . "<br></option>";
}
}
echo"</select>
</td>
</tr>";
}
}
?>



<tr>
<td width=250px>SCORES</td>
<td>
FIRST SERIES <input type='text' name='series1'>
SECOND SERIES <input type='text' name='series2'>
ASSIGNMENT 1 <input type='text' name='assignment1'>
ASSIGNMENT 2 <input type='text' name='assignment2'>
ATTENDANCE % <input type='text' name='attendance'>
</td>
</tr>


<tr>
<td colspan=2><center><input type='submit' value='ADD MARKS'></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>
