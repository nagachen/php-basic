<style>
    *{
        font-family: 'Courier New','';
    }
</style>

<h3> 直角三角形</h3>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<h3>倒直角三角形</h3>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<(5-$i);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<h3>正三角形</h3>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    
    echo "<br>";
}
?>
<h3>菱形第一種寫法</h3>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    
    echo "<br>";
}
for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<((3-$i)*2+1);$k++){
        echo "*";
    }
    
    echo "<br>";
}
?>
<h3>菱形第二種寫法</h3>
<?php
$n=18;
$n=($n%2==0)?$n+1:$n; #讓n為奇數
$tmp=0;               #設一個變數tmp
for($i=0;$i<$n;$i++){
    // if($i<$n){   #判斷i > n/2時，tmp數值回轉的算法
    //     $tmp=$i;
    // }else{
    //     $tmp= 8-$i;#也可以用 $tmp = $tmp -1
    // }
    #三元寫法: $tmp=($i<5)?$i:8-$i;
    $tmp=($i<ceil($n/2))?$i:$n-1-$i;#判斷i > n/2時，tmp數值回轉的算法(三元運算)

    for($j=0;$j<(ceil($n/2)-1-$tmp);$j++){#計算要印多少空格
        echo "&nbsp;";
    }
    for($k=0;$k<($tmp*2+1);$k++){ #計算印多少星星
        echo "*";
    }
    
    echo "<br>";

}
?>
<h3>矩形</h3>
<?php
$n=13;
for($i=0;$i<$n;$i++){

    for($j=0;$j<$n;$j++){
        if($i == 0 || $i ==($n-1)){
        echo"*";
        }else if($j==0 || $j==$n-1){
                echo "*";
            
        }else{
            echo "&nbsp;";
        }
    }
    echo"<br>";
}
?>
<h3>矩形2</h3>
<?php
$n=13;
for($i=0;$i<$n;$i++){

    for($j=0;$j<$n;$j++){
        
        if(($i == 0 || $i ==($n-1))||($i==$j || $i==$n-1-$j)){
        echo"*";
        }else if($j==0 || $j==$n-1){
                echo "*";
            
        }else{
            echo "&nbsp;";
        }
    }
    echo"<br>";
}
?>