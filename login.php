<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet"
        href="http://localhost/CSE-311-Airline-Reservation-System/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">

</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-inverse">
    <ul class="navbar-nav ml-aut">
      <li class="nav-item active">
        <a class="nav-link text-light" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="register.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="flight_costs.php">Flight Costs</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link text-light" href="#">Link</a>
      </li>
      <li class="nav-item text-light">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </nav>

  <div class="container">

  
    <center>
    <div class="header">
        <h2>Login</h2>
    </div>
    </center>
    
    <form method="post" action="login.php">

        
        
        <//?php include('errors.php'); ?>
        <div class="container">
            <form>
                <div class="form-group">
                    <div class="form-group">
                        <label style="margin-left:300px;">Username</label>
                        <center>
                        <input style="width:500px;" type="text"name="username" class="form-control" id="formGroupExampleInput" placeholder="Username">
                        </center>
                    </div>
                </div>
                <div class="form-group">
                    <label style="margin-left:300px;" for="exampleInputPassword1">Password</label>
                    <center> 
                    <input style="width:500px;" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </center>
                </div>
                <div style="margin-left:300px;">
                <button type="submit"  name="login_user" class="btn btn-primary">Submit</button>
             <p>Not Yet a Member? <a href="register.php">Sign Up</a></p>
             </div>
            </form>
        </div>

  </div>
        

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- 

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
 -->

<!------ Include the above in your HEAD tag ---------->

  
        <!-- <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>

        <p>Not Yet a Member? <a href="register.php">Sign Up</a></p>

    </form> -->

    <script src="http://localhost/CSE-311-Airline-Reservation-System/bootstrap-5.0.0-beta1-dist/js/"></script>
</body>

</html>