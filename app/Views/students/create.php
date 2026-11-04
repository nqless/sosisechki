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