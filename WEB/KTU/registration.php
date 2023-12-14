<html>
    <head>
</title> registration</title>
</head>
<body>
    <form  action="registrationresult.php" method="POST">
        <center>
            <table border=1px padding=40px width=600px>
                <tr rowspan=2>
                    <td colspan=2><center><h1>REGISTRATION FORM</h1></center></td>
         <tr>
        <td width=250px >KTUID</td>
        <td><input type='text' name='ktuid'></td>
        </tr>
        <tr>
        <td width= 250px >NAME</td>
        <td><input type='text' name='name'></td>
        </tr>
        
        <tr>
        <td width= 250px >SEMESTER</td>
        <td><input type='text' name='semester'></td>
        </tr>
        <tr>
        <td width= 250px >ROLLNO</td>
        <td><input type='text' name='rollno'></td>
        </tr>
        
        

        <tr>
        <td width= 250px >GENDER</td>
        <td><input type='radio' name='gender' value='male'>MALE</input><br>
        <input type='radio' name='gender' value='female'>FEMALE</input><br>
        <input type='radio' name='gender' value='other'>OTHER</input><br>
        </tr>
        
        <tr>
        <td colspan=2><center><input type='submit' value='register'>
    </center>
</form>
</body>
</html>


