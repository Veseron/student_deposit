<?php
$method = $_SERVER['REQUEST_METHOD'];

$reqData = getData($method);

function getData($method) {

    if ($method === 'GET') return $_GET;
    if ($method === 'POST') return $_POST;

    $data = array();
    $exploded = explode('&', file_get_contents('php://input'));
 
    foreach($exploded as $pair) {
        $item = explode('=', $pair);
        if (count($item) == 2) {
            $data[urldecode($item[0])] = urldecode($item[1]);
        }
    }
 
    return $data;
}


?>