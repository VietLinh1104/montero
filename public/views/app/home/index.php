<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/montera/app/config/config.php'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>MONTERO</title>
    <link rel="stylesheet" href="<?php echo STYLES_PATH?>sass.css">
    <link rel="icon" type="image/png" href="/favicon.png">
</head>
<body>

    
    <?php
        include(ROOT_PATH. ELEMENTS_PATH .'app/Navbar.php');
    ?>
    
    
    <!-- Container 1 -->
   
    <!-- Banner Text -->
    <div class="container-fluid " id="banner">
        <!-- <div class="navbar-placeholder"></div> -->
        <div class="row">
            <div class="position-relative p-0">

                <div class="col text-white  m-0 p-0 first-div">
                    <img src="<?php echo MEDIA_PATH; ?>list-banner/1.png" class="card-img-top custom-image" alt="...">
                    <div class="text-overlay">
                        <div class="text-banner transparent" id="text-banner">

                            <h1 class="font-family-condensed fs-48 font-bold ">GET YOUR DREAM CAR, <br>GET YOUR SOUL.</h1>
                            <button class="btn mt-2 btn-outline-light btn-outline-square border-width-3px ">LEARN MORE</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

    <div class="container-fruid p-3 bg-black"></div>

    <div class="bg-gray" id="view-aboutus">
        <div class="container-md px-7 py-5">
            <div class="row pb-4">
                <div class="col-7">
                    <h1 class= "font-family-condensed font-bold- text-white  fs-48">THE BEST WAY TO<br> INCREASE YOUR <br>VALUE.</h1>
                </div>
                <div class="col  d-flex flex-column">
                    <div class="row">
                        <p class=" font-family-condensed font-light- text-white fs-5">We help you describe yourself with slassy car the best way to increase your.</p >
                    </div>
                    <div class="row mt-auto">
                        <a href="#" class="font-family-roboto font-light- text-white fs-16">Learn More 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </a>         
                        
                    </div>
                    
                </div>
            </div>

            <div class="container-fruid d-flex justify-content-center" >


                <div class="row w-fit-content bg-gray-secondary py-4">
                    

                    <div class="col text-white p-0 border-right">
                        <div class="d-flex flex-column align-items-center gap-0 mx-6 ">
                          <h1 class="fs-64 font-family-condensed custom-h1 m-0 p-0">50+</h1>
                          <h1 class="fs-4 font-normal- m-up-10 custom-h1 m-0 p-0">Brand</h1>
                        </div>
                    </div>
                    <div class="col text-white p-0 border-right">
                        <div class="d-flex flex-column align-items-center gap-0 mx-6">
                          <h1 class="fs-64 font-family-condensed  custom-h1 m-0 p-0">750+</h1>
                          <h1 class="fs-4 font-normal- m-up-10 custom-h1 m-0 p-0">Sales</h1>
                        </div>
                    </div>
                    <div class="col text-white p-0 ">
                        <div class="d-flex flex-column align-items-center gap-0 mx-6">
                          <h1 class="fs-64 font-family-condensed  custom-h1 m-0 p-0">1000+</h1>
                          <h1 class="fs-4 font-normal- m-up-10 custom-h1 m-0 p-0">Client</h1>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>

    <div class="container-fruid bg-black py-4">
        <div class="container-md ">
            <div class="d-flex justify-content-center text-white">
                <h3 class="font-family-condensed " >OUR COLLECTION</h3>
            </div>
            <div class="d-flex justify-content-center text-white">
                <p class= "text-gray-light text-center m-0">It's time for you to increase value<br> with the best classy car at it's level</p>
            </div>
        </div>

        <div class="container-md d-flex flex-row justify-content-center">
           
            <div class="scrolling-wrapper p-2">

                <!-- Card Item -->
                <div class="card outline-square bg-gray me-2" style="width: 250px">
                    <img src="<?php echo MEDIA_PATH; ?>list-car/1.png" class="card-img-top outline-square" alt="...">
                    <div class="card-body text-white ">
                        <h6 class="card-title ">$600.000</h6>
                        <h6 class="card-text font-family-condensed text-gray-light  pb-1">TESLA MODEL S</h6>
                        <button onclick="location.href='<?php echo PAGE_PATH; ?>app/order'" class=" btn btn-dynamic outline-square font-family-poppins w-100">BUY NOW</button>
                        
                    </div>
                </div>
            
                

                <div class="card outline-square bg-gray me-2" style="width: 250px">
                    <img src="<?php echo MEDIA_PATH; ?>list-car/2.png" class="card-img-top outline-square" alt="...">
                    <div class="card-body text-white ">
                        <h6 class="card-title ">$560.000</h6>
                        <h6 class="card-text font-family-condensed text-gray-light  pb-1">KIA EV6</h6>
                        <button onclick="location.href='<?php echo PAGE_PATH; ?>app/order'" class=" btn btn-dynamic outline-square font-family-poppins w-100">BUY NOW</button>
                        
                    </div>
                </div>

                <div class="card outline-square bg-gray me-2" style="width: 250px">
                    <img src="<?php echo MEDIA_PATH; ?>list-car/3.png" class="card-img-top outline-square" alt="...">
                    <div class="card-body text-white ">
                        <h6 class="card-title ">$700.000</h6>
                        <h6 class="card-text font-family-condensed text-gray-light  pb-1">TAYCAN TURBO S</h6>
                        <button onclick="location.href='<?php echo PAGE_PATH; ?>app/order'" class=" btn btn-dynamic outline-square w-100">BUY NOW</button>
                        
                    </div>
                </div>

                <div class="card outline-square bg-gray " style="width: 250px">
                    <img src="<?php echo MEDIA_PATH; ?>list-car/1.png" class="card-img-top outline-square" alt="...">
                    <div class="card-body text-white ">
                        <h6 class="card-title ">$600.000</h6>
                        <h6 class="card-text font-family-condensed text-gray-light  pb-1">TESLA MODEL S</h6>
                        <button onclick="location.href='<?php echo PAGE_PATH; ?>app/order'" class=" btn btn-dynamic outline-square font-family-poppins w-100">BUY NOW</button>
                        
                    </div>
                </div>

                <!-- End Card Item -->

                
            </div>
            <!-- End Scroll Wrapper -->

        </div>  
        <!-- End Rowcard -->

        <div class="container-md d-flex justify-content-center">
            <button onclick="location.href='<?php echo PAGE_PATH; ?>app/collection'" class="btn btn-dynamic outline-square font-family-poppins px-2">SEE ALL CARS
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                </svg>
            </button>
        </div>

            
    </div>


    <?php 
        include(ROOT_PATH.ELEMENTS_PATH.'app/Footer.php')
    ?>

    
    
    <script src="../../../script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>