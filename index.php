<!DOCTYPE html>
<html>
<body>
<?php require './view/navbar.php'; ?>
<?php include './Includes/db-connection.php'; ?>
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

<?php

$conn = connectDataBase();
$query = "SELECT * FROM furniture";
$result = mysqli_query($conn, $query); ?>

<!-- Card -->
<div class="container">
    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-4 mt-5">
                <div class="card h-100">
                    <?php echo '<img class="card-img-top" alt="Card image cap" src="' . $row['url'] . '"/>'; ?>
                  <!--  <img src="view/pictures/cardimg-1.png" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text">Price: CHF<?php echo $row['price']; ?></p>
                        <a href="#" class="btn btn-secondary">Add to cart</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<br>

<?php require './view/footer.php'; ?>

</body>

</html>