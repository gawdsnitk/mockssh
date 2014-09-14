<html>
<head>
<script src="dist/libs/jquery.js"></script>
<script src="dist/jstree.min.js"></script>
</head>
<body>
<div id="#myel">

</div>
<script>
$.ajax({
type: 'POST',
url: 'jsonTree.php',
success: function(){
//
}
});
$.get("jsonTree.php",function(data){
alert("" + data);
});
</script>
</body>
</html>
