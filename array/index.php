<?php

$a[1] = "A";
$a['001'] = "B";
$a['name'] = "mack";
$a['parent_name'] = "mack";
//$a='cdef';
echo "<pre>";
print_r($a);
echo "</pre>";


$b[] = "B";
$b[] = "C";
$b[] = "D";
$b[] = "E";
$b[] = "F";
echo "<pre>";
print_r($b);
echo "</pre>";

$c = ["A", "B", 'C'];
$c[] = "D";
$c['total'] = 4;
$c[] = "E";
$c['total'] = 5;
echo "<pre>";
print_r($c);
echo "</pre>";

echo $a[1];
echo $a['001'];
echo $a['name'];
echo $a['parent_name'];
echo "<br>";
echo $b[0];
echo "<br>";
echo $c[2];
echo "<br>";
#陣列一些函數用法
if (is_array($a)) {
    echo "是陣列";         
} else {
    echo "不是陣列";
}
echo "<br>";
if (in_array("D", $c)) {
    echo "D 在陣列中";
} else {
    echo "D 不在陣列中";
}

$d = [12, 9, 30, 21, 77, 3];

echo "<pre>";
print_r($d);
echo "</pre>";

sort($d);

echo "<pre>";
print_r($d);
echo "</pre>";

rsort($d); 

echo "<pre>";
print_r($d);
echo "</pre>";


$fill = array_fill(3,7,'babala');  #在陣列中填滿某一值
echo "<pre>";
print_r($fill);
echo "</pre>";

echo array_search(9,$d); #在陣列中尋找某一值，多維陣列可能找不到
echo $d[4];

$keys=array_keys($d);    #將keys或index取出為一個陣列

echo "<pre>";
print_r($keys);
echo "</pre>";

$merge = array_merge($a,$b);   #陣列合併
echo "<pre>";
print_r($merge);
echo "</pre>";

#陣列只能在記憶體中存在，無法直接存在資料庫內
#序列化，只能存在記憶體內的物件,轉變為字串或電腦可接受的資料型態，以便存在資料庫

$seA = serialize($a); #序列化
echo $seA;
echo "<br>";
echo "<pre>";
print_r($seA);
echo "</pre>";

$ueA = unserialize($seA);  #反序列化
echo "<br>";
echo "<pre>";
print_r($ueA);
echo "</pre>";

$s=implode(',',$a);       #陣列轉字串
$array=explode(',',$s);   #字串轉陣列
echo "<br>";
echo $s;

echo "<br>";
echo "<pre>";
print_r($array);
echo "</pre>";