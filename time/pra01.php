<h2>給定兩個日期，計算中間間隔天數</h2>
<div>2023-4-24</div>
<div>2023-10-07</div>
<br>
<?php
$end=strtotime('2023-10-07');
$start=strtotime('2023-4-24');
$gap=$end - $start;
echo "距離".date('Y-m-d',$end). "還有" .$gap / (24 * 60 *60) ."天";
// 在在持定的幾天，會受日光節約時間影響，會有小數出現，
?>
<h2>計算距離自己下一次生日還有幾天</h2>
<?php
$birdthday=strtotime('2024-02-06');
$now=strtotime('now');
$gap=$birdthday - $now;
echo "距離".date('Y-m-d',$end). "還有" .$gap / (24 * 60 *60) ."天";
//另一個小技巧 由於有小數的存在
echo"<br>";
$now=strtotime(date('Y-m-d')); #今天00:00:00
$birdthday=strtotime('2024-02-06'); #當天00:00:00
$days=$birdthday - $now;
echo "距離".date('Y-m-d',$birdthday). "還有" .$days / (24 * 60 *60) ."天";
?>
<br>
<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ol>
<li>2023/4/24</li>
<li>4月24日 Monday</li>
<li>2023-04-24 14:9:5</li>
<li>2023-04-24 14:09:05</li>
<li>今天是西元2021年10月5日 上班日(或假日)</li>
</ol>
<?php
date_default_timezone_set('Asia/Taipei');
$date1=strtotime('now');
echo date('Y/m/d',$date1);
echo"<br>";
echo date('n月j日l ',$date1);
echo"<br>";
echo date('Y-m-d G:',$date1) .(int)date("i") .":".(int)date("s"); #使用(int)強制轉換整數型態顯示
echo"<br>";
echo date('Y-m-d H:i:s',$date1);
echo"<br>";
echo"今天是西元" .date('Y年n月j日',$date1);
echo date("N")>=6?"是假日":"是工作日";
echo"<br>";



