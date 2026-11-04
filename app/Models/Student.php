<?php
require_once __DIR__ . '/../../core/Database.php';

class Student
{
    public static function all(): array
    {
        $sql = 'SELECT id, name, email FROM users ORDER BY id DESC';
        return Database::connection()->query($sql)->fetchAll();
    }

    public static function find(int $id): ?array
    {
        $stmt = Database::connection()->prepare(
            'SELECT id, name, email FROM users WHERE id = :id'
        );
        $stmt->execute(['id' => $id]);
        $student = $stmt->fetch();

        return $student === false ? null : $student;
    }

    public static function create(string $name, string $email): void
    {
        $stmt = Database::connection()->prepare(
            'INSERT INTO users (name, email) VALUES (:name, :email)'
        );
        $stmt->execute(['name' => $name, 'email' => $email]);
    }
}
