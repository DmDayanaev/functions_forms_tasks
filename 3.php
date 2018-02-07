<?php
//3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
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
	<label>Ограничение по количеству символов: <p><input type='text' name="limit"/></label><br>
    <input type='submit' name='submit' value='Отправить'><br>
    <input type="reset" name='reset' value='Отменить'>
</form>

</body>
</html>

<?php
if ($_POST['submit']) {
    $text = $_POST['text'];
	$limit =  (integer)($_POST['limit']);
	$res = del($text, $limit);
}

function del($val, $lim) {
	$arr = explode(' ', $val);
	foreach ($arr as $k=>$v) {
		if (mb_strlen($v) > $lim) unset ($arr[$k]);
	}
	$res = implode(" ", $arr);
	return $res;
	
}
echo "<b>От текста:</b> <br> 
$text <br> 
<b>осталось вот что:</b><br>
$res";
