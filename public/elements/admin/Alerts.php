<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_SESSION['response'])){
        $res = $_SESSION['response'];

        echo'
            <div class="container mb-1 ">
                <!-- Bootstrap Alert with Close Button -->
                <div class="alert alert-'.$res['type'].' alert-dismissible fade show pe-1 d-flex justify-content-between align-items-center" role="alert">
                    <div>
                        <strong>'.ucwords($res['type']) .' !</strong> '.$res['message'].'
                    </div>
                    <button type="button" class="close btn p-0" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="text-'.$res['type'].' font-bold-" style="font-size: 1.5rem; line-height: 1; border-radius: 50%;">&times;</span>
                    </button>
                </div>
            </div>
        ';

        unset($_SESSION['response']);

    }
?>