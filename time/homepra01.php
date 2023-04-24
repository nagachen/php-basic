<h2>利用迴圈來計算連續五個周一的日期</h2>
<h3>例:</h3>
<ul>
<li>2023-05-03 星期三</li>
<li>2023-05-10 星期三</li>
<li>2023-05-17 星期三</li>
<li>2023-05-24 星期三</li>
<li>2023-05-31 星期三</li>
<br>
<?php

$now=strtotime('now');#取得當前時間秒數
echo $now;
echo"<br>";
$today = date('Y-m-d',$now);#取得當前日期
$week=date('w');            #取得今天星期幾？
$gap=3-$week;               #確定和星期三差幾天？
$wensday=strtotime("$gap day",$now); #將日期調整到星期三
echo $today;
echo"<br>";
echo $week;
echo"<br>";
//echo date('Y-m-d',$wensday);
echo"<br>";
for($i=0;$i<5;$i++){    #顯示5個週三的日期
    $nextwensday=strtotime("$i week",$wensday);
    echo date('Y-m-d',$nextwensday);
    echo "<br>";
} 