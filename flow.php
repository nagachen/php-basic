<?php

// 流程控制//
#if(條件式){
// True的結果
#}else{
//False的結果
//else 不一定要寫
//if 範例
$score = 70;

if($score>60){
    echo "成績=" .$score;
    echo "<br>";
    echo "恭喜及格了";
}else{
    echo "成績=" .$score;
    echo "<br>";
    echo "再接再勵";
}
