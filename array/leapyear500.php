<?php
echo "<h1>找出五百年內的閏年</h1>";
echo "2023~2523";
$years=[];

for($i=2023;$i<2523;$i++){

        #A                  #B                      #C   的放法，#C放前面要跑399次的FALSE
if(($i % 4 == 0) && ($i % 100 != 0) || ($i % 400 == 0)){
    
    $years[] = $i; 
}else{
    
}
}
foreach($years as $year){
    echo $year . "<br>";
}

$t=2350;
if(in_array($t,$years)){
    echo $t ."是閏年";
}else{
    echo $t."是平年";
}

echo "<br>";
if(array_search($t,$years)!=false){
    echo $t ."是閏年";
}else{
    echo $t."是平年";
}


?>