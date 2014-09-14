$(document).ready(function()
{
  var data;	
  var editor = ace.edit("editor");
  editor.setTheme("ace/theme/twilight");
  editor.getSession().setMode("ace/mode/php");

//JS TREE  
/*$(function () { $('#jstree_demo_div').jstree(); });

$('#jstree_demo_div').on("changed.jstree", function (e, data) {
  console.log(data.selected);
});  
  
  $('button').on('click', function () {
  $('#jstree').jstree(true).select_node('child_node_1');
  $('#jstree').jstree('select_node', 'child_node_1');
  $.jstree.reference('#jstree').select_node('child_node_1');
});
*/
//JSTREE ENDS
$("#saveButton").click(function(){
var text = editor.getSession().getValue();
$.ajax({
type: 'POST',
url: 'echoServer.php',
data: {target: text},
success: function(){
$("#autoSaved").html("Saved");
},
error: function(){
$("#autoSaved").html("Saving Error!");
}	
});
});


/*$("button").click(function(){
alert("Hello");
});
$(".folder").click(function(){
$(".file").toggle();
});

 $(".ace_text-input").change(function(){
 alert("Hiii");
     
     var autosave = setInterval(function(){
     		
     		$.ajax({
             	 type: 'POST',	
             	 url: 'echoServer.php',	
     
                 data: {target: editor.getValue()},
                 success: function(result,status,xhr) {
                 
                 $("#autosave").html("AutoSaved");
                // alert( "" + $("#cont").val());
             },
                 error: function(result,status,xhr){
                 //alert(ts.responseText);
                 $("#autosave").html("AutoSaving Error");
                 }
             });
             
             },5000); 
        });
*/    
});

