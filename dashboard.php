<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
    header("location:".DOMAIN."/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SPECZO</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>

<body>

    <?php
      //For the navigation bar(SPECZO)
      include_once("./templates/header.php");
     ?>
    <br /><br />

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mx-auto" style=>
                    <img src="./images/user.png" class="card-img-top mx-auto" style="width:60%;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-check-square">&nbsp;</i>Profile Info</h5>
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>London South Bank University</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="jumbotron" style="width:100%;height:100%;">
                    <h1>Welcome Admin</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <iframe src="http://free.timeanddate.com/clock/i75ty8fm/n136/szw160/szh160/hocf00/hbw0/hfcc00/cf100/hnca32/fan3/fas20/facfff/fdi86/mqcfff/mqs2/mql3/mqw4/mqd70/mhcfff/mhs2/mhl3/mhw4/mhd70/mmv0/hhcfff/hhs2/hmcfff/hms2/hsv0" frameborder="0" width="160" height="160"></iframe>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">New Orders</h5>
                                    <p class="card-text">Click to check Invoices and Create New Orders</p>
                                    <a href="new_order.php" class="btn btn-primary" style="background-color:crimson; border-color:crimson"><i class="fa fa-shopping-cart">&nbsp;</i>New Orders</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Categories</h4>
                        <p class="card-text">Click to Manage all the categories and you can add new Parent and Sub categories</p>
                        <a href="#" data-toggle="modal" data-target="#form_category"  class="btn btn-primary" style="background-color:crimson; border-color:crimson"><i class="fa fa-plus">&nbsp;</i>Add </a>
                        <a href="manage_categories.php" class="btn btn-primary" style="background-color:crimson; border-color:crimson"><i class="fa fa-plus">&nbsp;</i>Manage </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Brands</h4>
                        <p class="card-text">Click to Add New Brands and Manage Brands</p>
                        <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary" style="background-color:crimson; border-color:crimson"><i class="fa fa-plus">&nbsp;</i>Add </a>
                        <a href="manage_brand.php" class="btn btn-primary" style="background-color:crimson; border-color:crimson"><i class="fa fa-plus">&nbsp;</i>Manage </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Products</h4>
                        <p class="card-text">Manage your products and add new products</p>
                        <a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary" style="background-color:crimson; border-color:crimson"><i class="fa fa-plus">&nbsp;</i>Add </a>
                        <a href="manage_product.php" class="btn btn-primary" style="background-color:crimson; border-color:crimson"><i class="fa fa-plus">&nbsp;</i>Manage </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    //FOR THE CATEGORY SECTION
    include_once("./templates/category.php")
    ?>
    <?php
    //FOR THE BRAND SECTION    
    include_once("./templates/brand.php")
    ?>
    <?php
    //FOR THE PRODUCTS SECTION
    include_once("./templates/products.php")
    ?>




</body>

</html>
