<?php

/// Функции связаны с гостевым пользователем
const MIN = 0;
const MAX = 9999;

function getRndId() {
    return rand(MIN, MAX);
}

/**
 * Если были добавленны товары в карзину, и пользователь решил залогинится, то мы сохраняем его карзину
 * @param $guestId
 * @param $userId
 * @param $connect
 */
function getGuestCart($guestId, $userId, $connect) {
    $query = sprintf( "UPDATE shop.cart SET user_id = %d, is_guest = 0 WHERE user_id = %d", $userId, $guestId );
    $result = mysqli_query($connect, $query);
    if (!$result){
        $safeUpdates = 'SET SQL_SAFE_UPDATES = 0';
        mysqli_query($connect, $safeUpdates);
        mysqli_query($connect, $query);
    }
}

