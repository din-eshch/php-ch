<?php

setcookie("Balance", "1245");

echo '<html><body bgcolor="black"><style>
td{
font-family:Verdana; 
font-size:15;
color:#FFFFFF;
}
a{
font-family:Verdana; 
font-size:15;
color:#FFFFFF;
}
</style> <center>';
$ans = '680145879334';
$tab ='<table border="1"><tr><td>Balance</td><td>Date</td></tr>
<tr><td>$1245.00</td><td><script>document.write(Date());</script></td></tr></table><p></p><p></p>
<a href="http://localhost/php-ch/ch6/participate.php">Holiday Offer</a>';
if(isset($_POST['submit']))
{
	if ($_POST['acc'] == $ans) {
		echo $tab;
	}
	else
		echo '<font size="3" color="white">Dont give up yet!!!!</font>';
}
else
		echo '<font size="3" color="white">Do it the right way!!!!</font>';

echo '</center></body></html>';
?>