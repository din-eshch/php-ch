<?php

if(isset($_POST['submit'])){
echo '<html><body bgcolor="black"><center>';
$path = "uploads/";

$path = $path . basename( $_FILES['file']['name']); 

if(move_uploaded_file($_FILES['file']['tmp_name'], $path) && intval($_POST['FILE_SIZE']) < 10000) {
    echo "<font size='3' color='white'>The file ".  basename( $_FILES['file']['name']). 
    " has been uploaded </font>";
} 
else
   echo "<font size='3' color='white'>File size exceeded MAX</font>";
echo '</center></body></html>';
	die();
	}

?>
<html>
<body bgcolor="black">
<center>
<img width=300 height=200 src="../img/welcome1.gif"></img>
<form enctype="multipart/form-data" action="" method="POST">
<input type="hidden" name="FILE_SIZE" id="FILE_SIZE" value="10000" />
<font size="1" color="white">Choose a file to upload</font><p></p> 
<input name="file" type="file" id="file" /><p></p>
<input type="submit" id="submit" name="submit" value="Upload" />
</form>
</body>
</html>