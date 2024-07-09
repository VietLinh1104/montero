<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');
include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');

$produce = new Import('actor');
$authen = new Import('authen');

// kiểm tra xem có dữ liệu từ parameter không (?id={value})
if (isset($_GET['id'])) {

    // kiểm tra có đăng nhập hay chưa
    if(IsAuthen::isAuthen()){
        
        // lưu id parameter vào biến id
        $id = $_GET['id'];
    
        
        // insert to database
        
        try {
            // khởi tạo database
            $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            // khai báo bảng database
            $table = 'products';
            // sử dụng phương thức xóa với bảng trường dữ liệu và giá trị
            $dbHandler->deleteData($table,'id',$id);
    
            // hiên thị thông báo và chuyển sang trang danh sách sản phẩm
            echo "<script>console.log('[Controller/deleteItem] xóa sản phẩm thành công!');</script>";
            $response = [
                'type' => 'success',
                'message' => 'xóa sản phẩm thành công!'        
            ];
            $url= PAGE_PATH.'admin/product/listproduct';
            alert($url, $response);
            
        } catch (PDOException $e) {
            echo "<script>console.log('[Controller/deleteItem] Lỗi khi xóa sản phẩm: " . $e->getMessage().");</script>";
            $response = [
                'type' => 'danger',
                'message' => 'Lỗi khi xóa sản phẩm: ' . $e->getMessage()        
            ];
            $url= PAGE_PATH.'admin/product/addproduct';
            alert($url, $response);
        }

    }

}


?>