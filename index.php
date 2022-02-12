
<?php
$title = "Главная";
require "blocks/header.php";
?>
<h1 class="mt-5">Главная страница</h1>



<?php

echo date('Y-m-d H:i:s', strtotime("+4 Hour")) . '<br>';





require "blocks/footer.php";
?>
