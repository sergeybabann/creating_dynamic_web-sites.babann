<?php
// Данные для главной страницы
$pageTitle = 'Главная | Книга - Создание динамических веб-сайтов';

// Массив с уроками
$lessons = [
    [
        'title' => 'Глава 1',
        'description' => 'Описание',
        'link' => 'chapters/01_chapter/01_chapter.php'
    ],
    [
        'title' => 'Глава 2',
        'description' => 'Описание',
        'link' => 'chapters/02_chapter/02_chapter.php'
    ],
    [
        'title' => 'Глава 3',
        'description' => 'Описание',
        'link' => 'chapters/03_chapter/03_chapter.php'
    ],
    [
        'title' => 'Глава 4',
        'description' => 'Описание',
        'link' => 'chapters/04_chapter/04_chapter.php'
    ],
    [
        'title' => 'Глава 5',
        'description' => 'Описание',
        'link' => 'lessons/04_lesson/04_lesson.php'
    ],
    [
        'title' => 'Глава 6',
        'description' => 'Описание',
        'link' => 'lessons/04_lesson/04_lesson.php'
    ],
    [
        'title' => 'Глава 6',
        'description' => 'Описание',
        'link' => 'lessons/04_lesson/04_lesson.php'
    ],
    [
        'title' => 'Глава 7',
        'description' => 'Описание',
        'link' => 'lessons/04_lesson/04_lesson.php'
    ],
    [
        'title' => 'Глава 8',
        'description' => 'Описание',
        'link' => 'lessons/04_lesson/04_lesson.php'
    ],
    
];

// Подключаем шапку
include 'templates/header.php';
?>

<!-- Hero блок -->
<div class="hero">
    <h1>📚 Робин Никсон</h1>
    <p>Книга<br>Создание динамических веб-сайтов</p>
    <div class="badge">Всего Глав: <?php echo count($lessons); ?></div>
</div>

<!-- Секция с уроками -->
<div class="lessons-section">
    <h2>📖 Содержание</h2>
    
    <div class="lessons-grid">
        <?php foreach ($lessons as $index => $lesson): ?>
        <div class="lesson-card">
            <div class="lesson-number"><?php echo $index + 1; ?></div>
            <h3><?php echo htmlspecialchars($lesson['title']); ?></h3>
            <p><?php echo htmlspecialchars($lesson['description']); ?></p>
            <a href="<?php echo $lesson['link']; ?>" class="lesson-link">Перейти к главе →</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// Подключаем подвал
include 'templates/footer.php';
?>