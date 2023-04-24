<h3>字串取代<h3>
<h4>將”aaddw1123“改成”*********“</h>
<br>
<?php

$str="afsdadfsdsdsa";
$star="*********";
echo $str;
echo"<br>";
echo $star;
echo"<br>";
echo str_replace(['a','d','w','1','2','3'],"*",$str);

// <!-- #輸入任意長度的字串，皆改變成對等長度的* -->
echo"<br>";
echo str_repeat("*",strlen($str));


?>