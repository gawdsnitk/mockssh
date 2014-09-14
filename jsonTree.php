<?php
$a= array();	
function listAllDir($path,$i,$parent,$a)
{
global $a;
$d = @opendir($path);
//echo $d;
//echo "<ul><li>";
//$array()=0;
$dirname = end(explode("/",$path));


$a['tree'.$i]['id'] = "$i";
$a['tree'.$i]['parent'] = "$parent";	
$a['tree'.$i]['text'] = "$dirname";
//echo "$dirname<ul>";
while(false !== ($f=readdir($d)))
{
        if($f== "." || $f=="..")
        continue;
        else
        {

                //echo "<li><p>&nbsp$f</p></li>"; 
                if(is_dir($path."/".$f))
                {
	
       //         echo "<li id='child_node_1'>";
                listAllDir($path."/".$f,$i+1,$parent,$a);
                }
                else
                {
         		$a['tree'.$i]['id'] = "$i";
			$a['tree'.$i]['parent'] = "$i";	
			$a['tree'.$i]['text'] = "$f";
       
                }
        }
        

}
closedir($d);

//echo "</ul></li></ul>";


}

//$a[3] = "HI";
listAllDir(".",1,0,$a);
//$b=array();
//xyz();
echo json_encode($a);
?>
