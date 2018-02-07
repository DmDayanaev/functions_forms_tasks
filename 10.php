<?php
//10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.
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
	<input type='submit' name='submit' value='Посчитать уникальные слова в тексте'><br>
</form>

</body>
</html>

<?php
if ($_POST['submit']) {
    $text = $_POST['text'];
	$res = county($text);
}
function county ($val) {
	$arr = explode(' ', $val);
	$arr = array_unique($arr);
	$result = count($arr);
	
	return $result;
}
echo "<b>В текстe:</b> <br> 
$text <br>
<b>$res уникальных слов.</b>";