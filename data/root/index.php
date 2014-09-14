<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>jsTree test</title>
  <!-- 2 load the theme CSS file -->
  <link rel="stylesheet" href="dist/themes/default/style.min.css" />
  
</head>
<body>
  <!-- 3 setup a container element -->
  <div id="jstree">
    <!-- in this example the tree is populated from inline HTML -->
 <!--<?php listAllDir("."); ?>
  <button>demo button</button>-->
</div>
  <!-- 4 include the jQuery library -->
  <script src="dist/libs/jquery.js"></script>
  <!-- 5 include the minified jstree source -->
  <script src="dist/jstree.min.js"></script>
  <script>
  $(function () { 
	$("#jstree").tree({
		data : { 
			type : "json",
			opts : {
				static : [
					{ 
						// the short format demo
						data : "A node", 
						// here are the children
						children : [
							{ data : "Child node 1" },
							{ data : "Child node 2" },
							{ data : "Child node 3" }
						]
					},
					{ 
						attributes : { "id" : "li.node.id" }, 
						// this is the long data format
						data : { 
							title : "Long format demo", 
							attributes : { "href" : "http://jstree.com" } 
						} 
					}
				]
			}
		}
	});
});

  </script>

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
 	
