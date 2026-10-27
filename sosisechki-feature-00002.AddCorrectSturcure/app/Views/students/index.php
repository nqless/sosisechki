<?php require __DIR__ . '/../../../include/header.php'; ?>
<section class="student-list">
    <h1 class="page__title">Список студентов</h1>
    <p class="page__lead">Сведения загружаются из базы данных.</p>
    <?php if (!$students): ?>
        <p class="student-list__empty">В базе данных пока нет записей.</p>
    <?php else: ?>
        <ul class="student-list__items">
        <?php foreach ($students as $student): ?>
            <li class="student-list__item">
                <a class="student-list__link" href="index.php?action=show&amp;id=<?= (int) $student['id'] ?>">
                    <?= e($student['name']) ?>
                </a>
                <span class="student-list__email"><?= e($student['email']) ?></span>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>
<?php require __DIR__ . '/../../../include/footer.php'; ?>

