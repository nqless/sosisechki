<?php
require_once __DIR__ . '/../include/functions.php';
require_once __DIR__ . '/../app/Controllers/StudentController.php';

$controller = new StudentController();
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'show':
        $controller->show();
        break;
    case 'create':
        $controller->create();
        break;
    case 'statistics':
        $controller->statistics();
        break;
    default:
        http_response_code(404);
        echo 'Страница не найдена';
}

