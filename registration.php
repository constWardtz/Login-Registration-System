<?php
    include './database/database.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
    <!-- Alert / Notification -->
    <?php
        if(isset($_GET['register'])){
            if($_GET['register'] = 'success'){ ?>
                <div class="alert alert-success text-center" role="alert">Successfully Registered</div>
            <?php
            }
        }
    ?>
    <div class="container col-lg-3 text-light">
        <center><img src="./img/logo.png" width="170" height="170"></center>
        <h1 class="text-center">Registration</h1>
        <p class="text-center">Fill out correctly</p>
        <form action="./config/register-action.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Firstname:</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" required>
                    </div>
                    <div class="col">
                        <label>Lastname:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="registerBtn">Register</button>
                <p class="text-center mt-2">Already have an account ? Click <a href="login.php">Here</a></p>
            </div>
        </form>
    </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- For Alert -->
<script type="text/javascript">
    setTimeout(() => {
        document.querySelector(".alert").style.display="none";
    }, 3000);
</script>
</body>
</html>