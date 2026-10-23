<!-- app/Views/students/index.php -->
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
<!-- app/Views/students/create.php -->
<?php require __DIR__ . '/../../../include/header.php'; ?>
<section class="student-form">
    <h1 class="page__title">Добавить студента</h1>
    <?php foreach ($errors as $error): ?>
        <p class="alert alert--error"><?= e($error) ?></p>
    <?php endforeach; ?>
    <form class="student-form__form" action="index.php?action=create" method="post">
        <label class="student-form__field">
            <span class="student-form__label">Имя студента</span>
            <input class="student-form__input" type="text" name="name" value="<?= e($name) ?>" required>
        </label>
        <label class="student-form__field">
            <span class="student-form__label">Электронная почта</span>
            <input class="student-form__input" type="email" name="email" value="<?= e($email) ?>" required>
        </label>
        <button class="button button--primary" type="submit">Сохранить</button>
    </form>
</section>
<?php require __DIR__ . '/../../../include/footer.php'; ?>
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
