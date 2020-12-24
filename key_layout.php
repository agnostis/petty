<!DOCTYPE html>
<<<<<<< HEAD
<head>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
>>>>>>> 192542fac1b3a1295f76c5957c27d385d1fa93f2
    <link href="style.css" rel="stylesheet">
    <title>Pet projects</title>
</head>
<body>
<?php
<<<<<<< HEAD

if (!empty($_POST)) {
    $word = $_POST['eng'] != NULL ? str_split($_POST['eng']) : preg_split('//u', $_POST['rus'], -1, PREG_SPLIT_NO_EMPTY);
    $word = change($word);
}
function change($array){
    $eng = "?& qwertyuiop[]asdfghjkl;'zxcvbnm,./";
    $rus = ",? йцукенгшщзхъфывапролджэячсмитьбю.";
    $engArray = str_split($eng);
    $rusArray= preg_split('//u', $rus, -1, PREG_SPLIT_NO_EMPTY);
    $word = [];
    $count = 0;
    for ($i = 0; $i <= count($array); $i++) {
        for ($j = $i; $j <= count($rusArray); $j++){
            if ($array[$i] == $engArray[$count]) {
                unset($_POST);
                $_POST['eng'] = 'a';
                array_push($word,$rusArray[$count]);
                $count = 0;
                break;
            }
            if ($array[$i] == $rusArray[$count]) {
                unset($_POST);
                $_POST['rus'] = 'a';
                array_push($word,$engArray[$count]);
=======
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
>>>>>>> 192542fac1b3a1295f76c5957c27d385d1fa93f2
                $count = 0;
                break;
            }
            $count++;
        }
    }
<<<<<<< HEAD
    return $word;
}
?>
<form action="key_layout.php" method="post">
    <textarea name="eng" rows="4" cols="50" placeholder="Input ENG text"><?php if (isset($_POST['rus'])){
        echo implode($word);
        }?></textarea>
=======
}
?>
<form action="key_layout.php" method="post">
    <textarea name="eng" rows="4" cols="50" placeholder="Input ENG text"></textarea>
>>>>>>> 192542fac1b3a1295f76c5957c27d385d1fa93f2
    </br>
    <button>Change from ENG to RUS</button>
    </br>
    </br>
<<<<<<< HEAD
    <textarea name="rus" rows="4" cols="50" placeholder="Input RUS text"><?php if (isset($_POST['eng'])){
=======
    <textarea name="rus" rows="4" cols="50" placeholder="Input RUS text"><?php if ($_POST['eng'] != NULL){
>>>>>>> 192542fac1b3a1295f76c5957c27d385d1fa93f2
        echo implode($word);
        }?></textarea><br/>
    <button>Change from RUS to ENG</button>
</form>
<<<<<<< HEAD
=======

>>>>>>> 192542fac1b3a1295f76c5957c27d385d1fa93f2
</body>
</html>
