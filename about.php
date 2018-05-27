<?php
date_default_timezone_set('Europe/Moscow');

$firstname = 'Сергей';
$lastname = 'Кундрюков';
$fullname = $firstname . ' ' . $lastname;

$bornYear = 1989;
$age = (int) date("Y") - $bornYear;

$profession = 'Front-end developer';
$professionLevel = 'Middle';
$company = 'Техносерв Консалтинг';

$city = 'Москва';
$email = 'sergei.kundryukov1989@gmail.com';
$aboutIntro = "Я родился и живу в городе под названием - $city, мне $age лет 
    (интерпретатор скажет, что мне $age лет, но мне 28 и мне было лень учить его
    считать более точно.";
$aboutFully = "Я работаю в компании $company в должности $professionLevel $profession.
    Я год учился на курсах Нетологии и после курсов стал искать себе работу.
    Я претендовал на позицию Junior, но мои знания сразу оценили на
    $professionLevel";

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

<p><?= $aboutIntro ?></p>

<p><?= $aboutFully ?></p>

</body>
</html>
