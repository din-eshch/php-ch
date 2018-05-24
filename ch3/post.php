<?php
echo '<html><body bgcolor="black"><center>';
$ans ='ISRM';
if(isset($_POST['submit']))
{
	if ($_POST['input'] == $ans) {
		echo '<!--<font size="3">b64</font>';
	}
	else
		echo '<font size="3" color="white">Dont give up yet!!!!</font>';
}
else
		echo '<font size="3" color="white">Do it the right way!!!!</font>';
		
echo '</center></body></html>';
?>