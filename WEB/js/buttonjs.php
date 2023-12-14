<html>
<body>
<p id="a">this is a paragragh</p>
<input type="button" value="onclick" onclick="document.getElementById('a').innerHTML='hello' ">
<input type="button" value="zoomin" onclick="document.getElementById('a').style.fontSize='50px'">
<input type="button" value="zoom out" onclick="document.getElementById('a').style.fontSize='10px'">

<input type="button" value="change color" onclick="document.getElementById('a').style.color='green'">
<input type="button" value="change random color" onclick="document.getElementById('a').style.color='#'+(Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0')">

<input type="button" value="hide text" onclick="document.getElementById('a').style.display='none' ">
<input type="button" value="show text" onmouseover="document.getElementById('a').style.display='block'">
<input type="button" value="print" onclick="window.print">
</body>
</html>