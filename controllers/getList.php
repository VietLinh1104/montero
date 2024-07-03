<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
    $importAc = new Import('usecase');
    $importAuthen = new Import('authen');

    function getList($table){
        if(IsAuthen::isAuthen()){
            if($_SESSION['roleUser'] == 'QL'){
                $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
                $result = $dbHandler->getAllData($table);

                if (!empty($result)) {
                    foreach ($result as $row) {
                        $rowData = [];
                        foreach ($row as $column => $value) {
                            $rowData[$column] = $value;
                        }
                        $twoDimensionalArray[] = $rowData;
                    }

                    return  $twoDimensionalArray;
                }  
            }
        }

    }
?>