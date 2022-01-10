<!DOCTYPE html>
<html>

<body>
<?php require './view/header.php'; ?>
<!-- Title Image -->
<div className="title-image">
    <img src="./view/pictures/title-picture.png" className="title-image" width="100%"/>
</div>

<!-- Sort Buttons -->
<div class="container py-5">
    <div class="row mt-4">
        <form method="post">
            <button type="submit" name="sort" class="btn" value="asc">price low to high</button>
            <button type="submit" name="sort" class="btn" value="desc">price high to low</button>
        </form>
    </div>
</div>
<br>

<!-- Footer -->
<footer class="footer text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Aeki</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <p class="text-white">We provide the best Furniture service in Switzerland </p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">

                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Impressum</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <p class="text-white">Find our Infos in the Impressum</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Aeki. All rights reserved.
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</body>

</html>