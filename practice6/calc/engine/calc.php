<?php

const DOCUMENT_ROOT = DIRECTORY_SEPARATOR;

const OPERATION_SUM = '+';
const OPERATION_DIF = '-';
const OPERATION_MULTI = '*';
const OPERATION_DIV = '/';

require_once 'math.php';
$result = 0;
$numberA = 0;
$numberB = 0;

if ( count($_POST) > 0 && isset($_POST['num-a']) && isset($_POST['num-b']) && isset($_POST['operation']) ) {

    $numberA = $_POST['num-a'];
    $numberB = $_POST['num-b'];
    $operation = $_POST['operation'];

    if (is_numeric($numberA) && is_numeric($numberB)) {
        switch ($operation) {
            case OPERATION_SUM:
                $result = summ($numberA, $numberB);
                break;
            case OPERATION_DIF:
                $result = dif($numberA, $numberB);
                break;
            case OPERATION_MULTI:
                $result = myltiply($numberA, $numberB);
                break;
            case OPERATION_DIV:
                $result = div($numberA, $numberB);
                break;
        }
    }
}








