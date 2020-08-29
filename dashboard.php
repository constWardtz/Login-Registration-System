<?php
    include './database/database.php'; 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard By Edwardtz</title>
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
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Dashboard</a>
        </div>
    </div>  
    <?php
        if(isset($_SESSION['username'])){
            ?> 
    <!-- Jumbotron -->
    <div class="container mt-3">
        <div class="jumbotron bg-dark">
            <h1 class="jumbotron-heading text-center  text-light">Welcome, <b><?php echo ucfirst($_SESSION['username'])?></b></h1>
            <p class="lead text-center text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut laborum praesentium ducimus laboriosam quae nam dicta perspiciatis esse, tempora necessitatibus blanditiis eius exercitationem. Tempora impedit praesentium laboriosam, ex accusantium nesciunt!
            Quisquam labore blanditiis autem fuga adipisci iste esse aspernatur illum voluptatum, quidem provident maxime asperiores eveniet unde rem suscipit! Labore quis repudiandae consectetur assumenda repellat provident reiciendis at consequatur adipisci?
            Veritatis perferendis blanditiis sed excepturi, debitis eligendi exercitationem dignissimos repudiandae amet doloremque alias accusantium rerum quasi numquam aut saepe sequi repellendus asperiores eum quaerat deserunt eaque. Corporis fugit qui corrupti!
            Accusantium saepe eveniet quidem illum aspernatur officia eum doloremque laudantium suscipit optio quia doloribus quam esse neque enim culpa ab, quisquam mollitia nihil. Mollitia ratione commodi in earum quibusdam laboriosam?</p>
            
            <!-- Buttons -->
            <div class="container text-center">
                <a href="logout.php" class="btn btn-danger">Logout</a>
                <a href="#" class="btn btn-primary">Home</a>
            </div>
        </div> 
    </div>
    <?php
        }else{
            header("Location: login.php");
        }
    ?>
</body>
</html>