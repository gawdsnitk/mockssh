<?php
//$x['datum']['filename'] = "sss.txt";
//$x['datum']['data'] = "Hieeee";
//$username = $_SESSION['username'];
$username =  "siddhant";
$data = $_POST['datum']['data'];
$filename = $_POST['datum']['filename'];
//echo json_encode($x);
file_put_contents("./data/".$username."/".$filename,$data);
?>
