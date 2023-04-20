<?php
#將for 改成while
// for($i=3;$i<=97;$i++){
//     $check=false;
//     for($j=2;$j<$i;$j++){
    
//         if($i%$j==0){
//             $check=true;
//             break;
//         }
//     }
    
//     if($check==false){
//         echo $i . ",";
//     }
// }

$n=97;

while($i<97){
    $check=false;
    $j=2;
    while($j<$i){
        if($i%$j==0){
            $check=true;
            break;
        }
        $j++;
    }
    if($check==false){
        echo $i . ",";
    }
    
}

