<?php
session_start();
if(isset($_SESSION['username']))
{
	echo "Logged in";
}
else {
	echo "Not logged in";
}
?>