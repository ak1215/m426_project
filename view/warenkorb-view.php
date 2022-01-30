<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/stylesheet.css">
    <title>Cart</title>
</head>

<body>
    <?php require 'navbar.php'; ?>
    <div class="container" id="warenkorb-erster-container">
        <div class="row">
            <div class="col-sm-8">
                <div class="container" id="con">
                    <div class="row">
                        <div class="col-sm-3">
                            <div><img src="pictures/chairrr.jpg" alt="Chair"></div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                            <div class="warenkorb-items">
                                <h4>Chair</h4>
                            </div>
                            <div>Velvet, green<br>
                                80cm x 90cm</div>
                            <div class="warenkorb-buttons">
                            <a href="#"><button class="btn btn-secondary">1</button></a>
                            <a href="#"><button class="btn btn-secondary">Delete</button></a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="warenkorb-preis">CHF 90.00</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <h4>Order Summary</h4>
                    <div class="row">
                        <div class="col-sm-3">
                            Total delivery cost
                        </div>
                        <div class="col-sm-9">You can calculate your delivery/service costs in the next step</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <hr id="warenkorb-linie">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Subtotal</h5>
                        </div>
                        <div class="col-sm-6">
                            <h4>CHF 419,99</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="container" id="con">
                    <div class="row">
                        <div class="col-sm-3">
                            <div><img src="pictures/closet.PNG" alt="Closet"></div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                            <div class="warenkorb-items">
                                <h4>Closet<h4>
                            </div>
                            <div>Wood, clear<br>
                                200cm x 100cm</div>
                            <div class="warenkorb-buttons">
                                <a href="#" class="btn btn-secondary">1</a>
                                <a href="#" class="btn btn-secondary">Delete</a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="warenkorb-preis">CHF 299.00</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="container" id="con">
                        <div class="row">
                            <div class="col-sm-3">
                                <div><img src="pictures/lamp.PNG" alt="lamp"></div>
                            </div>
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-3">
                                <div class="warenkorb-items">
                                    <h4>Lamp</h4>
                                </div>
                                <div>Metal, black<br>
                                    30cm</div>
                                <div class="warenkorb-buttons">
                                    <a href="#" class="btn btn-secondary">1 </a>
                                    <a href="#" class="btn btn-secondary">Delete</a>
                                </div>
                            </div>
                            <div class="col-sm-3"> 
                                <div class="warenkorb-preis">CHF 30.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>

        <?php require 'footer.php'; ?>

</body>
</html>