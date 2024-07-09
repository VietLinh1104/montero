<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/montera/app/config/config.php'); 
include_once(ROOT_PATH.CORE_PATH.'MySQL.php');
new Import('crud');

// lấy dữ liệu từ database trong baảng products 
$result = getList('products', 'QL');


  if(!empty($result)){

    // sử dụng hàm for để in lần lượt danh sách các sản phẩm
      foreach ($result as $index => $row) {

        // các trường dữ liệu của sản phẩm
          $modelName = $row['modelName']; // tên sản phẩm
          $brandName = $row['brandName']; // tên thương hiệu
          $price = $row['price'];         // giá sản phẩm
          $filePath = $row['filePath'];   // đường dẫn ảnh
          $id = $row['id'];               // id sản phẩm

          echo '<div class="p-0 card outline-square bg-white-item mb-4 mx-1" onclick="location.href=\''.PAGE_PATH.'app/order?id='.$id.'\'" style="width: 250px">';
                echo '<img src="'.CONTROLLERS_PATH.'upload/'.$filePath.'" class="card-img-top outline-square" alt="...">';
                echo '<div class="card-body text-black">';
                    echo '<h6 class="card-text font-family-poppins font-semibold- mb-1 fs-16">'.$brandName.' - '.$modelName.'</h6>';
                    echo '<div class="d-flex align-items-center justify-content-between">';
                        echo '<h6 class="card-title fs-14 m-0 font-bold- text-gray-light">'.$price.'$</h6>';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="14.5" height="14.5" fill="currentColor" stroke="black" stroke-width="0.3" class="bi bi-plus-circle" viewBox="0 0 16 16">';
                            echo '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>';
                            echo '<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>';
                        echo '</svg>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';

      }

  }else{

  }
  
?>

