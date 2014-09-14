<?php
function listAllDir($path)
{
$d = @opendir($path);
//echo $d;
echo "<ul><li>";
$dirname = end(explode("/",$path));
echo "$dirname<ul>";
while(false !== ($f=readdir($d)))
{
        if($f== "." || $f=="..")
        continue;
        else
        {

                //echo "<li><p>&nbsp$f</p></li>"; 
                if(is_dir($path."/".$f))
                {
                echo "<li id='child_node_1'> $f";
                listAllDir($path."/".$f);
                }
                else
                echo 	"<li>$f</li>";
                echo "</li>";
        }
        

}

echo "</ul></li></ul>";
closedir($d);

}
?>
