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
$about = "<p>Я родился и живу в городе под названием - $city, мне $age лет 
    (интерпретатор скажет, что мне $age лет, но мне 28 и мне было лень учить его
    считать более точно.</p>
 
    <p>Я работаю в компании $company в должности $professionLevel $profession.
    Я год учился на курсах Нетологии и после курсов стал искать себе работу.
    Я претендовал на позицию Junior, но мои знания сразу оценили на
    $professionLevel</p>

    <p>По любым вопросам прошу писать мне на почту: <a href=\"mailto: $email \" target=\"_blank\"> $email </a></p>";
