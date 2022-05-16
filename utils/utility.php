<?php
function getPost($key, $slash = '\'') {
    $value = '';
    if(isset($_POST[$key])) {
        $value = $_POST[$key];

        $value = str_replace($slash, '\\'.$slash, $value);
    }

    return $value;
}

function getGet($key, $slash = '\'') {
    $value = '';
    if(isset($_GET[$key])) {
        $value = $_GET[$key];

        $value = str_replace($slash, '\\'.$slash, $value);
    }

    return $value;
}

function getMD5Pwd($pwd) {
    $encrypted = md5($pwd);

    $encrypted = md5($encrypted);

    return $encrypted;
}

function validateLogin() {
    if(isset($_SESSION['currentManager'])) {
        return $_SESSION['currentManager'];
    }

    $token = '';
    if(isset($_SESSION['token'])) {
        $token = $_COOKIE['token'];
        $query = "SELECT * FROM manager WHERE token = '$token'";
        $data = executeResult($query, true);

        if(!empty($data)) {
            $_SESSION['currentManager'] = $data;
            return $data;
        }
    }
    return null;
}