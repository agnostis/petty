<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Pet projects</title>
</head>
<body>
<?php
$eng = ['&','?',' ','q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', ';', '\'', 'z', 'x', 'c', 'v', 'b', 'n', 'm', ',', '.', ']'];
$rus = ['?',',',' ','й', 'ц', 'у', 'к', 'е', 'н', 'г', 'ш', 'щ', 'з', 'ф', 'ы', 'в', 'а', 'п', 'р', 'о', 'л', 'д', 'ж', 'э', 'я', 'ч', 'с', 'м', 'и', 'т', 'ь', 'б', 'ю', 'ъ'];
$count = 0;
$word = [];
if ($_POST['eng'] != NULL) {
    $array = str_split($_POST['eng']);
    for ($i = 0; $i <= count($array); $i++) {
        for ($j = $i; $j <= count($eng); $j++){
            if ($array[$i] == $eng[$count]) {;
                array_push($word,$rus[$count]);
                $count = 0;
                break;
            }
            $count++;
        }
    }
}
?>
<form action="key_layout.php" method="post">
    <textarea name="eng" rows="4" cols="50" placeholder="Input ENG text"></textarea>
    </br>
    <button>Change from ENG to RUS</button>
    </br>
    </br>
    <textarea name="rus" rows="4" cols="50" placeholder="Input RUS text"><?php if ($_POST['eng'] != NULL){
        echo implode($word);
        }?></textarea><br/>
    <button>Change from RUS to ENG</button>
</form>

</body>
</html>
