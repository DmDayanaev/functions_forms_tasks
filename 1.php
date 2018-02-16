
<?php
//1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только
// те слова, которые есть и в первом и во втором поле ввода.Реализацию это логики необходимо поместить в функцию
// getCommonWords($a, $b), которая будет возвращать массив с общими словами.
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Functions</title>
</head>

<body>

 <form method="POST">
     <label>Первый текст: <p><textarea rows="10" name="a"/></textarea></p></label><br>
     <label>Второй текст: <p><textarea rows="10" name="b"/></textarea></p></label><br>
   <input type='submit' name='count' value='Сравнить'><br>
   <input type="reset" name='reset' value='Отменить'>
 </form>

</body>
</html>

<?php
$res = " ";
if (!empty($_POST['count'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
   $res = implode(" ", getCommonWords($a, $b));
}
function getCommonWords($a, $b) {
    $arr_a = explode(" ", $a);
    $arr_b = explode(" ", $b);
    $result = array_intersect($arr_a, $arr_b);
    return $result;
}
echo "Эти слова встречаются в обоих текстах: <b>$res</b>";
?>
