<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/montera/app/config/config.php'); 
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Collection | MONTERO</title>
    <link rel="stylesheet" href="<?php echo STYLES_PATH?>sass.css">
    <link rel="icon" type="image/png" href="/favicon.png">
</head>
<body>
    <?php
        include(ROOT_PATH. ELEMENTS_PATH .'app/Navbar.php');
    ?>
    
    <!-- Banner Text -->
    <div class="container-fluid " id="banner">
        <!-- <div class="navbar-placeholder"></div> -->
        <div class="row">
            <div class="position-relative p-0">

                <div class="col text-white  m-0 p-0 first-div">
                    <img src="<?php echo MEDIA_PATH; ?>list-banner/2.png" class="card-img-top custom-image" alt="...">
                    <div class="text-overlay">
                        <div class="text-banner transparent " id="text-banner">

                            <h1 class="font-family-condensed fs-48 font-bold- ">OUR COLLECTION</h1>
                            <p class= "text-white font-family-poppins m-0">It's time for you to increase value<br> with the best classy car at it's level</p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    <!-- Banner Text End-->

    <div class="container-fruid p-3 bg-black"></div>

    <!-- Row Card -->
    <div class="container-fruid py-4">
        <div class="container-md ">
            <div class="d-flex justify-content-center text-black">
                <h3 class="font-family-condensed font-black-" >OUR COLLECTION</h3>
            </div>
            <div class="d-flex justify-content-center text-white">
                <p class= "text-black font-family-poppins text-center m-0">It's time for you to increase value<br> with the best classy car at it's level.</p>
            </div>
        </div>

        <div class="container-md d-flex flex-row justify-content-center">
           
            <div class="d-flex flex-wrap row p-2 justify-content-center">
                <!-- <source src="../../../controllers/database/connDB.php"> -->

                <?php
                    include(ROOT_PATH. ELEMENTS_PATH.'app/CardCollection.php');
                ?>
               

                <!-- End Card Item -->

                
            </div>
            <!-- End Scroll Wrapper -->

        </div>  
        <!-- End Rowcard -->

        <div class="container-md d-flex justify-content-center">
            <button onclick="location.href='<?php echo PAGE_PATH.'app/home/index.php'?>'" class="btn btn-dynamic outline-square font-family-poppins px-2">BACK TO HOME
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                </svg>
            </button>
        </div>
    </div>
    <!-- Row Card -->

    <div class="container-fruid p-3 bg-black"></div>

    <?php 
        include(ROOT_PATH.ELEMENTS_PATH.'app/Footer.php')
    ?>

    
    
    <script src="<?php echo VIEW_PATH; ?>script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>