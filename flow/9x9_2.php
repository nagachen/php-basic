<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            width: 85%;
            margin: auto;
            box-shadow: 0 0 10px #999;
            border: 1px solid #333;
        }
        td{
            border:1px solid #00ff00;
        }
        td:nth-child(1),tr:nth-child(1){
            background-color: #999;
        }
    </style>
</head>

<body>
    <?php
    #老師的解法比較好
    echo '<table>';
    for ($i = 0; $i <= 9; $i++) {
        echo '<tr>';
        if($i == 0 ){
            echo "<td></td>";    
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>$j</td>";
        } }else {
            echo "<td>$i</td>";
            $j=null;
            for($j = 1; $j <= 9; $j++){
                $result = $i * $j;
                if($i >=$j){  #上下顯示
                
                echo "<td>$result</td>";
            }else{ echo '<td> </td>';}
            }
        }
        echo "</tr>";
        
    }   
    
    echo '</table>';
    ?>

</body>

</html>