<!DOCTYPE html>
<html>
<?php require 'C:\xampp\htdocs\m426_project\view\header.php'; ?>
<!-- Navbar-->
<nav class="navbar navbar-light fixed-top">
    <div class="container-fluid">
        <img class="navbar-brand" src="./view/pictures/logo.png" height="50px" width="40px" </img>
        <button class="custom-toggler navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="../index.php" style="color: white">
                            <img src="view/pictures/home-icon.png" style="margin-right: 5px; margin-bottom: 5px"
                                 height="17px">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php" style="color: white">
                            <img src="view/pictures/furniture-icon.png" style="margin-right: 5px; margin-bottom: 5px"
                                 height="17px">Products</a>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: white">
                            <img src="view/pictures/telefon-icon.png" style="margin-right: 5px; margin-bottom: 5px"
                                 height="17px">Contact</a>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: white">
                            <img src="view/pictures/cart-icon.png" style="margin-right: 5px; margin-bottom: 5px"
                                 height="17px">Cart</a>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: white">
                            <img src="view/pictures/login-icon.png" style="margin-right: 5px; margin-bottom: 5px"
                                 height="17px">Login</a>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
</html>