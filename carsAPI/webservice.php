<?php
/****************************************
*######## RESTful WEB SERVICE ##########*
*                                       *
* Client process the request VIA URL    *
* http://address.com/webservice.php?id=1*
* and gets the JSON result.             *
****************************************/

// Set Content-Type header to application/json
header("Content-Type", "application/json");

if (isset($_GET)) {
# if (!empty($_GET['id'])){
#   $id = $_GET['id'];...
#   ...
# }
    require_once("db_check.php");

    if (empty($data) ) {
        response(200, "Car not found");
    } else {
        response(200, "Car found", $name, $price, $picture);
    }
} else {
    response(400, "Invalid request");
}

function response($status, $status_message, ...$data)
{
    $keys = ["name", "price", "picture"];

    $response['status'] = $status;
    $response['status_message'] = $status_message;
    foreach ($data as $car) {
        for ($i = 0; $i < count($data); $i++) {
            $response[$keys[$i]] = $data[$i];
        }
    }
    $json_response = json_encode($response);

    echo $json_response;
}
