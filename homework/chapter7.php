<?php
//第7-1題
$num=[];
$total=0;
for($i=0;$i<16;$i++){
    $num[]=$i;
}
print_r($num);
echo"<br>";

foreach($num as $i){
    $total += $i;
}
echo $total;
echo"<br>";
$num = null;
$total = null;

//第7-2題
$grades=[95,85,76,56];
$total=0;
print_r($grades);
echo"<br>";

foreach($grades as $i){
    $total += $i;
}
echo $total;
echo"<br>";
$total = null;

//第7-4題
$students=['姓名'=>['成績1','成績2'],
    '陳會安(Joe}'=>['成績1'=>88,'成績2'=>58],
    '江小魚(Jane)'=>['成績1'=>75,'成績2'=>67],
    '小龍女(Mary)'=>['成績1'=>46,'成績2'=>94],   
];

echo"<table>";
foreach ($students as $stu => $score){
    echo "<tr>";
    echo "<td>$stu</td>";
    foreach($score as $sc){
        echo "<td>$sc</td>";

    }
    echo "</tr>";
}

//第7-5題
print("<br>");
$str='PHP Programming';
echo strlen($str);
echo"<br>";
print(strpos($str,"r"));
echo"<br>";
print($str);
echo"<br>";
echo(strrev($str));
echo"<br>";
echo substr($str,3,6);
?>