<?php
include 'conn.php';
if ($_POST) {
$ktuid=$_POST['ktuid'];
$semester=$_POST['semester'];
}
echo"
<html>
<head><title>YOUR MARKS</title></head>
<body>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>YOUR MARKS</h1></center></td></tr>
<tr>
<td>

<table> 
<tr>
<th>SUBJECT</th>
<th>FIRST SERIES</th>
<th>SECOND SERIES</th>
<th>ASSIGNMENT 1</th>
<th>ASSIGNMENT 2</th>
<th>ATTENDANCE %</th>
<th>TOTAL INTERNAL MARKS</th></tr>";
$s = "SELECT * FROM marks WHERE ktuid = '$ktuid' AND semester = '$semester'";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
while($row = mysqli_fetch_assoc($q)) 
{
echo"<tr>";
echo"<td><input type='text' name='subject' readonly value=".$row['subject']."></td>";
echo"<td><input type='text' name='series1' readonly value=".$row['series1']."></td>";
echo"<td><input type='text' name='series2' readonly value=".$row['series2']."></td>";
echo"<td><input type='text' name='assignment1' readonly value=".$row['assignment1']."></td>";
echo"<td><input type='text' name='assignment2' readonly value=".$row['assignment2']."></td>";
echo"<td><input type='text' name='attendance' readonly value=".$row['attendance']."></td>";
echo"<td><input type='text' name='internal' readonly value=".$row['internal']."></td>";
echo"</tr>";
}
}

echo"
</table>
</center>
</body>
</html>";
?>