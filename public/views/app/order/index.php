<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/montera/app/config/config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Car Name | MONTERO</title>
    <link rel="stylesheet" href="<?php echo VIEW_PATH?>css/styles.css">
    <link rel="icon" type="image/png" href="/favicon.png">
</head>
<body>

    
    <nav class="navbar bg-black navbar-expand-lg fixed-top align-items-center" id="navbar-home">
        <div class="mx-4 container-fruid w-100 d-flex justify-content-between align-items-center">

            <!-- Logo -->
            <a href="#" class="navbar-brand m-0 d-flex align-items-center">
                <img src="<?php echo MEDIA_PATH; ?>logo/logo.svg" alt="Logo">
            </a> 
            <!-- Button toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar item -->
            <div class="collapse navbar-collapse justify-content-center m-0"  id="navbarNav">
                <ul class="navbar-nav">

                    <!-- nav item -->
                    <li class="nav-item  active">
                        <a class="nav-link text-white" href="<?php echo VIEW_PATH; ?>page/home/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="" id="nav-item-aboutus">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo VIEW_PATH; ?>page/collection">COLLECTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">FAQ</a>
                    </li>
                    <!-- end nav item -->

                </ul>
            </div>
            <!--  -->
            
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" stroke="white" stroke-width="0.2"  class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                </svg>
            </a>
            
            

        </div>
    </nav>
    
    <div class="navbar-placeholder"></div>


    <?php
        // Kiểm tra xem tham số 'image' đã được truyền hay chưa
        if(isset($_GET['id'])) {
            // Lấy giá trị của tham số 'image'
            $id = $_GET['id'];
            
            
            // Tạo đường dẫn đến hình ảnh
            $image_path = "/app/controllers/upload/{$id}";

        }
    ?>

    <!-- <source src="../../../controllers/upload/212eb627c6c9ffdc2e587244f2cc9e2a/image-item.png"> -->


    <div class="container-fruid d-flex">
        <div class="col-9 bg-white fixed-top navbar-placeholder-margin " style=" height: 90vh;">
            <img src="<?php echo $image_path?>" class=" fit-vertical" alt="...">
        </div>
        <div class="col-9 bg-white"></div>
        <div class="col p-1 d-flex flex-column align-items-center">
            <h1 class="font-family-poppins font-medium- pt-3 m-0">Model S</h1>
            <div class="row my-2 w-100">

                <div class="col  ">
                    <div class="d-flex flex-column align-items-center" style="margin-bottom: -5px;">
                        <div class="">

                            <span class="font-family-poppins font-medium- fs-28" style="margin-right: -3px;">300</span>
                            <span class="font-family-poppins font-medium-">mi</span>
                        </div>
                    </div>
                    <div class="d-flex  justify-content-center">
                        <span class="fs-14 text-gray-light">Range (est.)</span>
                    </div>
                </div>

                <div class="col  ">
                    <div class="d-flex flex-column align-items-center" style="margin-bottom: -5px;">
                        <div class="">

                            <span class="font-family-poppins font-medium- fs-28" style="margin-right: -3px;">130</span>
                            <span class="font-family-poppins font-medium-">mph</span>
                        </div>
                    </div>
                    <div class="d-flex  justify-content-center">
                        <span class="fs-14 text-gray-light">Top Speed</span>
                    </div>
                </div>

                <div class="col  ">
                    <div class="d-flex flex-column align-items-center" style="margin-bottom: -5px;">
                        <div class="">

                            <span class="font-family-poppins font-medium- fs-28" style="margin-right: -3px;">3.1</span>
                            <span class="font-family-poppins font-medium-">sec</span>
                        </div>
                    </div>
                    <div class="d-flex  justify-content-center">
                        <span class="fs-14 text-gray-light">0-60 mph</span>
                    </div>
                </div>
                
                
                
            </div>
        </div>
        
    </div>

    
    
    <script src="../../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>