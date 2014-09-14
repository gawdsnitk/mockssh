 <?php
include 'functions.php';
$str =  $_POST['target'];
if(isset($str))
{
print($str);
file_put_contents('code.php',$str);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Editor</title>


<link rel="stylesheet" href="dist/themes/default/style.min.css"/>
<script src="dist/libs/jquery.js"></script>
  <!-- 5 include the minified jstree source -->
  <script src="dist/jstree.min.js"></script>
  
<script src ="jquery.js"></script>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->

  <style type="text/css" media="screen">
    body {
        overflow: hidden;
    }
    
    #editor { 
        margin: 0;
        position: absolute;
        top: 82px;
        bottom: 0;
        left: 0;
        right: 216px;
    }
  </style>
 
 

</head>
<body>
<form action="echoServer.php" method="POST">
<p id="autoSaved">****</p>
<div id="editor" name= 'target'>

<?php
$read = file_get_contents("code.php");

if($read)
{

print("<xmp>".$read."</xmp>");
}
else
print("Write your code here");

?>

</div>

</form>
 <div id="jstree" style="position: absolute;
left: 52em;
top: 5em;">
   <ul>
      <li>HTML
        <ul>
          <li id="child_node_1">abc.html</li>
          <li>file2.html</li>
        </ul>
      </li>
      <li>CSS
      	<ul>
          <li id="child_node_1">file.css</li>
          <li>file2.css</li>
        </ul>
      </li>
      <li>js
      <ul>
          <li id="child_node_1">abc.js</li>
          <li>file2.js</li>
        </ul>
      </li>
    </ul>
 </div>
 
 <button type="Submit" id = "saveButton">Save</button>
<a href="code.php" target="blank" style="position:absolute; z-index:1;left:200px;">View</a>
 
<script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>

<script>

$(function () {
    // 6 create an instance when the DOM is ready
    $('#jstree').jstree();
    // 7 bind to events triggered on the tree
    $('#jstree').on("changed.jstree", function (e, data) {
      console.log(data.selected);
    });
    // 8 interact with the tree - either way is OK
    $('button').on('click', function () {
      $('#jstree').jstree(true).select_node('child_node_1');
      $('#jstree').jstree('select_node', 'child_node_1');
      $.jstree.reference('#jstree').select_node('child_node_1');
    });
  });
</script>
   
</body>
</html>	
