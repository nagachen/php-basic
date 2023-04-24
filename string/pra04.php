<h3>尋找字串HTML、CSS整合應用</h3>
<h4>
<ul>
    <li>給定一個句字，將指定的關鍵字放大</li>
    <li>學會php網頁程式設計，薪水會加倍，工作會好找</li>
    <li>請將上句中的"程式設計“放大字型或變色</li>
</ul>
</h4>
<br>
<?php
#方法1
$str="學會php網頁程式設計，薪水會加倍，工作會好找";
$target="程式設計";
$replace="<span style='font-size:32px;color:red'>$target</span>";
echo str_replace($target,$replace,$str);
echo"<br>";
#方法2
$split=explode($target,$str);
echo "<pre>";
print_r($split);
echo"</pre>";
echo join($replace,$split);



?>
