<!-- * 三角形第一題 -->
<?php
for($i=1;$i < 6;$i++){

    for($j=1;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}
$i = null;
$j = null;
echo "<br>";
echo "<br>";


//  * 三角形第二題 
$star=0; 
for($i=1;$i < 6;$i++){

    for($j=1;$j<6;$j++){
        echo "$j";
        if($star<$j){
            echo "*";
        }else{
            echo " ";
        }
        $star += 1;
    }
    echo "<br>";
}
$i = null;
$j = null;
