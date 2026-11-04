<?php
require_once __DIR__ . '/../Models/Student.php';

class StudentController
{
    public function index(): void
    {
        $students = Student::all();
        require __DIR__ . '/../Views/students/index.php';
    }

    public function show(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $student = $id ? Student::find((int) $id) : null;
        require __DIR__ . '/../Views/students/show.php';
    }

    public function create(): void
    {
        $errors = [];
        $name = '';
        $email = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');

            if ($name === '') {
                $errors[] = 'Укажите имя студента.';
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Укажите корректный адрес электронной почты.';
            }

            if (!$errors) {
                Student::create($name, $email);
                header('Location: index.php');
                exit;
            }
        }

        require __DIR__ . '/../Views/students/create.php';
    }

    public function statistics(): void
    {
        $students = Student::all();
        $totalStudents = count($students);
        require __DIR__ . '/../Views/students/statistics.php';
    }
    
}

