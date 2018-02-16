<?php
//9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
echo "<br>";



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Functions</title>
</head>

<body>

<form method="POST">
    <label>Введите текст: <p><textarea rows="10" name="text"/></textarea></p></label><br>
	<input type='submit' name='submit' value='Перевернуть строку'><br>
</form>

</body>
</html>

<?php
if ($_POST['submit']) {
    $text = $_POST['text'];
	$res = revers($text);
}
/*function revers($arg) {
	$arr = str_split($arg);
	$arr = array_reverse($arr);
	return implode('', $arr);}*/
	
	function revers($arg) { //для кириллицы
		$res = '';
		for ($i = 0; $i < mb_strlen($arg); $i++) {
        $res = mb_substr($arg, $i, 1).$res;
		}
	return $res;
	}

echo "<b>Было:</b>$text <br> 
<b>Стало:</b> $res ";  