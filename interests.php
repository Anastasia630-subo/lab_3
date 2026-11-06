<?php
$pageTitle = 'Интересы';
$currentPage = 'interests';
require 'partials/header.php';

$interests = [
    'Спорт и активный образ жизни',
    'Программирование и технологии',
    'Изучение новых инструментов',
    'Москва и городская среда'
];

$second = (int)date('s');

if ($second % 2 === 0) {
    $dynamicPhoto = 'https://thumb.wikimedia.org/wikipedia/commons/thumb/1/1d/Kremlin_in_Winter.jpg/960px-Kremlin_in_Winter.jpg';
} else {
    $dynamicPhoto = 'https://thumb.wikimedia.org/wikipedia/commons/thumb/4/46/Moscow_Skyline.jpg/960px-Moscow_Skyline.jpg';
}

$secondPhoto = 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Moscow%2C_MIBC_skyline_over_the_Kremlin%2C_Feb_2026_01.jpg/960px-Moscow%2C_MIBC_skyline_over_the_Kremlin%2C_Feb_2026_01.jpg';
?>
<section class="hero">
    <div class="container">
        <div class="eyebrow">Интересы</div>
        <h1>Мои интересы</h1>
        <p class="lead">Помимо учёбы, важное место в моей жизни занимают спорт, технологии и Москва.</p>
    </div>
</section>

<section class="content">
    <div class="container">
        <article class="card">
            <h2>Что мне интересно</h2>
            <p>Я всю жизнь занимаюсь спортом. Он помогает мне сохранять дисциплину, регулярно работать над собой и не останавливаться после первых сложностей. Эти качества полезны и в учёбе, особенно когда приходится разбираться в новой теме или искать ошибку в программе.</p>
            <p>Также мне интересны программирование и современные технологии. Сейчас я изучаю веб-разработку, базы данных и постепенно расширяю знания в области разработки бизнес-приложений. Мне нравится видеть практический результат работы и понимать, как отдельные технологии соединяются в одну систему.</p>
            <ul>
                <?php foreach ($interests as $item): ?>
                    <li><?php echo $item; ?></li>
                <?php endforeach; ?>
            </ul>
        </article>

        <article class="card">
            <h2>Москва</h2>
            <p>Я родилась и живу в Москве. Мне нравится сочетание исторической архитектуры и современных районов города. Москва постоянно меняется, но при этом сохраняет большое количество узнаваемых мест и памятников. Поэтому для этой страницы я выбрала фотографии города.</p>
            <p>Одна из фотографий меняется автоматически в зависимости от текущей секунды. Такой вариант позволяет показать работу условия PHP без изменения структуры страницы вручную.</p>
            <div class="photo-grid">
                <figure class="photo-card">
                    <img src="<?php echo $dynamicPhoto; ?>" alt="Москва">
                </figure>
                <figure class="photo-card">
                    <img src="<?php echo $secondPhoto; ?>" alt="Москва зимой">
                </figure>
            </div>
        </article>
    </div>
</section>
<?php require 'partials/footer.php'; ?>
