<?php 
require_once 'db.php'; 
$sql = "SELECT * FROM users";
$sql1 = "SELECT * FROM producti";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
    <h1>Список студентов</h1>
    <a href="add.php"><b>Добавить нового студента</b></a>
    <hr>
    <ul>
        <?php
        while($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<a href='user.php?id=" . $row['id'] . "'>" . $row['name'] . "</a>";
            echo "</li>";
        }
        ?>
    </ul>
    <ul>
        <?php
        while($row = $result1->fetch_assoc()) {
            echo "<li>";
            echo "<a href='product.php?id=" . $row['id'] . "'>" . $row['title'] . "</a>";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>
