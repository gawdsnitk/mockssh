<?php
?>
<html>
<head>
<link rel="stylesheet" href="dist/themes/default/style.min.css" />
<script src="dist/libs/jquery.js"></script>
<script src="dist/jstree.min.js"></script>
</head>
<body>
<div id="tree">
  </div>
<script>
  $(function () {
    // 6 create an instance when the DOM is ready
    $('#tree').jstree();
    // 7 bind to events triggered on the tree
    
    
    	$('#tree').on("changed.tree", function (e, data) {
      console.log(data.selected);
    });
    // 8 interact with the tree - either way is OK
    $('button').on('click', function () {
      $('#tree').jstree(true).select_node('child_node_1');
      $('#tree').jstree('select_node', 'child_node_1');
      $.jstree.reference('#tree').select_node('child_node_1');
    });
  });
</script>
</body>
</html>
