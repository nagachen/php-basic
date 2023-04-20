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
        }
        td{
            border:2px solid #999;
        }
    </style>
</head>

<body>
    <?php
    echo '<table>';
    for ($i = 1; $i <= 9; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 9; $j++) {
            echo "<td> $j x $i = </td>";
            $result = $j * $i;
            echo "<td>$result</td>";
               
        }
        echo "</tr>";
        
        
    }
    echo '</table>';
    ?>

</body>

</html>