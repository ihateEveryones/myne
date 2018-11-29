<html>
<head>
<title>Задание по файлам 1!</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
</head>
 
<body>
	<?php
	if ( !file_exists( "message.txt" ) )
  		echo "Внимание! Файл message.txt не найден!";
	else 
	{
		echo "Файл найден!<br>";

		 if (!empty($_POST['name']) && !empty($_POST['SurName']) && !empty($_POST['soob']) )  
		{
			
		$name = $_POST['name']; 	
		$SurName = $_POST['SurName'];
		$soob = $_POST['soob'];
		$text .= "Имя: $name \r\n"; 
		$text .= "Фамилия: $SurName \r\n"; 
		$text .= "Сообщение: $soob \r\n";
		$file = fopen ("message.txt", "a+"); //открываем для перезаписи файл message.txt лежаший в одной папке с текущей страницей
		fputs ($file,$text); // пишем в файл
		fclose ($file); // закрываем файл
		echo "Данные записаны в файл!";   
	    }
	    else
	    	echo "Введите данные во все поля формы!";
	}
	 
	?>
<form action="Zadanie1.php" method="post">
	<p>Ваше имя
	<input name="name" type="text" class="lnews_data" size="30">
	</p>
	<p>Ваша фамилия
	<input name="SurName" type="text" class="lnews_data" size="40">
	</p>
	<p>Введите сообщение!
	<input name="soob" type="text" class="lnews_data" size="40">
	</p>
	<p>
	<label>
	<input type="submit" name="submit" id="submit" value="Ok">
	</label>
	</p>
	</form>
	<?php echo nl2br(file_get_contents("message.txt")) ?>
</body>
</html>