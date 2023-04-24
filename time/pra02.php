<h2>利用迴圈來計算連續五個周一的日期</h2>
<h3>例:</h3>
<ul>
<li>2021-10-04 星期一</li>
<li>2021-10-11 星期一</li>
<li>2021-10-18 星期一</li>
<li>2021-10-25 星期一</li>
<li>2021-11-01 星期一</li>
</ul>
<br>
<?php
$today=strtotime('now');
$week=date("N",$today);
$gap=1-$week; #0~-6 1是定出星期一，gap是和星期一差幾天
$seconds=strtotime("$gap days",$today); #代入$gap，可得上週或本週一的時間秒數,  
$monday=date("Y-m-d l",$seconds);#得出星期一日期
echo $monday;
echo"<br>";
echo $seconds;
#得出5個星期一
for($i=0;$i<5;$i++){
    echo date("Y-m-d l",strtotime("+$i week",$seconds));
    echo "<br>";
}


?>