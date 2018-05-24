<?php
echo '<html><body bgcolor="black"><center>';
$ans1 = 'http://localhost/php-ch/ch6/post.php';
if ($_SERVER['HTTP_REFERER'] == $ans1 && intval($_COOKIE['Balance']) < 3250) {
	echo '<font size="3" color="white">You dont have enough balance to avail the offer!!!</font>';
}
elseif($_SERVER['HTTP_REFERER'] == $ans1 && intval($_COOKIE['Balance']) >= 3250)
	echo '<font size="3" color="white">Come back on Jan 1 2022 to register <a href="http://localhost/php-ch/ch6/ch6a.php">here</a> </font>
	<!--<img src="aHR0cDovL21hcHMuZ29vZ2xlLmNvbS9tYXBzL2FwaS9zdGF0aWNtYXA/Y2VudGVyPTI1LjEzODY0MTM1NDE2NSw1NS4xODkyODI4OTQxMzQ1MiZtYXB0eXBlPWh5YnJpZCZ6b29tPTE1JnNpemU9NDAweDQwMCZzZW5zb3I9ZmFsc2U=" />--> ';
else
	echo '<font size="3" color="white">I said DONOT ENTER!!!!</font>';
		
echo '</center></body></html>';
?>