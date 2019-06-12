<?php

const BREAK_LINE = '<br>';
const SPACE = '&nbsp;';

/*
 * 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
 *   если $a и $b положительные, вывести их разность;
 *   если $а и $b отрицательные, вывести их произведение;
 *   если $а и $b разных знаков, вывести их сумму;
 *   Ноль можно считать положительным числом.
 */

$a = 10;
$b = 0;

// использование тернарного оператора, правда не сликшм читабильно
echo BREAK_LINE. !($a >= 0 && $b >= 0)? (
                    !($a < 0 && $b < 0)? $a + $b : $a * $b
                 ) : $a - $b ;

// Либо расписать через if
if ($a >= 0 && $b >= 0) {
    echo BREAK_LINE.($a - $b);
} elseif ($a < 0 && $b < 0) {
    echo BREAK_LINE.($a * $b);
} else {
    echo BREAK_LINE.($a + $b);
}


/*
 *  2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
 */

$a = mt_rand(0,15);
echo BREAK_LINE.'Variable "a" is:'.$a.BREAK_LINE;

switch ($a){
    case 0: echo '0'.BREAK_LINE;
    case 1: echo '1'.BREAK_LINE;
    case 2: echo '2'.BREAK_LINE;
    case 3: echo '3'.BREAK_LINE;
    case 4: echo '4'.BREAK_LINE;
    case 5: echo '5'.BREAK_LINE;
    case 6: echo '6'.BREAK_LINE;
    case 7: echo '7'.BREAK_LINE;
    case 8: echo '8'.BREAK_LINE;
    case 9: echo '9'.BREAK_LINE;
    case 10: echo '10'.BREAK_LINE;
    case 11: echo '11'.BREAK_LINE;
    case 12: echo '12'.BREAK_LINE;
    case 13: echo '13'.BREAK_LINE;
    case 14: echo '14'.BREAK_LINE;
    case 15: echo '15'.BREAK_LINE;
    break;
}

/*
 * 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
 */

function sum($a, $b) {
    return $a + $b;
}
function diff($a, $b) {
    return $a - $b;
}
function multiply($a, $b) {
    return $a * $b;
}
function div($a, $b) {
    return $a / $b;
}

/*
* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
 *  где $arg1, $arg2 – значения аргументов,
 *      $operation – строка с названием операции. В зависимости от переданного значения операции выполнить
 *      oдну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение
 *      (использовать switch).
 */

const MATH_SUM = 0;
const MATH_DIFF = 1;
const MATH_MULTIPLY = 2;
const MATH_DIV = 3;

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case MATH_SUM : return sum($arg1, $arg2);
        case MATH_DIFF : return diff($arg1, $arg2);
        case MATH_MULTIPLY : return multiply($arg1, $arg2);
        case MATH_DIV : return div($arg1, $arg2);
        default: return 'Math operation is not found!';
    }
}

echo BREAK_LINE.'sum: '.mathOperation(10, 2, MATH_SUM);
echo BREAK_LINE.'diff: '.mathOperation(10, 2, MATH_DIFF);
echo BREAK_LINE.'multiply: '.mathOperation(10, 2, MATH_MULTIPLY);
echo BREAK_LINE.'div: '.mathOperation(10, 2, MATH_DIV);

/*
 * 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="page">
        <div class="header"></div>
        <div class="body"></div>
        <div class="footer">
            Task5&copy;&nbsp;<?= date('Y') ?>
        </div>
    </div>

</body>
</html>


<?php
/*
 * 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
 */
    function power($val, $pow) {
        if ( $pow !== 1) {
            return $val * power( $val,$pow - 1);
        }
       return $val;
    }
    echo BREAK_LINE.'pow: '. power(5,5);

/*
 * 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
 *   22 часа 15 минут
 *   21 час 43 минуты
 */
function formatTime($time) {
    $time = explode(':', $time);
    $timeWords = [
      0 => 'час',
      1 => 'минут',
      2 => 'секунд'
    ];

    if ($time[0] == 21 || $time[0] == 1 ) {
        $hours = $time[0].SPACE.$timeWords[0];
    } elseif ($time[0] % 10 >= 2 && $time[0] % 10 <= 4) {
        $hours = $time[0].SPACE.$timeWords[0].'а';
    } else {
        $hours = $time[0].SPACE.$timeWords[0].'ов';
    }

    $str = $hours.SPACE;
    for ($i = 1; $i < count($time); $i++) {
        $notInUniqRange = ($time[$i] < 10 || $time[$i] > 20 );
        if ($time[$i] % 10 == 1 && $notInUniqRange) {
            $tmp = $time[$i].SPACE.$timeWords[$i].'а';
        } elseif ( $notInUniqRange && ($time[$i] % 10 >= 2 && $time[$i] % 10 <= 4)) {
            $tmp = $time[$i].SPACE.$timeWords[$i].'ы';
        } else {
            $tmp = $time[$i].SPACE.$timeWords[$i];
        }
        $str .= $tmp.SPACE;
    }
    return $str;
}

/* tests */
echo BREAK_LINE.formatTime('1:43:23');
echo BREAK_LINE.formatTime('21:52:42');
echo BREAK_LINE.formatTime('20:15:25');
echo BREAK_LINE.formatTime('0:11:32');
echo BREAK_LINE.formatTime('2:21:11');
echo BREAK_LINE.formatTime('22:15:11');
echo BREAK_LINE.formatTime('21:43:23');
?>
