<?php

header("Content-Type", "application/json");

if (isset($_GET)) {
    require_once("db_check.php");
    if (count($resultArr) == 0) {
        response(200, "No Records found");
    } else {
        response(200, "Cars found", $resultArr);
    }
} else {
    response(400, "Invalid request");
}

function response($status, $status_message, $data=null)
{
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;

    $json_response = json_encode($response);

    echo $json_response;
}
