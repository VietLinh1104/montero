<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');
    $importAuthen = new Import('authen');


    if(IsAuthen::isAuthen()){
        
        include(ROOT_PATH.ELEMENTS_PATH.'admin/NavbarIsAuthen.php');
        
    }else{
        include(ROOT_PATH.ELEMENTS_PATH.'admin/NavbarLogin.php');
    }
        

?>