<?php
//Tasck1
//цикл
function evenOdd($numbers)
{
    $result = [];

    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $result[] = "четное";
        } else {
            $result[] = "нечетное";
        }
    }

    return $result;
}
//array_map
function evenOdd2($numbers)
{
    return array_map(function ($number) {
        return $number % 2 == 0 ? "четное" : "нечетное";
    }, $numbers);
}
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = evenOdd($arr);
$result2 = evenOdd2($arr);
print_r($result);
print_r($result2);

//Tasck2

function aggregationData(array $numbers): array
{
    if (empty($numbers)) {
        throw new InvalidArgumentException("Массив не должен быть пустым");
    }

    $max = max($numbers);
    $min = min($numbers);
    $avg = array_sum($numbers) / count($numbers);

    return [
        'max' => $max,
        'min' => $min,
        'avg' => $avg,
    ];
}

$mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = aggregationData($mas);

print_r($result);

//Tasck3
//цикл
function generateUniqueRandomArray($count = 100, $min = 1, $max = 200): array
{
    $result = [];

    if ($count > ($max - $min + 1)) {
        throw new InvalidArgumentException("Невозможно сгенерировать $count уникальных чисел в диапазоне от $min до $max");
    }

    while (count($result) < $count) {
        $randomNumber = mt_rand($min, $max);
        if (!in_array($randomNumber, $result)) {
            $result[] = $randomNumber;
        }
    }

    return $result;
}
$arr2 = generateUniqueRandomArray(100, 1, 200);
print_r($arr2);

//функции работы с массивами
$allNumbers = range(1, 200);

shuffle($allNumbers);

$randomUniqueArray = array_slice($allNumbers, 0, 100);
print_r($randomUniqueArray);

//Tasck4

$mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$min = $mas[0];
$max = $mas[0];

for ($i = 1; $i < count($mas); $i++) {
    if ($mas[$i] < $min) {
        $min = $mas[$i];
    }
    if ($mas[$i] > $max) {
        $max = $mas[$i];
    }
}

$sum = $min + $max;

echo "Минимум: $min\n";
echo "Максимум: $max\n";
echo "Сумма минимального и максимального: $sum\n";
