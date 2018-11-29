<html>
<head>
	<meta charset="utf-8">
	<title>Задание по файлам 3!</title>
</head>
 <body>
 	<?php 
 		echo $_POST['a'];
		if(isset($_POST['a']) &&
		   $_POST['a'] == '1')
		{
		    echo "<br><br>Спасибо!";
		}
		elseif (isset($_POST['b']) &&
		   $_POST['b'] == '2')
		{
		    echo "<br><br>Разумные вариант ответа!";
		}
		elseif (isset($_POST['c']) &&
		   $_POST['c'] == '3')
		{
			echo "<br><br>Тоже хорошо но лучше бы домой отпустили!";
		}
		elseif (isset($_POST['d']) &&
		   $_POST['d'] == '4')
		{
			echo "<br><br>Вы сделали правильный выбор, никогда в вас не сомневался!";
		}

 	?>

  <form action="Zadanie3.php" method="post">
	   <p>Вы согласны с условиями?</p>
	   <p><input type="checkbox" name="a" value="1" > Вы ставите мне 5!</p>
	   <p><input type="checkbox" name="b" value="2" > Я иду домой спать!</p>
	   <p><input type="checkbox" name="c" value="3" > Я сплю и ничего не делаю!</p>
	   <p><input type="checkbox" name="d" value="4" > Я делаю все варианты ответа одновременно!</p>

	   <p><input type="submit" value="Ответить!"></p>
  </form>

  
 </body>
</html>

</body>
</html>