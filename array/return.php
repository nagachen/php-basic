<?php
// 反轉陣列
$a=[2,4,6,1,8];
echo "<pre>";
echo "原陣列:<br>";
print_r($a);
echo "</pre>";
$times=ceil(count($a)/2);
$maxIndex=count($a)-1;
for($i=0;$i<$times;$i++){
    $tmp=$a[$i];
    $a[$i]=$a[$maxIndex-$i];
    $a[$maxIndex-$i]=$tmp;
}

echo "<pre>";
echo "原陣列:<br>";
print_r($a);
echo "</pre>";



