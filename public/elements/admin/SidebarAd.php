<?php include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');
    $importAuthen = new Import('authen');

?>

<div id="sidebar" class="sidebar bg-white border-end">
    <nav class="navbar navbar-expand-lg navbar-white px-1 mb-2">
        <div class="container-fluid p-0">
            <a href="#" class="navbar-brand m-0 d-flex align-items-center">
                <img src="<?php echo MEDIA_PATH; ?>/logo-white.svg" style="width: 180px" alt="logo">
            </a> 
        </div>
        
    </nav>

    <label for="listGroup" class="fs-14 font-normal- font-family-poppins text-gray-light ms-1 mb-10px">Main Menu</label>

    <?php

        if(IsAuthen::isAuthen()){    
            $role = $_SESSION['roleUser'];
            switch ($role) {
                case "QL":
                    $list = array('Home'=>'home','Product Manager'=>'quanly/khoa/listkhoa', 'User Manager'=>'quanly/lop/listLop', 'Customer Order'=>'quanly/mon/listMon');
                  break;
                default:
                    $list = array('Home'=>'home');
              }

        }else{
            $list = array('Trang Chủ'=>'home');
        }

        foreach ($list as $value => $path) {
            echo'
                <div class="list-group list-group-flush" id="listGroup">
                    <a href="'.PAGE_PATH.'admin/'.$path.'" class="list-group-item  list-group-item-action px-10px mx-1">'.$value.'</a>
                </div>
            ';
        }

    ?>


    

</div>