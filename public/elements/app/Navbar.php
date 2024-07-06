<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/montera/app/config/config.php'); 
?>

<nav class="navbar navbar-expand-lg fixed-top align-items-center" id="navbar-home">
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
                    <a class="nav-link text-white" href="<?php echo PAGE_PATH; ?>app/home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="" id="nav-item-aboutus">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo PAGE_PATH; ?>app/collection">COLLECTION</a>
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