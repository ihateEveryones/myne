<?php
	require "file1.html";
	if(isset($_POST['go'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$message = $_POST['message'];

	if(file_exists('message.txt')){
		echo "Файл существует";
		echo"<br>";
		$fp = fopen('message.txt', 'a+') or die ("asd");
		fwrite($fp, $name);
		fwrite($fp, $surname);
		fwrite($fp, $message);
		fclose($fp);
		echo nl2br(file_get_contents("message.txt"));
		
	}
	else{
		echo " Файл не существует";
	}
	}
	else{ 
		echo "Вы ничего не ввели";
	}


?>