<?php require __DIR__ . '/../../../include/header.php'; ?>

<h1>Новый товар</h1>

<?php foreach ($errors as $err): ?>
  <p style="color:red"><?= e($err) ?></p>
<?php endforeach; ?>

<form class="product-form" method="post" action="index.php?action=product-create">
  <div class="product-form__field">
    <label>Наименование</label>
    <input class="product-form__input" type="text" name="title" value="<?= e($title) ?>">
  </div>
  <div class="product-form__field">
    <label>Цена</label>
    <input class="product-form__input" type="text" name="price" value="<?= e($price) ?>">
  </div>
  <button class="button button--primary" type="submit">Сохранить</button>
</form>

<?php require __DIR__ . '/../../../include/footer.php'; ?>