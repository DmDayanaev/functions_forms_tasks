<?php
//5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.
echo "<br>";

function getWordDirec ($dir, $word) {
      $array = scandir($dir);
      $res = []; 
      foreach ($array as $k=>$v) {
		  	if (mb_stristr($v, $word)) {
				$res[] = $v."<br>";
			}
		
      }
      if (!$res) {
		echo "Cлово не найдено"; 
		exit();
	  }
       return print_r ($res);
            
}


$a = getWordDirec('/', 'b');


