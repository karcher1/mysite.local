<?php
// Отримати залишок від ділення 7 на 3
$remainder = 7 % 3;
echo "Залишок від ділення 7 на 3: $remainder\n";

// Отримати цілу частину ділення 7 и 7,15
$quotient = intdiv(7, 7.15);
echo "Ціла частина ділення 7 и 7.15: $quotient\n";

// Отримати корінь из 25
$square = sqrt(25);
echo "Корінь з 25: $square\n";

// Отримати 4-е слово з фрази - "Десять негритят пошли купаться в море"
$phrase = "Десять негритят пошли купаться в море";
$words = explode(" ", $phrase);
$fourthWord = $words[3];
echo "4-е слово з фрази: $fourthWord\n";

// Отримати 17-й символ із фрази - "Десять негритят пошли купаться в море"
$seventeenthChar = mb_substr($phrase, 16, 1);
echo "17-й символ із фрази: $seventeenthChar\n";

// Зробити великою кожну першу букву слів фрази
$capitalizedPhrase = mb_convert_case($phrase, MB_CASE_TITLE, "UTF-8");
echo "Фраза з великою першою буквою кожного слова: $capitalizedPhrase\n";

// Порахувати длину строки
$lengthOfPhrase = mb_strlen($phrase);
echo "Длина строки: $lengthOfPhrase\n";

// Чи вірно твердження true дорівнює 1
$isTrueEqualToOne = (true == 1);
echo "Чи вірно твердження true дорівнює 1: " . ($isTrueEqualToOne ? "Так" : "Ні") . "\n";

// Чи вірно твердження false тождественно 0
$isFalseZero = (false === 0);
echo "Чи вірно твердження false тождественно 0: " . ($isFalseZero ? "Так" : "Ні") . "\n";

// Яка строка більше "three" - "три"
$comparison = "three" > "три";
echo "Яка строка більше \"three\" чи \"три\": " . ($comparison ? "three" : "три") . "\n";

// Яке число більше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
$firstExpression = 125 * 13 + 7;
$secondExpression = 223 + 28 * 2;
$greaterNumber = ($firstExpression > $secondExpression) ? $firstExpression : $secondExpression;
echo "Яке число більше: $firstExpression чи $secondExpression: $greaterNumber\n";