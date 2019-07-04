<?php

const ACTION_CREATE = 0;
const ACTION_UPDATE = 1;
const ACTION_DELETE = 2;

require_once $_SERVER['DOCUMENT_ROOT'].'/conf/init.php';

function doFeedbackAction($params, $mode) {
    $query = null;
    switch ($mode) {
        case ACTION_CREATE :
            $query = insert($params);
            break;
        case ACTION_UPDATE:
            $query = update($params);
            break;
        case ACTION_DELETE:
            $query = delete($params['id']);
            break;
    }

    if ($query) {
        sendDbRequest($query, $params['product_id']);
    } else {
        echo 'Query Error';
    }
}

function insert($array) {
   return sprintf("INSERT INTO shop.feedback (text, user_name, product_id) VALUES (\"%s\", \"%s\",\"%s\")",
        $array['text'], $array['user'], $array['product_id']);
}

function update($array) {
    return sprintf("UPDATE shop.feedback SET text = \"%s\", user_name = \"%s\" WHERE id = {$array['id']}",
        $array['text'], $array['user']);
}

function delete($id) {
    return "DELETE FROM shop.feedback WHERE id = $id";
}

function sendDbRequest($query, $product_id) {
    $connect = dbConnect();
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location: /view.php?id={$product_id}&#comments");
        exit();
    } else {
        echo 'Request Error';
    }
}