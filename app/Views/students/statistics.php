<!-- app/Views/students/statistics.php -->
<?php require __DIR__ . '/../../../include/header.php'; ?>
<section class="student-stats">
    <h1 class="page__title">Статистика студентов</h1>
    <p class="page__lead">Краткая сводка по записям в базе данных.</p>
    <div class="student-stats__grid">
        <article class="student-stats__item student-stats__item--highlight">
            <h2 class="student-stats__label">Всего студентов</h2>
            <p class="student-stats__value"><?= (int) $totalStudents ?></p>
        </article>
    </div>
    <a class="button button--secondary" href="index.php">Назад к списку</a>
</section>
<?php require __DIR__ . '/../../../include/footer.php'; ?>
