<style>
    table{
        border-collapse: collapse;
    }
    td{
        border:1px solid gray;
        padding:5px 10px;
    }
</style>
<h2>月曆</h2>
<?php
$today=strtotime("now");                        #現在秒數
$month=date("n",$today);                        #取出目前月份
$days=date("t",$today);                         #取出月份天數
$firstDate=date("Y-n-1",$today);                #顯示第一天的日期
$finalDate=date("Y-n-t",$today);                #顯是最後一天的日期
$firstDateWeek=date("w",strtotime($firstDate)); #第一週星期幾
$finalDateWeek=date("w",strtotime($finalDate)); #最一週星期幾
$weeks=ceil(($days+$firstDateWeek)/7);          #要隔多少週
$firstWeekSpace=$firstDateWeek-1;               #6-1,第一週第一天會是6所以6-1
echo "月:".$month;
echo "<br>";
echo "天數:".$days;
echo "<br>";
echo "第1天:".$firstDate;
echo "<br>";
echo "最後1天:".$finalDate;
echo "<br>";
echo "第1天星期:".$firstDateWeek;
echo "<br>";
echo "最後1天星期:".$finalDateWeek;
echo "<br>";
echo "周數:".$weeks;
echo "<br>";

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<$weeks;$i++){                          #第幾週
    echo "<tr>";
    for($j=0;$j<7;$j++){                           #每週第幾天
        echo "<td>";
        if($i==0){
            if($j<$firstDateWeek){                  #填入第一週空白或日期
                echo "&nbsp;";
            }else{
                echo $j+7*$i-$firstWeekSpace;       #填日期
            }
        }else if($i==$weeks-1){                     #最後一週
            if($j>$finalDateWeek){                  #填入最後一週空白
                echo "&nbsp;";
            }else{
                echo $j+7*$i-$firstWeekSpace;      #填入最後一週日期   
            }
        }else{
            echo $j+7*$i-$firstWeekSpace;            #都不是，就填日期
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";