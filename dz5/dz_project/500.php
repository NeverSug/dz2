<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Ошибка сервера — 500</title>
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
    <div class="error-container">
        <h1 class="error-code">500</h1>
        <h2 class="error-title">Внутренняя ошибка сервера</h2>
        <p class="error-message">
            Что-то пошло не так на сервере.
            Администратор уже получил уведомление.
            Попробуйте обновить страницу или вернуться на главную.
        </p>
        <a href="index.php" class="back-link">← На главную</a>
    </div>
</body>

</html>