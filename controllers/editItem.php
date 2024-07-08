<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');
include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');

$produce = new Import('actor');
$authen = new Import('authen');

if(isset($_GET['id'])){
    if(IsAuthen::isAuthen()){
        $id = $_GET['id'];

        $modelName = $_POST['modelName'];
        $brandName = $_POST['brandName'];
        $price = $_POST['price'];
        $imgPath = 'imgPath';

        $file = new Products();
        $file->setFilePath($imgPath);
        $filePathUpdate = $file->getFilePath();
    
        // Create item obj 
        $data = array(
            'modelName' => $modelName,
            'brandName' => $brandName,
            'price' => $price,
            'filePath' => $filePathUpdate
        );
        
        // insert to database
        
        try {
            $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            $table = 'products';
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