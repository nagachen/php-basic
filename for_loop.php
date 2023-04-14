<?php
//1 3 5 7 9
$n = 21;
//用方程式找出x ,(X * 2-1)<=20
//(x*2-1)<=20
// 2x - 1 <= 20
// 2x <= 20 - 1
// 2x <= 19
// x <=10.5
//使用floor()或ceil()取出一個整數
$limit = ceil($n / 2);
//$limt = floor()取小數點最小的地方
//$limt = ceil()取小數點最大的地方
for ($i = 1; $i < $limit; $i++) {
    echo $i * 2 + 1;
    echo " ";
}
// 10 20 30 ... n
$n = 10;
echo '$i=' . $i;
echo '<br>';
for ($i = 1; $i < $n; $i++) {
    echo $i * 10;
    echo " ";
}
echo '$i=' . $i;

//3,5,7,11,13,17...找出100內的質數
$n = 97;
$check = false;
echo '<br>';
for ($i = 2; $i < $n; $i++) {
    $check = false;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $check = true;
            break;
        }
    }
    if ($check == false) {
        echo $i . '是質數';
        echo " ";
    }
}
echo "i=" . $i;