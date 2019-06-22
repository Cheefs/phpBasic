<?php

function summ ($a, $b) {
    return $a + $b;
}

function dif ($a, $b) {
    return $a - $b;
}

function myltiply ($a, $b) {
    return $a * $b;
}

function div ($a, $b) {
    if ($b != 0) return $a / $b;
    return 'Нельзя делить на ноль';
}