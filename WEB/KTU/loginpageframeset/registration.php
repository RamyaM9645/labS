<html>
<head>
<script>
function validateForm() {
  let ktuid = document.forms["registrationform"]["ktuid"].value;
  if (!ktuid) {
    alert("KTUID must be filled out");
    return false;
  }

  if (!ktuid.startsWith("TVE")) {
    alert("KTUID must start with 'TVE'");
    return false;
  }

  if (ktuid.length !== 13) {
    alert("KTUID must be exactly 13 letters");
    return false;
}
}
</script>  
<title>STUDENT REGISTRATION</title>
</head>
<body>
<form name='registrationform' action='registrationresult.php' onsubmit='return validateForm()' method='post'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>Registration Form</h1></center></td></tr>

<tr>
<td width=250px>FIRST NAME</td>
<td><input type='text' name='fname' required></td>
</tr>

<tr>
<td width=250px>LAST NAME</td>
<td><input type='text' name='lname'></td>
</tr>

<tr>
<td width=250px>KTU-ID</td>
<td><input type='text' name='ktuid'></td>
</tr>


<tr>
<td width=250px>ROLL NO</td>
<td><input type='text' name='rollno'></td>
</tr>

<tr>
<td width=250px>GENDER</td>
<td><input type='radio' name='gender' value='MALE'>MALE</input><br>
<input type='radio' name='gender' value='FEMALE'>FEMALE</input><br>
<input type='radio' name='gender' value='OTHER'>OTHER</input></td>
</tr>


<tr>
<td colspan=2><center><input type='submit' value='Register'></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>
