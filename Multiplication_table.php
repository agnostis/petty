<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Pet projects</title>
</head>
<body>
    <table>
        <?php for ($i = 0; $i <= 10; $i++){
            echo '<tr>';
            for ($j = 1; $j <= 10; $j++){
                if ($i == 0){
                    echo '<td align="center">'.$j.'</td>';
                    continue;
                }
                echo '<td>'.$j .' * '. $i .' = '.$j*$i.'</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>