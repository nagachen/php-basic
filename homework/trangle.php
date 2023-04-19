<?php
//第一題
echo "第一題<br>";
$star=0;//*號數量控制
for($i=1;$i<8;$i++){
    $star += 1;
    for($j=1;$j<8;$j++){
        if($j <= $star){
            echo "*";
        }    
    }
    echo "<br>";
}
$i = null;
$j = null;
$star = null;
echo "<br>";
echo "<br>";

//第2題
echo "第二題<br>";
$star=7;//*號數量控制
for($i=1;$i<8;$i++){
    $star -= 1;
    for($j=1;$j<8;$j++){
        if($j < $star){
            echo "*";
        }else{
            echo "&nbsp&nbsp";
        } 
    }
    echo "<br>";
}
$i = null;
$j = null;
$star = null;
echo "<br>";
echo "<br>";

echo "第三題<br>";
$star1=5;//*號數量控制
$star2=0;
for($i=1;$i<6;$i++){
    $star1 -= 1;
    $star2 += 1;
    for($j=1;$j<6;$j++){
        echo "$j";
        if($j > $star1){
            echo "*";
        }else{
            echo "&nbsp&nbsp";
        } 
    }
    for($k=1;$k<5;$k++){
        echo "$k";
        if($k < $star2){
            echo "*";
        }else{
            echo "&nbsp&nbsp";
        } 
    }
    echo "<br>";
}
$i = null;
$j = null;
$k = null;
$star1 = null;
$star2 =null;
echo "<br>";
echo "<br>";