<!-- 陣列99乘法表 -->
<style>
    table{
        border: 2px solid blue;
        border-collapse: collapse;

    }
    tr,td{
        border: 2px solid blue;
    }
    </style>
<?php
$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[] = "$i x $j =" .$i * $j; 
    }
}

// echo "<pre>";
// print_r($nine);
// echo "</pre>";
echo "<table>";
foreach($nine as $k=>$str){
    if($k%9==0){
        echo"<tr>";
    }
    echo "<td>$str</td>";
    if($k%9==8){
        echo"</tr>";
    }
}
echo "</table>";