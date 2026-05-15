<?php
$message = $_GET['msg'] ?? 'Страница не найдена';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Ошибка 404</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <h1 class="error">404 — Страница не найдена</h1>
    <p class="message"><?= htmlspecialchars($message) ?></p>
    <p><a href="index.php">← На главную</a></p>
</body>

</html>