<?php include __DIR__ . '/../include/header.php'; ?>

<main class="content">
    <h1>Добавить новый товар</h1>

    <?php if (!empty($errors)): ?>
        <div class="errors" style="color: red; margin-bottom: 15px;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= e($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="index.php?action=product-create" method="POST" class="product-form">
        <div class="product-form__field">
            <label for="title">Наименование товара:</label>
            <input type="text" id="title" name="title" class="product-form__input" value="<?= isset($_POST['title']) ? e($_POST['title']) : '' ?>">
        </div>

        <div class="product-form__field">
            <label for="price">Цена:</label>
            <input type="text" id="price" name="price" class="product-form__input" value="<?= isset($_POST['price']) ? e($_POST['price']) : '' ?>">
        </div>

        <button type="submit" class="button button--primary">Сохранить</button>
    </form>
    <br>
    <a href="index.php?action=products">Отмена</a>
</main>

<?php include __DIR__ . '/../include/footer.php'; ?>
