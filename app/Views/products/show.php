<?php include __DIR__ . '/../include/header.php'; ?>

<main class="content">
    <h1>Карточка товара</h1>
    <div class="product-card">
        <p><strong>ID товара:</strong> <?= e($product['id']) ?></p>
        <p><strong>Наименование:</strong> <?= e($product['title']) ?></p>
        <p><strong>Цена:</strong> <?= e($product['price']) ?> руб.</p>
    </div>
    <br>
    <a href="index.php?action=products" class="button button--primary">Назад к списку</a>
</main>

<?php include __DIR__ . '/../include/footer.php'; ?>
