<?php
$title = "Форма";
	require "blocks/header.php";
?>
<div class="container mt-2">
	<h1 class="mt-5">Заполните форму</h1>

	<form action="chek_post.php" method="post">
		<input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
		<input type="email" name="email" placeholder="Введите email" class="form-control"><br>
		<input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
		<textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
		<input type="submit" value="Отправить" class="btn btn-success">
	</form>
</div>


<?php
	require "blocks/footer.php";
?>