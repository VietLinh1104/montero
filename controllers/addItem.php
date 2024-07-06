<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');
include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');

$produce = new Import('actor');
$authen = new Import('authen');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(IsAuthen::isAuthen()){

        $modelName = $_POST['modelName'];
        $brandName = $_POST['brandName'];
        $price = $_POST['price'];
        $imgPath = 'imgPath';
    
        // Create item obj 
        $item = new Products($modelName, $brandName, $price, $imgPath);
        $data = $item->getArrayObject();
        
        // insert to database
        
        try {
            $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            $table = 'products';
            $dbHandler->insertData($table, $data);
    
            echo "<script>console.log('[Controller/addItem] Thêm sản phẩm thành công!');</script>";
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