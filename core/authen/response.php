<?php

function alert($url, $response){
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Gửi một thông báo lỗi
    $_SESSION['response'] = $response;

    header("Location: ".$url);
    exit();
}

?>