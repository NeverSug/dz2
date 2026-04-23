<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #9b4040ff;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .even {
            background-color: #e8f5e8;
            color: #2e7d32;
        }
        .odd {
            background-color: #f0ffebff;
            color: #89c628ff;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="n">Введите количество строк (N): </label>
        <input type="number" id="n" name="n" min="1" value="<?= isset($_POST['n']) ? $_POST['n'] : 5 ?>" required>
        <button type="submit">Создать таблицу</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = (int)$_POST['n'];
                
            echo '<table>';
            echo '<thead><tr><th>№ строки</th><th>Данные</th></tr></thead>';
            echo '<tbody>';

            for ($i = 1; $i <= $n; $i++) {
                
                $isEven = ($i & 1) === 0; 

               
                $rowClass = $isEven ? 'even' : 'odd';

                echo '<tr class="' . $rowClass . '">';
                echo '<td>' . $i . '</td>';
                echo '<td> ' . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
    }
    
    ?>
</body>
</html>