<?php
//2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
echo "<br>";

// что то очень сложно получилось может можно проще?
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Functions</title>
</head>

<body>

<form method="POST">
    <label>Введите текст: <p><textarea rows="10" name="a"/></textarea></p></label><br>
    <input type='submit' name='count' value='Сравнить'><br>
    <input type="reset" name='reset' value='Отменить'>
</form>

</body>
</html>

<?php
$res = " ";
if ($_POST['count']) {
    $a = $_POST['a'];
    $res = implode(", ", longWords($a));
}

function maxi ($arr) {
	$max = '';
	foreach ($arr as $k=>$v) {
		if (strlen($v) > strlen($max)) {
			$max = $v;
		} 
	}
	return $max;
}

function longWords($a) {
    $arr_a = explode(" ", $a);
	$max = [];
    for ($i=0; $i<3; $i++) {
		$max[$i] = maxi($arr_a);
		foreach ($arr_a as $k=>$v) {
			if ($max[$i] == $v) unset ($arr_a[$k]);
		}
	}
	return $max;
}
echo "В тексте: <br> 
$a <br> 
три самых длинных слова: <b>$res</b>";


