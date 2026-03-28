<?php
// Данные для урока
$pageTitle = 'Глава 1: Введение в динамическое содержимое веб-страницы';
$lessonNumber = 1;
$lessonTitle = 'Введение в динамическое содержимое веб-страницы';

// Навигация
$prevLesson = null;
$nextLesson = '../02_chapter/02_chapter.php';

// Содержимое урока (HTML)
$lessonContent = '
    <div class="container">
    <ul>
    <li>Переменные</li>
    <li>Операторы</li>
    </ul>
    </div>
    
    <h2>Практическое  выполнение кода</h2>
    <a href="01_variables-practice.php" target="_blank">🔗 Переменные →</a>
    <a href="01_operators-practice.php" target="_blank">🔗 Операторы →</a>
';

// Подключаем шаблон урока
include '../../templates/lesson_template.php';
?>