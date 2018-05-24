<?php
echo '<html><body bgcolor="black"><center>';
$ans1 = 'Safari';
$ans2 = 'www.google.com';
if(isset($_POST['submit']))
{
	if ($_SERVER['HTTP_USER_AGENT'] == $ans1 && $_SERVER['HTTP_REFERER'] == $ans2) {
		echo '<font size="3" color="white">Congratulations!!!!!!!!!!</font>';
	}
	else
		echo '<font size="3" color="white">Dont give up yet!!!!</font>';
}
else
		echo '<font size="3" color="white">Do it the right way!!!!</font>';
		
echo '</center></body></html>';
?>