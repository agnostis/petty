<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pet projects</title>
</head>
<body>
<?php
if (!empty($_POST)) {
    $word = $_POST['eng'] != NULL ? str_split($_POST['eng']) : preg_split('//u', $_POST['rus'], -1, PREG_SPLIT_NO_EMPTY);
    $word = change($word);
}
function change($array){
    $eng = "?& qwertyuiop[]asdfghjkl;'zxcvbnm,./";
    $rus = ",? йцукенгшщзхъфывапролджэячсмитьбю.";
    $engArray = str_split($eng);
    $rusArray = preg_split('//u', $rus, -1, PREG_SPLIT_NO_EMPTY);
    $word = [];
    $count = 0;
    for ($i = 0; $i <= count($array); $i++) {
        for ($j = $i; $j <= count($rusArray); $j++) {
            if ($array[$i] == $engArray[$count]) {
                unset($_POST);
                $_POST['eng'] = 'a';
                array_push($word, $rusArray[$count]);
                $count = 0;
                break;
            }
            if ($array[$i] == $rusArray[$count]) {
                unset($_POST);
                $_POST['rus'] = 'a';
                array_push($word, $engArray[$count]);
                $count = 0;
                break;
            }
            $count++;
        }
    }
    return $word;
}
?>
<form action="key_layout.php" method="post">
    <textarea name="eng" rows="4" cols="50" placeholder="Input ENG text"><?php
        if (isset($_POST['rus'])){
            echo implode($word);
        }
        ?></textarea>
    <textarea name="rus" rows="4" cols="50" placeholder="Input RUS text"><?php
        if (isset($_POST['eng'])){
            echo implode($word);
        }
        ?></textarea>
    </br>
    <button>Change</button>
</form>
</body>
</html>