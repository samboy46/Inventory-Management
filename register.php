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
    <script type="text/javascript" src="./js/main.js"></script>
</head>

<body>
    <div class="overlay">
        <div class="loader"></div>
    </div>
    <?php
      //For the navigation bar(SPECZO)
      include_once("./templates/header.php");
     ?>
    <br /><br />
    <div class="container">
        <div class="card mx-auto" style="width:30rem;">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form id="register_form" onsubmit="return false" autocomplete="off">
                    <div class="form-group">
                        <label for="username">Full Name</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                         <small id="u_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                        <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else</small>
                    </div>
                    <div class="form-group">
                        <label for="password1">Password</label>
                        <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
                         <small id="p1_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="password1">Re-Enter Password</label>
                        <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
                         <small id="p2_error" class="form-text text-muted"></small>
                    </div>
                     <div class="form-group">
		            <label for="usertype">Usertype</label>
		            <select name="usertype" class="form-control" id="usertype">
		              <option value="">Choose User Type</option>
		              <option value="Admin">Admin</option>
		            </select>
		            <small id="t_error" class="form-text text-muted"></small>
		          </div>
                    <button type="submit" name="user_register" class="btn btn-primary" style="background-color:crimson; border-color:crimson " ><span class="fa fa-user"></span>&nbsp;Register</button>
                    <span><a href="index.php" style="color:crimson">Login</a></span>
                </form>
                <div class="card-footer text-muted"  >
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
