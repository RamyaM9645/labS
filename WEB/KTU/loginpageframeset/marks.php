<?php
include 'conn.php';
?>
<html>
<head><title>MARKS</title></head>
<body>
<form action='marksenter.php' method='post'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>UPLOAD MARKS</h1></center></td></tr>



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
  <td width=250px>SEMESTER</td>
  <td>
    <select name="semester">
      <option>Select an option</option>
      <?php
        for ($i = 1; $i <= 4; $i++) {
          echo "<option>S".$i."</option>";
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
