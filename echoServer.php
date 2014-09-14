<?php
//if(isset($_POST['target']))
$str = $_POST['target'];
//if(!empty($str))
file_put_contents("code.php",$str);
//else
//{
//echo "HI";
//$str = file_get_contents("code.php");
//json_encode($str);	
//}

?>
