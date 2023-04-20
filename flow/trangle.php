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
        
        if($j > $star1){
            echo "*";
        }else{
            echo "&nbsp&nbsp";
        } 
    }
    for($k=1;$k<5;$k++){
        
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

echo "第四題<br>";
$star1=5;//*號數量控制
$star2=0;

# i
for($i=1;$i<6;$i++){
    $star1 -= 1;
    $star2 += 1;
#j
    for($j=1;$j<6;$j++){
        
        if($j > $star1){
            echo "*";
        }else{
            echo "&nbsp&nbsp";
        } 
    }
#k
    for($k=1;$k<5;$k++){
        
        if($k < $star2){
            echo "*";
        }else{
            echo "&nbsp&nbsp";
        } 
    }
    echo "<br>";
}
#下半部份
$star3=0;
$star4=4;
#c  
for($c=1;$c<5;$c++){
    $star3 += 1;
    $star4 -= 1;
    
#m
    
    for($m=1;$m<6;$m++){
        
        if($m > $star3){
            echo "*";
        }else{
            echo "&nbsp&nbsp";
        } 
    }
#N
    for($n=1;$n<4;$n++){
        echo $n;
        if($n < $star4){
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
$m = null;
$n = null;
$star1 = null;
$star2 = null;
$star3 = null;
$star4 = null;
echo "<br>";
echo "<br>";