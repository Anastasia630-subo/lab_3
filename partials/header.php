<?php
if (!isset($pageTitle)) $pageTitle = 'Лабораторная работа №3';
if (!isset($currentPage)) $currentPage = '';
$student = 'Биябева Анастасия Алексеевна';
$group = '251-361';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $student . ' — ' . $group . ' — Лабораторная работа №3 — ' . $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <div class="brand-block"><div class="brand">БИЯБЕВА АНАСТАСИЯ АЛЕКСЕЕВНА</div><div class="student-meta">Группа 251-361 · Лабораторная работа №3</div></div>
        <nav class="menu" aria-label="Главное меню">
            <a href="<?php
                $name='Главная';
                $link='index.php';
                $current_page=($currentPage==='home');
                echo $link;
            ?>"<?php
                if($current_page) echo ' class="selected_menu"';
                echo '>'.$name;
            ?></a>

            <a href="<?php
                $name='Учёба';
                $link='study.php';
                $current_page=($currentPage==='study');
                echo $link;
            ?>"<?php
                if($current_page) echo ' class="selected_menu"';
                echo '>'.$name;
            ?></a>

            <a href="<?php
                $name='Интересы';
                $link='interests.php';
                $current_page=($currentPage==='interests');
                echo $link;
            ?>"<?php
                if($current_page) echo ' class="selected_menu"';
                echo '>'.$name;
            ?></a>
        </nav>
    </div>
</header>
<main>
