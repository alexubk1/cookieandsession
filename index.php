<?php
session_start();    //session start
if(!isset($_SESSION['username']))     //if session not found redirect to homepage
{
    header('location:login.php');
}
echo "Welcome &nbsp;";
echo $_SESSION['username'];
?>
<body>
<?php

if (isset($_GET['add-to-cart'])) {
    if (!isset($_SESSION['add-to-cart'])) {
        $_SESSION['add-to-cart'] = array();
    }
    array_push($_SESSION['add-to-cart'], $_GET['add-to-cart']);
}
?>

<?php require 'inc/head.php'; ?>

<h2>Welcome to this amazing cooking shop</h2>
<a href="logout.php">logout</a>

<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <a  href="?add-to-cart=Pecan nuts" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <a  href="?add-to-cart=Choclate Chips" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <a  href="?add-to-cart=Choclate Cookie" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <select> </select>
                    <a  href="?add-to-cart=M M's© cookies" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<form name="input" action="index.php" method="get">
    <input type="text" name="name"/> <br/><br/>
    <input type="submit" value="Submit">
</form>

<?php require 'inc/foot.php'; ?>

</body>
</html>
