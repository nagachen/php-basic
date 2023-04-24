<h3>字串分割</h3>
<h3>將"this,is,a,boo"依','切割成陣列</h3>
<?php
$str="this,is,a,book";
$result=explode(",",$str);
echo"<pre>";
print_r($result);
echo"</pre>";
?>
<h3>字串組合</h3>
<h4>將上例陣列重新組合成”this is a book"</h4>
<?php
echo join(" ",$result);
echo "<br>";