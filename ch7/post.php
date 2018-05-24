<?php
echo '<html><body bgcolor="black"><center>';
$ans ='5.1.2600';
if(isset($_POST['submit']))
{
	if ($_POST['input'] == $ans) {
		echo '<font size="3" color="white">Congratulations!!!!!!!!!!</font>';
	}
	else
		echo '<font size="3" color="white">Dont give up yet!!!!</font>';
}
else
		echo '<font size="3" color="white">Do it the right way!!!!</font>';
		
echo '</center></body></html>';
?>