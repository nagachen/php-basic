<?php
//1 3 5 7 9
for($i=1;$i<10;$i= $i+2){
    echo $i;
    echo " ";
}
// 10 20 30 ... n
echo '$i=' .$i;
echo '<br>';
for($i=1;$i<10;$i++){
    echo $i*10;
    echo " ";
}
echo '$i=' .$i;

//3,5,7,11,13,17...找出100內的質數
echo '<br>';
for($i=1;$i < 100;$i++){
    if($i % 2 != 0){
        echo "$i";
    echo ' ';
    }   
}
echo "i=" .$i;