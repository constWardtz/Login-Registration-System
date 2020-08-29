<?php
    include './database.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Costum CSS -->
    <style>
        body,html{
            background: url(./img/bg.jpg)no-repeat;
            background-size:cover; 
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body> 
    <div class="container mt-4 col-lg-3 text-light">
        <center><img src="./img/logo.png" width="200" height="200"></center>
        <h1 class="text-center">Login Here</h1>
        <p class="text-center">Fill out correctly</p>
        <form action="login-action.php" method="post"> 
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div> 
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="loginBtn">Login</button>
                <a href="registration.php" class="btn btn-dark btn-block mt-2">Register Here</a>
                <p class="text-center mt-3">Forgot your password ? Click <a href="#">Here</a></p>
            </div>
        </form>
    </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>