<?php

// 流程控制//
//多重巢狀迴圈
$score = 61;

if ($score >= 90){
    $level =  "A";
}else if($score >= 80){
    $level =  "B";
}else if($score >= 70){
    $level =  "C";
}else if($score >= 60){
    $level =  "D";
}else{
    $level =  "E";
}
echo "<hr>";
echo "成績等級為:$level";
echo "<hr>";

