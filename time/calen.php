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
#目前問題：
#1.td背景色的使用，而不影響其他日期
#2.休假日的判定，是不是可以和國定假日六，用同一種判定方法，再統一填色？
#3.第一週和最後一週將日期（上個月和下個月的日期填入，並以虛線顯示）
#4.年和月切換的按鈕制作，（未教）
$show_year=2024;                                #模擬輸入年份
$show_month=2;                                 #模擬輸入月份
$show_day=strtotime("$show_year-$show_month");  #模擬日數預設為1日

// echo"<br>";
// echo$show_day;
// $today=strtotime("now");                        #現在秒數
// $month=date("n",$today);                        #取出目前月份
$days=date("t",$show_day);                         #取出月份天數
$firstDate=date("Y-n-1",$show_day);                #顯示第一天的日期
$finalDate=date("Y-n-t",$show_day);                #顯是最後一天的日期
$firstDateWeek=date("w",strtotime($firstDate)); #第一週星期幾
$finalDateWeek=date("w",strtotime($finalDate)); #最一週星期幾
$weeks=ceil(($days+$firstDateWeek)/7);          #要隔多少週
$firstWeekSpace=$firstDateWeek-1;               #6-1,第一週第一天會是6所以6-1
echo "月:".$show_month;
echo "<br>";
echo "天數:".$show_day;
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
for($i=0;$i<$weeks;$i++){          #形成月歷
    echo "<tr>";
    for($j=0;$j<7;$j++){                           #每週第幾天
        echo "<td ";
        if($j==0 or $j==6){echo" style='background-color: rosybrown;'";}
        if(($i==0 && $j<$firstDateWeek) || ($i==$weeks-1 && $j>$finalDateWeek)){
                                                   #填入第一週或最後一週空白或日期
                echo "&nbsp;";           
        }else{
            $numbers=$j+7*$i-$firstWeekSpace;
            echo ">".$numbers;          #都不是，就填日期
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
