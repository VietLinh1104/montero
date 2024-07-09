<?php

    // truyền file upload vào hàm uploadFile và gán id
    function uploadFile($fileType, $id){

        // kiểm tra xem nhận đc file chưa và có lỗi không
        if (isset($_FILES[$fileType]) && $_FILES[$fileType]["error"] == 0) {

            // lưu file vào biến filename
            $filename = $_FILES[$fileType]["name"];

            // lấy định dạng file (png , gif , jpeg)
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
    
            // tạo ra tên mới cho file => imgPath.png
            $newFilename =  $fileType.".". $fileExtension;
    
            // tạo đường link upload/id/
            $idPath = createDirectory("upload/".$id."/");
    
            // lưu file ảnh vào đường dẫn => upload/id/imgPath.png
            $success = move_uploaded_file($_FILES[$fileType]["tmp_name"], "upload/".$id."/". $newFilename);

            // vidu xuat ra string => "7175376b090c1d172c9acce5116533f3/imgPath.png"
            $filePath = $id."/". $newFilename;

            if ($success) {
                return $filePath;
            } else {
                // Xử lý khi di chuyển tệp tin không thành công
                echo "Di chuyển tệp tin không thành công.";
                return false;
            }
        }
    }
?>
