<?php
mb_internal_encoding("UTF-8");

// Numbers
$seven = 7;
$three = 3;
$sevenFifteen = 7.15;
$twentyFive = 25;

$rest = $seven % $three; // остаток деления 7 на 3
$resInt = round($seven + $sevenFifteen, 0); // целая часть сложения 7 и 7,15
$root = sqrt($twentyFive); // квадратный корень из 25

echo("Остаток деления $seven на $three - $rest. ");
var_dump('Целая часть сложения ' . $seven . ' и ' . $sevenFifteen . ' - ' . $resInt . ". ");
echo('Квадратный корень из ' . $twentyFive . ' - ' . $root . ". ");

//------------------------------Strings----------------------------

$phrase = 'Десять негритят пошли купаться в море';

// вывод 4го слова из фразы
$phraseArr1 = explode(" ", $phrase);
// var_dump($phraseArr1);
if (count($phraseArr1)>=4){
    var_dump($phraseArr1[3].' .');
} else {
    echo ' В предложении недостаточно слов. ';
}

echo $phrase[16]; // вывод 17го символа из строки

$upPhrase = mb_convert_case($phrase, MB_CASE_TITLE, "UTF-8"); // Первая буква заглавная во всех словах
echo $upPhrase . ' ';

$phraseLength = strlen($phrase); // длина строки
echo ($phraseLength . ' ');


// ----------------------------Boolean------------------------------


if (true == 1){
    echo ' Правильно, true равно 1 ';
}else{
    echo ' Неправильно, true не равно 1 ';
}

$falTr = (false === 0) ? ' false тождественно 0 ' : ' false не тождественно 0 ';
echo $falTr;

$longestStr = (strlen('three')>strlen('три')) ? ' three длиннее чем три ':' три длиннее чем three ';
echo $longestStr;

if ((125*13+7)>(223+28*2)){
    echo ' 125 умножить на 13 плюс 7 больше чем 223 плюс 28 умножить 2 ';
}else{
    echo ' 223 плюс 28 умножить 2 больше чем 125 умножить на 13 плюс 7 ';
}

