<?php 
echo $_SERVER['SERVER_SOFTWARE']; 
echo "<br />";
echo php_uname('s');/* Operating system name */
echo "<br />";
echo php_uname('n');/* Host name */
echo "<br />";
echo php_uname('r');/* Release name */
echo "<br />";
echo php_uname('v');/* Version information */
echo "<br />";
echo php_uname('m');/* Machine type */
echo "<br />";
echo PHP_OS;/* constant will contain the operating system PHP was built on */
?>