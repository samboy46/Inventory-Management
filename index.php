<?php
include_once("./database/constants.php");
if (isset($_SESSION["userid"])){
    header("location:".DOMAIN."/dashboard.php");
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
    <link rel="stylesheet" type="text/css" href="./includes/style.css">
    <script type="text/javascript" rel="stylesheet" src="./js/main.js">
    </script>
</head>

<body>
    <div class="overlay">
        <div class="loader"></div>
    </div>
    <!--For the navigation bar(SPECZO)-->
        <?php  include_once("./templates/header.php");
     ?>
        <br /><br />

        <div class="container">
            <?php
           if (isset($_GET["msg"]) AND !empty($_GET["msg"])) {
              ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $_GET["msg"]; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php 
           }
        ?>
            <div class="card mx-auto" style="width: 18rem;">
                <img class="card-img-top mx-auto" style="width:60%;" src="./images/gokturk.png" alt="SPECZO">
                <div class="card-body">
                    <form id="form_login" onsubmit="return false">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="log_email" id="log_email" placeholder="Enter Email">
                            <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="log_password" id="log_password" placeholder="Enter Password">
                            <small id="p_error" class="form-text text-muted"></small>
                        </div>
                        <button type="submit" class="btn btn-primary " style="background-color:crimson; border-color:crimson "><i class="fa fa-lock">&nbsp;</i>Login</button>
                        <span><a href="register.php" style="color:crimson">Register</a></span>
                    </form>

                </div>
            </div>
        </div>
</body>

</html>
