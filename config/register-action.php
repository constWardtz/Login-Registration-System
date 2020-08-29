 <?php
    include '../database/database.php';

if(isset($_POST['registerBtn'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $register = mysqli_query($database , "INSERT INTO user_form (firstname,lastname,username,email,password)VALUES('$firstname','$lastname','$username','$email','$password')");

    if($register){
        $_SESSION['username'] = $username;
        header("Location: ../registration.php?register=success");
    }else{
        error_reporting(E_ALL);
    }
}