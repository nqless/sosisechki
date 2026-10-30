<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        $products = Product::all();
        require_once __DIR__ . '/../Views/products/index.php';
    }
    public function show()
    {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $product = Product::find($id);

        if (!$product) {
            header("HTTP/1.0 404 Not Found");
            echo "Товар не найден";
            return;
        }

        require_once __DIR__ . '/../Views/products/show.php';
    }
    public function create()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = isset($_POST['title']) ? trim($_POST['title']) : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            if (empty($title)) {
                $errors[] = "Наименование товара не может быть пустым.";
            }
            if (!is_numeric($price) || (float)$price < 0) {
                $errors[] = "Цена должна быть числом больше либо равным нулю.";
            }
            if (empty($errors)) {
                Product::create($title, (float)$price);
                header("Location: index.php?action=products");
                exit;
            }
        }
        require_once __DIR__ . '/../Views/products/create.php';
    }
}
