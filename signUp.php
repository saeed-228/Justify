
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justify | Progress</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signUp.css">
</head>
<body>
    <?php require("classes.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div id="holding-avatar" class="container">
            <img src="avatar.webp" alt="">            
            </div>
        </div>
        <div class="row">
            <div id="card-1" class="container card">
            <h1 class="text-center mt-5" >Sign Up to Justify</h1>
            <div class="row">
            <div class="container">
                <form class="form-group col-6 offset-3 mt-2" action="" method="post">
                    <input type="text" class="form-control" name="username" value="" placeholder="Username" required> <br>
                    <input type="email" class="form-control" name="email" value="" placeholder="Email" required> <br>
                    <input type="password" class="form-control" name="password" value="" placeholder="Password" required> <br>
                    <input type="password" class="form-control" name="re_type_password" value="" placeholder="Re-type Password" required> <br>
                    <input type="submit" class="form-control btn btn-outline-primary" name="sign_up" value="Sign up"> <br>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <div id="card-2" class="card ">
                    <h5 class="text-center">Have an Account? &nbsp; | &nbsp; <a href="login.php">Let's Login</a></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <footer class="container text-center mt-4">
                <span>By Saeed &copy;2020  | Next Nerds</span>
            </footer>
        </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
                $initialUser = new User();
                $initialUser->username = $_POST['username'];
                $initialUser->email = $_POST['email'];
                $initialUser->password = trim($_POST['password']);
                $initialUser->reTypePassword = trim($_POST['re_type_password']);
                $initialUser->signUp = $_POST['sign_up'];
                echo $initialUser->Register();
?>