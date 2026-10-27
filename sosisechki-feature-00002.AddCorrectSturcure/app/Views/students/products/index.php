<?php require __DIR__ . '/../../../include/header.php'; ?>

<h1>Каталог товаров</h1>
<a class="button button--primary" href="index.php?action=product-create">Добавить товар</a>

<div class="product-list">
  <?php foreach ($products as $p): ?>
    <div class="product-list__item">
      <a class="product-list__link" href="index.php?action=product&id=<?= (int)$p['id'] ?>">
        <?= e($p['title']) ?>
      </a>
      <span><?= e($p['price']) ?> ₽</span>
    </div>
  <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../../../include/footer.php'; ?>