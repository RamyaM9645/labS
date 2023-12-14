<html>
    <head></head>
    <body>
        <form action="fetchbyroll.php" method="POST">
            rollno:<input type="text" name="rollno">
            <input type="submit">
           <button name="submit">update</button>
</form>
</body>
</html>
           

<?php
include 'dbconnection.php';
$rollno= $_POST["rollno"];
$s= "select * from student where rollno= '$rollno' ";
$q=mysqli_query($con,$s);
if(mysqli_num_rows)
{
    while($row=mysqli_fetch_assoc($s))
    {
        echo "rollno: <input type='text' value=' ".$row["rollno"]." 'doisabled name='roll1'>";
        echo "name:<input type='text' value =' ".$row["name"]." 'disabled name='name1'>";
        echo "mark:<input type='text' value=' ".$row["mark"]." 'name='mark1'>";
    }
}