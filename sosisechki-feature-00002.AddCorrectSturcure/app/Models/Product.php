<?php

class Product
{
    public static function all(): array
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->query('SELECT id, title, price FROM products ORDER BY id DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find(int $id): ?array
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare('SELECT id, title, price FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    public static function create(string $title, float $price): int
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare('INSERT INTO products (title, price) VALUES (:title, :price)');
        $stmt->execute(['title' => $title, 'price' => $price]);
        return (int)$pdo->lastInsertId();
    }
}