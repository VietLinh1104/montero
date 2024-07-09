<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');
include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');

$produce = new Import('actor');
$authen = new Import('authen');

// kiểm tra xem có parameter ko
if(isset($_GET['id'])){

    // kiểm tra đăng nhập
    if(IsAuthen::isAuthen()){

        // lưu dữ liệu para vào $id
        $id = $_GET['id'];

        // nhận dữ liệu POST từ form edit
        $modelName = $_POST['modelName'];
        $brandName = $_POST['brandName'];
        $price = $_POST['price'];
        $imgPath = 'imgPath';

        // khởi tạo object rỗng
        $file = new Products();

        // set đường dẫn file mới
        $file->setFilePath($imgPath);

        // lấy ra đường dấn
        $filePathUpdate = $file->getFilePath();
    
        // lưu dữ liệu cần đẩy lên db vào array
        $data = array(
            'modelName' => $modelName,
            'brandName' => $brandName,
            'price' => $price,
            'filePath' => $filePathUpdate
        );
        
        // insert to database
        
        try {
            // khởi tạo db
            $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            // khai báo bảng
            $table = 'products';

            // update dữ liệu
            $dbHandler->updateData($table, $data,'id',$id);
    
            echo "<script>console.log('[Controller/editItem] sửa sản phẩm thành công!');</script>";
            $response = [
                'type' => 'success',
                'message' => 'sửa sản phẩm thành công!'        
            ];
            $url= PAGE_PATH.'admin/product/listproduct';
            alert($url, $response);
            
        } catch (PDOException $e) {
            echo "<script>console.log('[Controller/editItem] Lỗi khi sửa sản phẩm: " . $e->getMessage().");</script>";
            $response = [
                'type' => 'danger',
                'message' => 'Lỗi khi sửa sản phẩm: ' . $e->getMessage()        
            ];
            $url= PAGE_PATH.'admin/product/addproduct';
            alert($url, $response);
        }

    }


}


?>