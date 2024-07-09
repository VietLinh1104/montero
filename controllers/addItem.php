<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');

// thêm database
include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');

$produce = new Import('actor');
$authen = new Import('authen');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // kiểm tra xem đăng nhập chưa
    if(IsAuthen::isAuthen()){

        // nhận dữ liệu từ post
        $modelName = $_POST['modelName'];
        $brandName = $_POST['brandName'];
        $price = $_POST['price'];
        $imgPath = 'imgPath';
    
        // tạo object sản phẩm 
        $item = new Products($modelName, $brandName, $price, $imgPath);

        // lấy dữ liệu từ object sản phẩm vào mảng data
        $data = $item->getArrayObject();
        
        // insert to database
        
        try {
            // khởi tạo database
            $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // khai báo tên bảng
            $table = 'products';

            // đẩy dữ liệu lên với bảng và dữ liệu 
            $dbHandler->insertData($table, $data);
    
            echo "<script>console.log('[Controller/addItem] Thêm sản phẩm thành công!');</script>";

            // truyền về thông báo cho người dùng và chuyển trang
            $response = [
                'type' => 'success',
                'message' => 'Thêm sản phẩm thành công!'        
            ];
            $url= PAGE_PATH.'admin/product/listproduct';

            alert($url, $response);
            
        } catch (PDOException $e) {
            echo "<script>console.log('[Controller/addItem] Lỗi khi thêm sản phẩm: " . $e->getMessage().");</script>";
            $response = [
                'type' => 'danger',
                'message' => 'Lỗi khi thêm sản phẩm: ' . $e->getMessage()        
            ];
            $url= PAGE_PATH.'admin/product/addproduct';
            alert($url, $response);
        }

    }


}


?>