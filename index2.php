<?php
//----Задание 1------

$a = 0;
while ($a <= 100  ) {
    if ($a % 3 === 0){
        echo (int)$a . ", " . PHP_EOL;
    }
    $a++;
}

//----Задание 2------

$age = null;
$isValid = false;

do {
    echo "Введите ваш возраст (0–100): ";
    $input = readline();
    if (!is_numeric($input)) {
        echo "\033[31mОшибка: пожалуйста, введите числовое значение!\033[0m" . PHP_EOL;
        continue;
    }

    $age = (int)$input;

    if ($age < 0 || $age > 100) {
        echo "\033[31mОшибка: возраст должен быть в диапазоне от 0 до 100!\033[0m" . PHP_EOL;
    } else {
        $isValid = true;
    }
} while (!$isValid);

echo "Спасибо! Ваш возраст: $age лет." . PHP_EOL;

//----Задание 4------

echo "Введите значение от 0 до 15" . PHP_EOL;
$input = readline();
$n=(int)$input;


switch (is_numeric($input)) {
    case ((int)$n>=0 && (int)$n<= 15):
        for ($i = $n; $i <= 15; $i++) {
            echo (int)$i . ' ' . PHP_EOL;
        }
        break;
    
    default:
        echo "\033[31mОшибка: число должно быть в диапазоне 0–15\033[0m" . PHP_EOL;
        break;
}


//----Задание 5------

$isValid = false;

do{    
    echo "На какой сигнал светофора разрешено движение?" . PHP_EOL;

    $a = "Зеленый";
    $b = "Желтый";
    $c = "Красный";

    echo "\033[32mA: $a\033[0m" . " \033[33mB: $b\033[0m" . " \033[31mC: $c\033[0m" . PHP_EOL;

    $input = readline();

    if($input !== ""){
        switch( $input ) {
            case ($input == 'a') :
                echo "Правильно! Вы выиграли!" . PHP_EOL;
                $isValid = true;
                break;
                case ($input == 'b'): 
                case ( $input == 'c'):
                    echo "Не верно!" . PHP_EOL;
                    $isValid = true;
                    break;
            default:
                echo "Таких вариантов ответа нет. Укажите вариант из списка!". PHP_EOL;
                break;
        }
    } else {
    echo "Укажите вариант из списка". PHP_EOL;
    }
} while ( !$isValid );
