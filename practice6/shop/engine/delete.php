<?php
require 'doFeedbackAction.php';

if (count($_GET) > 0 && isset($_GET['id']) && isset($_GET['product_id'])) {
    $params = [
        'product_id' => $_GET['product_id'],
        'id' => $_GET['id'],
    ];
    doFeedbackAction($params, ACTION_DELETE);
}
