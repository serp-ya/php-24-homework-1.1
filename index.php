<?php
include "about.php";

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lesson 1 hw</title>
</head>
<body>

<h1>Краткая информация обо мне:</h1>
<p>
    Меня зовут <?= $fullname ?>! Я разработчик из города <?= $city ?>.
</p>

<h3>Коротко обо мне:</h3>

<?= $about ?>

<p>

</p>
</body>
</html>