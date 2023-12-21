<?php
include 'conn.php';
?>
<html>
<head><title>MARK UPDATION</title></head>
<body>
<form action='markdisplay.php' method='post'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>MARK UPDATION</h1></center></td></tr>



<tr>
<td width=250px>KTU-ID</td>
<td>
<select name="ktuid">
<option value="">Select an option</option>
<?php
$query = "SELECT ktuid FROM studentregistration";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) 
{
while ($row = mysqli_fetch_assoc($result)) 
{
echo "<option>".$row['ktuid'] . "<br></option>";
}
}
?>
</select>
</td>
</tr>




<tr>
<td width=250px>SUBJECT</td>
<td>
<select name="subject">
<option value="">Select an option</option>
<?php
$query2 = "SELECT subject FROM subjects";
$result2 = mysqli_query($con, $query2);
if (mysqli_num_rows($result2) > 0) 
{
while ($row = mysqli_fetch_assoc($result2)) 
{
echo "<option>".$row['subject'] . "<br></option>";
}
}
?>
</select>
</td>
</tr>



<tr>
<td colspan=2><center><input type='submit' value='OK'></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>
