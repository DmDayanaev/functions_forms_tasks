<?php
//4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
echo "<br>";


//Не понятно как задавать дирректории? так не получается - getDirec("c/")

function getDirec($dir) {
	$d  = opendir($dir);
	while (($filename = readdir($d)) !== false) {	
		$files[] = $filename."<br>";
	}

	return print_r ($files);
}

$a = getDirec(__DIR__);


?>