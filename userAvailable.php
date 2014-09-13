<?php
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	include 'db_connect.php';
	if(isset($_GET['username']))
	{
		$username = $_GET['username'];
	}

	$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$username'");
	$count = mysqli_fetch_array($result);
	if(!empty($count))
	{
		echo 1;
	}
	else 
	{
		echo 0;
	}

}

?>