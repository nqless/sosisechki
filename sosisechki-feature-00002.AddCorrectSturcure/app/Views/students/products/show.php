<?php require __DIR__ . '/../../../include/header.php'; ?>

<h1><?= e($product['title']) ?></h1>
<p>Цена: <?= e($product['price']) ?> ₽</p>
<a class="product-list__link" href="index.php?action=products">← К каталогу</a>

<?php require __DIR__ . '/../../../include/footer.php'; ?>