<?php 
	require "file3.html";
 	//echo $_POST['yes'];
	if(isset($_POST['yes'])){
		echo "<br><br>ДА ДА Я";
	}
	elseif (isset($_POST['no'])){
		echo "<br><br>НЕ НЕ Я";
	}
	elseif (isset($_POST['maybe'])){
		echo "<br><br>НУ И ЛАДНО";
	}
 	?>
