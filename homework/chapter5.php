<!-- 第5章實作題 -->
<?php
// <!-- 第5-1題 -->
// $check_money = 1000;
// $spent_money1 = 900;
// $spent_money2 = 1500;
// $spent_money3 = 2300;
// $Discount = 0.8;
// if($spent_money1 > $check_money){$spent_money1 = $spent_money1 * $Discount;}
// if($spent_money2 > $check_money){$spent_money2 = $spent_money2 * $Discount;}
// if($spent_money3 > $check_money){$spent_money3 = $spent_money3 * $Discount;}
// echo "$spent_money1<br>";
// echo "$spent_money2<br>";
// echo "$spent_money3<br>";

// 第5-2題
// $hight = 90;
// $hight_str = '';
// if($hight>120){
//     $hight_str = '' . 'A';

// }elseif($hight>=100 and $hight <= 120){
//     $hight_str = '' . 'B';
// }else{
//     $hight_str = '' . 'C';
// }

// switch($hight_str){
//     case  'A':
//         echo "全票<br>";
//         break;
//     case  'B':
//         echo "半票<br>";
//         break;
//     case  'C':
//         echo "免費<br>";   
//         break;
// }

// 第5-3題

// $total_money=0;
// $base_money=199;
// $weight = 3.5;

// if($weight<=5){
//     $total_money = ($weight * 50) + $base_money;
// }else{
//     $total_money = ($weight * 30) + $base_money;
// }
// echo "$total_money 元<br>";

// 第5-4題
// $sum = 0;
// for($i=1;$i<101;$i++){
//     if($i>35 and $i<55){
//         if($i%2 == 1 ){
//             $sum += $i;
//             echo "$i" .' ';
//         }
//     }
// }
// echo "<br>總和:$sum";

// 第5-5題
// $long = 170;
// $count = 0;
// while($long > 20){
//     $long /= 2;
//     $count += 1;
// }
// echo "對折了$count 次";

//第5-6題
// $money = 10000;
// $years = 5;
// $rate = 0.025;
// while($years >= 0){
//     $money = $money * (1 + $rate);
//     $years -= 1;
// }
// echo "5年的本利和為:$money";


//第5-7題
//(do/while)和while用$i += 4 會多執行一次
// echo "for 使用：";
// for($i=0;$i<101;$i += 4){
//     echo "$i" .' ';
// }
// echo "<br>";
// $i=null;
// echo 'do/while使用:';
// $i = 0;
// do{
//     if($i%4 == 0){
//         echo "$i" .' ';
//         }
//         $i += 1;

// }while($i<101);

// echo "<br>";
// $i=null;
// echo 'while使用:';
// $i = 0;
// while($i<101){
//     if($i%4 == 0){
//     echo "$i" .' ';
//     }
//     $i += 1;
// }

// 第 5-8題
// echo "for 使用：<br>";
// for($i=1;$i<=9;$i++){
//     for($j=1;$j<=9;$j++){
//         echo "  $i * $j =" .($i*$j);
//     }
//     echo "<br>";
// }
// echo "<br>";
// $i=null;
// $j=null;
// echo 'do/while使用:<br>';
// $i = 1;
// $j = 1;
// do{
//     do{
//         echo "  $i * $j =" .($i*$j);
//         $j+=1;
//     }while($j<=9);
//     $j = 1;
//     echo "<br>";
//     $i+=1;
// }while($i<=9);

// echo "<br>";
// $i=null;
// $j=null;
// echo 'while使用:<br>';
// $i = 1;
// $j = 1;
// while($i<=9){
//     while($j<=9){
//         echo "  $i * $j =" .($i*$j);
//         $j+=1;
//     }
//     $j = 1;
//     echo "<br>";
//     $i+=1;
// }