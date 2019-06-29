<?php

require 'doFeedbackAction.php';

if (count($_POST) > 0 && isset($_POST['user']) && isset($_POST['text']) && isset($_POST['product_id'])) {
   $id = $_POST['id']?? null;
    if ( !is_null($id) && trim($id) !== '' ) {
        $params = [
            'id' => $_POST['id'],
            'product_id' => $_POST['product_id'],
            'user' => $_POST['user'],
            'text' => $_POST['text']
        ];
        doFeedbackAction($params, ACTION_UPDATE);
    } else {
        $params = [
            'product_id' => $_POST['product_id'],
            'user' => $_POST['user'],
            'text' => $_POST['text']
        ];
        doFeedbackAction($params, ACTION_CREATE);
    }
}
