<?php

function checkValue($field) {
    return (!is_null($field) && trim($field)!== '');
}

function safe($data) {
    return htmlspecialchars(strip_tags($data));
}