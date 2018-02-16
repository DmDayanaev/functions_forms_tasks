<?php
//6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>gallery</title>
</head>

<body>

<form method="POST" enctype="multipart/form-data">
    <label>Выберите файл: <input type='file' name='photo'></label><br>
    <input type='submit' name='count' value='Загрузить'><br>
</form>

</body>
</html>

<?php
	@mkdir("gallery", 0777);
	move_uploaded_file($_FILES['photo']['tmp_name'], "gallery/".basename($_FILES['photo']['name']));
	$dir = "gallery/";
    $files = scandir($dir);
    
    foreach($files as $val) {
        if($val != "." && $val != "..") {
            echo
            '<div style="display:inline-block; width:200px; height:250px;">
                <img width = "200" src="gallery/'.$val.'" />
                <br/>
                <p style="font:12px Verdana; text-align:center;">'.$val.'</p>
            </div>';
            
        }
    }

	
	