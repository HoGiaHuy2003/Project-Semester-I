<?php
require_once('config.php');

function execute($query) {
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function executeResult($query, $isSingle = false) {
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    $result = mysqli_query($conn, $query);

    if($isSingle) {
        $data = mysqli_fetch_array($result, 1);
    }
    else {
        $data = [];
        while (($row = mysqli_fetch_array($result, 1)) != null) {
            $data[] = $row;
        }
    }

    mysqli_close($conn);

    return $data;
}