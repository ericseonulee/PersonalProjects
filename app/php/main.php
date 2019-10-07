<?php
session_start();
if (!isset($_SESSION['userid'])) {
	header ('Location: ./index.html');
}

echo "home(login succeed)";

echo "<a href=logout.php>Log Out</a>";

?>