<?php
//7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>book</title>
</head>

<body>
<h1>Гостевая книга</h1>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$mes = $_POST['mes'];
	$name = htmlspecialchars(trim($name));
	$mes = htmlspecialchars(trim($mes));
	$date = [$name, '<br>', $mes, '<br>', date("d-m-y H:i"), '<br>', '<br>'];
	file_put_contents("mes.txt", $date, FILE_APPEND);
}
$cont = @file_get_contents("mes.txt");

echo $cont;
?>

<h3>Добавьте Ваши комментарии:</h3>
<form method="POST" enctype="multipart/form-data">
     <label>Введите текст: <p><textarea rows="10" cols="30" name="mes"/></textarea></p></label>
	 <label>Ваше имя:<br> <input type='text' name='name' ></label><br><br>
    <input type='submit' name='count' value='Загрузить'><br>
</form>
</body>

</html>