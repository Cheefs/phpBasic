<?php

/**
 * Функция редиректа
 * @param $location
 */
function location($location) {
    header("Location: $location");
    exit();
}

/**
 * Функция с особым поведение при переходе на страницу
 * @param null $message
 * @param bool $modal
 * @param bool $error
 * @param string $location
 */
function scenarioDone($message = null, $modal = false, $error = false, $location = 'index.php') {
    $_SESSION['modalShow'] = $modal;
    $_SESSION['isError'] = $error;
    $_SESSION['message'] = $message;
    header("Location: /{$location}");
    exit();
}