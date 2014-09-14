<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	include 'db_connect.php';
	if(isset($_GET['username']))
	{
		$username = $_GET['username'];
	}
	if(isset($_GET['password']))
	{
		$password = $_GET['password'];
	}

	$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$username'");
	$count = mysqli_fetch_array($result);
	if($username == $count['username'] && $password == $count['password'])
	{
		$_SESSION['username'] = $username;
		echo 1;
	}
	else
	{
		session_destroy();
		echo 0;
	}
}

?>