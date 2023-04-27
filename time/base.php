<h2>時間和日期</h2>
<?php
date_default_timezone_set("Asia/Taipei");
echo date("Y-m-d H:i:s"); 
echo"<br>";

echo "現在的秒數:" .strtotime("2020-09-08"); #顯示秒數
echo"<br>";
$yestoday =strtotime("now") - (60 * 60 * 24);
echo "昨天的秒數:".$yestoday;
echo"<br>";
echo date("Y-m-d H:i:s",$yestoday);#將$yeatoday代入date()上顯示
// https://www.php.net/manual/zh/datetime.format.php 日期參數對照表

echo"<br>";
$today=strtotime("now");
echo"現在的時間：".$today."秒";
echo"<br>";
echo "可讀性的日期字串:".date("Y-m-d H:i:s",$today);
$tomorrow=strtotime("+1 day",$today);
echo "<br>";
echo "明天:".date("Y-m-d H:i:s",$tomorrow);
echo "<br>";
echo "昨天".date("Y-m-d H:i:s",$yestoday);
echo "<br>";
$nextWeek=strtotime("+1 week",$today);
$lastWeek=strtotime("+1 week",$today);
echo "下一週:".date("Y-m-d H:i:s",$nextWeek);
echo "<br>";
echo "上一週".date("Y-m-d H:i:s",$lastWeek);
echo "<br>";
echo strtotime('2023-04-24');
echo"<br>";


