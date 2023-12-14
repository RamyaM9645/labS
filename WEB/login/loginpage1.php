<html>
<head>
    <title>login page1</title>
</head>
<body>
    <form action="loginpage1.php" method="POST">
        <center>
       username: <input type="text" name="username"><br>
       password: <input type="password" name="password"><br><br>
       <input type="submit" value="login">
       <input type="submit" value="reset"><br>
       <a href ="loginpage2.php">NOT A MEMBER</a> 
       </center>
       </form>
       </body>
       </html>

        <?php
       include 'connection.php';
       if($_POST)
       {
        if(isset($_POST["username"]))
        {
            $username= $_POST['username'];
            $password= $_POST['password'];
            $s= "SELECT * FROM `login` WHERE `name` = '$username' AND `password` = '$password';";
            // echo $s;
            $q=mysqli_query($con,$s);
            if(mysqli_num_rows($q)>0)
            {
                echo "login succesful";
                $row =mysqli_fetch_array($q);
                echo "<br>";
                echo "username: " .$row[0]. " " ."<br>";
                echo "password: " .$row[1]."<br>";
            }
            else
            {
                echo "<br> login failed";
            }

        }
        else{
            echo "no username received";

        }
       }
       else{
        echo "no data recerived";
       }
       ?> 
