<!-- app/Views/students/show.php -->
<?php require __DIR__ . '/../../../include/header.php'; ?>
<?php if ($student): ?>
    <article class="student-card">
        <h1 class="page__title">Карточка студента</h1>
        <dl class="student-card__details">
            <div class="student-card__row">
                <dt class="student-card__label">ID</dt>
                <dd class="student-card__value"><?= (int) $student['id'] ?></dd>
            </div>
            <div class="student-card__row">
                <dt class="student-card__label">Имя</dt>
                <dd class="student-card__value"><?= e($student['name']) ?></dd>
            </div>
            <div class="student-card__row">
                <dt class="student-card__label">Email</dt>
                <dd class="student-card__value"><?= e($student['email']) ?></dd>
            </div>
        </dl>
    </article>
<?php else: ?>
    <div class="alert alert--warning">
        <h1 class="page__title">Студент не найден</h1>
        <p>Проверьте ссылку или вернитесь к списку.</p>
    </div>
<?php endif; ?>
<p><a class="button button--secondary" href="index.php">Назад к списку</a></p>
<?php require __DIR__ . '/../../../include/footer.php'; ?>
