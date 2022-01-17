<!DOCTYPE html>
<html>
<body>
<?php require './view/navbar.php'; ?>
<!-- Title Image -->
<div className="title-image">
    <img src="./view/pictures/title-picture.png" className="title-image" width="100%"/>
</div>

<!-- Sort Buttons -->
<div class="container pt-5">
    <div class="row mt-4">
        <form method="post">
            <button type="submit" name="sort" class="btn" value="asc" style="color: white">price low to high</button>
            <button type="submit" name="sort" class="btn" value="desc" style="color: white">price high to low</button>
        </form>
    </div>
</div>

<!-- Card -->
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-5">
            <div class="card h-100">
                <img src="view/pictures/cardimg-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card h-100">
                <img src="view/pictures/cardimg-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card h-100">
                <img src="view/pictures/cardimg-3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php require './view/footer.php'; ?>

</body>

</html>