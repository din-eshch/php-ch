<?php
echo '<html><body bgcolor="black"><center>';
$ans1 = '7b24afc8bc80e548d66c4e7ff72171c5';
$ans2 = 'admin';
if(isset($_POST['submit']))
{
	if ($_POST['pwd'] == $ans1 && $_COOKIE['AccessType'] == $ans2) {
		echo '<font size="3" color="white">Congratulations!!!!!!!!!!</font>';
	}
	else
		echo '<font size="3" color="white">Dont give up yet!!!!</font>';
}
else
		echo '<font size="3" color="white">Do it the right way!!!!</font>';
		
echo '</center></body></html>';
?>