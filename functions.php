<?php

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function abort($code = 404) {
    http_response_code(404);

    require("view/$code.php");
    die();
}

function authorize($condition, $response) {
    if (!$condition) {
        http_response_code($response);
        require("view/$response.php");
        die();
    }
} 