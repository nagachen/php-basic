<?php

// 流程控制//
#if(條件式){
// True的結果
#}else{
//False的結果
//else 不一定要寫

// $score = 70;
// if 範例
// if($score>60){
//     echo "成績=" .$score;
//     echo "<br>";
//     echo "恭喜及格了";
// }else{
//     echo "成績=" .$score;
//     echo "<br>";
//     echo "再接再勵";
// }
//switch case範例
echo "<hr>";
$level = "A";
switch ($level) {
    case "A":
        echo "表現優良，請繼續保持";
        break;
    case "B":
        echo "值得肯定，還有進步空間";
        break;
    case "C":
        echo "需要更多的練習";
        break;
    case "D":
        echo "需要加強基本功";
        break;
    default:
        echo "是否無心學業？";
}

// 斷行
// print('<H2>1234566788129887431943'.
//         '123331414141</H2>');
