<?php
session_start();
include 'conn.php';
if ($_POST)
{
$username=$_POST['username'];
$password=$_POST['password'];
if($con)
{
    if ($username == 'admin' AND $password =='admin')
    {
      $_SESSION['username'] = "$username";
$sq="select * from userdetails where username='admin' and password='admin'";
$q=mysqli_query($con,$sq);
if(mysqli_num_rows($q))
{
$row = mysqli_fetch_assoc($q);
echo "<html>";
echo "<head><title>FUNCTIONS</title><head>";
echo "<frameset cols='20%, 80%'>";
echo "<frame name='nav' src='nav.php'/>";
echo "<frame name='main' src='welcome.php'/>";
echo "</frameset>";
}
    }


else
{
$sz = "SELECT userdetails.*, studentregistration.ktuid FROM userdetails JOIN studentregistration ON userdetails.fname = studentregistration.fname AND userdetails.lname = studentregistration.lname WHERE userdetails.username='$username' AND userdetails.password='$password'";
$qu=mysqli_query($con,$sz);
if(mysqli_num_rows($qu))
{
$row = mysqli_fetch_assoc($qu);
$fname = $row['fname'];
$lname = $row['lname'];
$ktuid = $row['ktuid'];
echo "<html>
<head><title>STUDENT LOGIN</title></head>
<body>
<form action='linkresult.php' method='post'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>CHECK YOUR MARKS</h1></center></td></tr>

<tr>
<td width=400px>FIRST NAME</td>
<td>";
$sql = "SELECT * FROM studentregistration WHERE fname = (SELECT fname FROM userdetails WHERE username = '$username') AND lname = (SELECT lname FROM userdetails WHERE username = '$username')" ;
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  $data = mysqli_fetch_assoc($result);

echo "<input type='text' name='fname' readonly value=".$fname.">";
}

 echo " </td>
</tr>

<tr>
<td width=400px>LAST NAME</td>
<td>";
echo "<input type='text' name='lname' readonly value=".$lname.">";
echo " </td>
</tr>

<tr>
<td width=400px>KTU-ID</td>
<td>";
 echo "<input type='text' name='ktuid' readonly value=".$ktuid.">";
echo "</td>
</tr>

<tr>
  <td width=250px>SEMESTER</td>
  <td>
    <select name='semester'>
      <option>Select an option</option>";
        for ($i = 1; $i <= 4; $i++) {
          echo "<option>S".$i."</option>";
        }
    echo"</select>
  </td>
</tr>


</table>
<br><br>
<input type='submit' value='Check Your Marks'>
<br><br>
<button><a href='login.php'>LOG-OUT</a></button>

</center>
</form>
</body>
</html>";
}

else
{
echo "<center>";
echo"<h2>Invalid username or password or admin haven't yet registered your details</h2><br><br>";
echo"<a href='signup.php'>Sign-Up</a>";
echo"</center>";
}
}
}
}
?>