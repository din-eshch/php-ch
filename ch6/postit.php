<?php

echo '<html><body bgcolor="black"><center>';
$ans1 ='jumeirah';
$ans2 ='1245';
if(isset($_POST['submit']))
{
	if ($_POST['loc'] == $ans1 && $_POST['bal'] == $ans2 ) {
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