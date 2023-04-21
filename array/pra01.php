<!-- 陣列練習 -->
<style>
    table{
        font-size: 20px;
        border: 3px solid #ccc;
        border-collapse: collapse;
    }
    td{
        border: 1px solid #ccc;
    }
</style>


<?php
#陣列練習
$students=[
    'judy'=>['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84,],
    'amo'=>['國文'=>88,'英文'=>78,'數學'=>54,'地理'=>81,'歷史'=>71,],
    'john'=>['國文'=>45,'英文'=>60,'數學'=>68,'地理'=>70,'歷史'=>62,],
    'peter'=>['國文'=>59,'英文'=>32,'數學'=>77,'地理'=>54,'歷史'=>42,],
    'hebe'=>['國文'=>71,'英文'=>62,'數學'=>80,'地理'=>62,'歷史'=>64,],
    

];
echo '<table>';
echo "<tr><td></td>";
echo "<td>國文</td>";
echo "<td>英文</td>";
echo "<td>數學</td>";
echo "<td>地理</td>";
echo "<td>歷史</td></tr>";
foreach($students as $stu => $scores){
    echo"<tr>";
    echo "<td>$stu</td>";
    
    foreach($scores as $sub => $score){
        echo "<td>$score</td>";   
    }
    echo"</tr>";
}
echo '</table>';

?>