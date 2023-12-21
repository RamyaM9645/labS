<html>
<head>
<script>
function validateForm() {
  let email = document.forms["signupform"]["email"].value;
  if (!email) {
    alert("EMAIL must be filled out");
    return false;
  }

  if (!email.includes("@")) {
    alert("EMAIL must contain '@'");
    return false;
  }

 let password = document.forms["signupform"]["password"].value;
 const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])(.{8,20})$/;

  if (!password || !regex.test(password) || password.length < 6) {
  alert("PASSWORD must contain a special character, a number, an uppercase letter and a lowercase letter, and be at least 6 characters long.");
  return false;
  }
}
</script> 
<title>Sign-Up</title>
</head>
<body>
<form name='signupform' action='signupresult.php' onsubmit='return validateForm()' method='post'><center>
FIRST NAME: <input type='text' name='fname' required><br><br>
LAST NAME: <input type='text' name='lname'><br><br>
AGE: <input type='text' name='age' required><br><br>
PHONE NUMBER: <input type='text' name='phone' required><br><br>
EMAIL: <input type='text' name='email'><br><br>
USERNAME: <input type='text' name='username' required><br><br>
PASSWORD: <input type='password' name='password' ><br><br>
RE ENTER PASSWORD: <input type='password' name='password2' required><br><br>
<input type='submit' value='signup'><br><br></center>
</form>
</body>
</html>
