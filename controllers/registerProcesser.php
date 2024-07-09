<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
    $importAc = new Import('actor');
    $importAuthen = new Import('authen');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // nhận thông tin đăng ký từ form register gửi sang 
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
        $hashPassword = Hash::hash($password);

        // tạo object quan ly 
        $registerProcessing = new QuanLy($fullname, $username, $hashPassword, $email);
        $registerProcessing->addQuanLy();

        // hiển thị thông báo và quay về trang đăng nhập
        $response = [
            'type' => 'success',
            'message' => 'Đăng ký thành công !'        
        ];

        $url= PAGE_PATH.'admin/login';

        alert($url, $response);

        exit();
    }



?>