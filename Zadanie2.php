<!DOCTYPE html>
<html>
<head>
	<title>Задание по файлам 2!</title>
</head>
<body>
	<?php
		if ( !file_exists( "Config.php" ) )
	  		echo "Вgнимание! Файл messae.txt не найден!";
		else echo "Файл найден!<br>";

		
		$mas=require 'Config.php';
		foreach ($mas as $value) {
			echo "$value<br>";
		}

	?>

</body>
</html>