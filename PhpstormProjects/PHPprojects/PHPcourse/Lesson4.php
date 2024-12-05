<?php
// Lesson4 - Functions
// 1. Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.

function findElementByIndex(array $array, int $index): array
{
    $result = [];
    foreach ($array as $item) {
        if (is_array($item)) {
            $result = array_merge($result, findElementByIndex($item, $index));
        } elseif (isset($array[$index])) {
            $result[] = $array[$index];
        }
    }
    return $result;
}

// Пример использования
$taskOneArray = [
    [111, 22222, 33],
    [444, [5555, 66]],
    [77777, 8888]
];
print_r(findElementByIndex($taskOneArray, 1));


// 2. Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
function countLetterB($input): false|int
{
    if (!is_string($input) || $input === '') {
        return false;
    }
    $input = strtolower($input);
    return substr_count($input, 'b');
}

// Пример использования
echo countLetterB("bubble") . "\n";
echo countLetterB("BubBlegum") . "\n";
echo countLetterB(123) . "\n";


// 3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
function sumArrayElements(array $array)
{
    $sum = 0;
    foreach ($array as $item) {
        if (is_array($item)) {
            $sum += sumArrayElements($item);
        } else {
            $sum += $item;
        }
    }
    return $sum;
}

// Пример использования
$thirdTaskArray = [1, [2, 3], [4, [5, 6]]];
echo sumArrayElements($thirdTaskArray) . "\n";


// 4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float
function countSmallerSquares(float $bigSquare, float $smallSquare): float
{
    if ($smallSquare <= 0 || $bigSquare <= 0 || $smallSquare > $bigSquare) {
        return 0.0;
    }
    $countPerSide = $bigSquare / $smallSquare;
    return $countPerSide * $countPerSide;
}

// Пример использования
echo countSmallerSquares(92, 38) . "\n";



