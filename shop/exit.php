<?php
	//очищаем куки с пользователем
	setcookie("user_id", '', '', "/");

	//очищаем куки с пользователем
	setcookie("user_id_b", '', '', "/");

	//переходим на главную страцину
	header("Location: /shop");
?>

