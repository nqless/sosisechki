<?php
require_once __DIR__ . '/../../core/Database.php';

class Products
{
    public static function all(): array
    {
        $sql = 'SELECT id, title, price FROM products ORDER BY id DESC';
        return Database::connection()->query($sql)->fetchAll();
    }

    public static function find(int $id): ?array
    {
        $stmt = Database::connection()->prepare(
            'SELECT id, title, price  FROM products WHERE id = :id'
        );
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch();

        return $product === false ? null : $product;
    }

    public static function create(string $title, string $price): void
    {
        $stmt = Database::connection()->prepare(
            'INSERT INTO products (title, price) VALUES (:title, :price)'
        );
        $stmt->execute(['title' => $title, 'price' => $price]);
    }
}
