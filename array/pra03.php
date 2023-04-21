<style>
    .area-1,.area-2{
        display: inline-block;
        width:35px;
        height: 35px;
        border: 1px solid #ccc;
        line-height: 33px;
        text-align: center;
        border-radius: 50%;
        margin: 0.5rem;
    }
    .area-1{
        background-color: #0f0;
    }
    .area-2{
        background-color: orange;
    }
</style>
<?php
echo "<hr>";
echo "<h1>威力彩選號</h1>";
$lotto = [];
while (count($lotto) < 6) {
    $tmp = rand(1, 38);
        // echo "亂數產生的數字：" .$tmp
    if (!in_array($tmp, $lotto)) {
        $lotto[] = $tmp;
        //echo "所存入的數字" .$tmp
    } else {
        //echo "重覆的數字" .$tmp
    }
}

foreach($lotto as $num){
    echo "<span class='area-1'>".$num .'</span>';
}
echo "<br>";
echo "<span class='area-2'>" .rand(1,8)."</span>";

// foreach ($lotto as $num) {
//     echo "<pre>";
//     echo $num;
//     echo "</pre>";
// }



?>