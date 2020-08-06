<?php 
       $title = 'Document';
	   $h1 = 'Заголовок';
	   $date = "2020";
	   $d = '1';
	   $f = '2';
   ?>

	


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php  echo $title ?></title>
</head>
<body>
   <?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // переменная $b преобразовалась в число 5, стали равны по значению
    var_dump((int)'012345');     // строка преобразовалась в целое число.
    var_dump((float)123.0 === (int)123.0); // отличаются по типу - число с плавающей точкой и целое число
    var_dump((int)0 === (int)'hello, world'); // строка приведенная к числу = 0, они совпадают по типу и значению
	
	echo "<h1>{$h1}<br/>";
	
	echo $date;
	echo"<br/>";
	
	echo "Переменная d" . "=" . ($d = $d+1) . "<br/>";
	echo "Переменная f" . "=" . ($f = $f-1) . "<br/>";
	
	?>
</body>
</html>