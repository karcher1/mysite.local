<?php
// 1 ЗАДАЧА
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// посчитать длину массива
$length = count($arr);
echo "Длина массива: $length\n";

// переместить первые 4 элемента массива в конец массива
$firstFour = array_splice($arr, 0, 4);
$arr = array_merge($arr, $firstFour);
echo "Массив после перемещения первых 4 элементов в конец:\n";
print_r($arr);

// получить сумму 4,5,6 элемента
$sum = array_sum(array_slice($arr, 3, 3));
echo "Сумма 4, 5, 6 элементов: $sum\n";


// 2 ЗАДАЧА
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];

// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$diffSecond = array_diff_key($secondArr, $firstArr);
echo "Элементы, которые есть во втором массиве, но отсутствуют в первом:\n";
print_r($diffSecond);

// найти все элементы которые присутствую в первом и отсутствуют во втором
$diffFirst = array_diff_key($firstArr, $secondArr);
echo "Элементы, которые есть в первом массиве, но отсутствуют во втором:\n";
print_r($diffFirst);

// найти все элементы значения которых совпадают
$sameValues = array_intersect_assoc($firstArr, $secondArr);
echo "Элементы, значения которых совпадают:\n";
print_r($sameValues);

// найти все элементы значения которых отличается
$differentValues = array_diff_assoc($firstArr, $secondArr);
echo "Элементы, значения которых отличаются для 1 массива:\n";
print_r($differentValues);

$differentValues = array_diff_assoc($secondArr, $firstArr);
echo "Элементы, значения которых отличаются для 2 массива:\n";
print_r($differentValues);


// 3 ЗАДАЧА
$firstArr3task = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];

// получить все вторые элементы вложенных массивов
$secondElements = [];
foreach ($firstArr3task as $key => $value) {
    if (is_array($value) && count($value) > 1) {
        $keys = array_keys($value);
        $secondElements[$key] = $value[$keys[1]] ?? null;
    }
}
echo "Все вторые элементы вложенных массивов:\n";
print_r($secondElements);

// получить общее количество элементов в массиве
$totalElements = count($firstArr3task, COUNT_RECURSIVE);
echo "Общее количество элементов в массиве: $totalElements\n";

// получить сумму всех значений в массиве
function arraySumRecursive($array) {
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += arraySumRecursive($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
}
$totalSum = arraySumRecursive($firstArr3task);
echo "Сумма всех значений в массиве: $totalSum\n";
