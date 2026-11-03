<?php

require_once __DIR__ . '/../Models/Products.php';

class ProductController
{
    public function index(): void
    {
        $products = Products::all();
        require __DIR__ . '/../Views/products/index.php';
    }

    public function show(): void
    {
        $id = (int)($_GET['id'] ?? 0);
        $product = Products::find($id);
        if (! $product) {
            http_response_code(404);
            echo 'Товар не найден';
            return;
        }
        require __DIR__ . '/../Views/products/show.php';
    }

    public function create(): void
    {
        $errors = [];
        $title = '';
        $price = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = trim($_POST['title'] ?? '');
            $price = trim($_POST['price'] ?? '');

            if ($title === '') {
                $errors[] = 'Наименование не может быть пустым.';
            }
            if (!is_numeric($price) || (float)$price < 0) {
                $errors[] = 'Цена должна быть числом больше либо равным нулю.';
            }

            if (!$errors) {
                $id = Products::create($title, (float)$price);
                echo $id;
                header('Location: index.php?action=indexProd' . $id);
                exit;
            }
        }

        require __DIR__ . '/../Views/products/create.php';
    }
}