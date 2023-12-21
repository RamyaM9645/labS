<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header('Location: unauthorized.php');
    exit();
}
?>
<html>
<body>
<ul>
<li><a href="home.php" target="main">HOME</a><br><br></li>
<li><a href="registration.php" target="main">STUDENT REGISTRATION</a><br><br></li>
<li><a href="marks.php" target="main">UPLOAD MARKS</a><br><br></li>
<li><a href="markupdation.php" target="main">UPDATE MARKS</a><br><br></li>
<li><button><a href="logout.php" target="_top">LOG-OUT</a></button><br></li>
</ul>
</body>
</html>
