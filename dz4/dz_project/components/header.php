<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Блог о PHP' ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }

        h1,
        h2 {
            color: #333;
        }

        a {
            color: #0066cc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        article {
            margin-bottom: 30px;
        }

        .content {
            background: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #ccc;
        }

        footer {
            margin-top: 50px;
            color: #777;
            font-size: 0.9em;
        }

        .post-preview {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1><a href="index.php" style="color: inherit; text-decoration: none;">Блог о PHP</a></h1>
    <hr>