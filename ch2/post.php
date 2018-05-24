<?php
echo '<html><body bgcolor="black"><center>';
$ans ='<script>alert(String.fromCharCode(65,67,69));</script>';
if(isset($_POST['submit']))
{
	if ($_POST['input'] == $ans) {
		echo $ans;
		echo '<font size="3" color="white">Congratulations!!!!!!!!!!</font>';
	}
	else
		echo '<font size="3" color="white">Dont give up yet!!!!</font>';
}
else
		echo '<font size="3" color="white">Do it the right way!!!!</font>';
		
echo '</center></body></html>';
?>