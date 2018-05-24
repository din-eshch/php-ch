<?php
//if($_COOKIE["AccessType"] == "") {
setcookie("AccessType", "user");
//}
?>

<html>

<body bgcolor="black">
<center>
<img width=300 height=200 src="../img/welcome1.gif"></img>
<form method="post" action="post.php">
<p></p>
<p></p>
<font size="2" color="white">Enter Password</font><p></p>
<font size="1" color="white"> (Hint 1: BacKTrack root users only)</font>
<p></p>
<input type="text" id="pwd" name="pwd" value="" /> 
<p></p>
<input type="submit" id="submit" name="submit" value="Login" /> 
<p></p>
<font size="1" color="white">(Hint 2: Accessible to admins only)</font>
</center>
</form>
</body>

</html>