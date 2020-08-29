 <?php
    include '../database/database.php';
    session_start();

if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($database, "SELECT * FROM user_form WHERE username = '$username' AND password = '$password'");
    $row = mysqli_fetch_assoc($login);
    if($row >= 1){
        $_SESSION['username'] = $username;
        header("Location: ../dashboard.php");
    }else{
        header("Location: ../login.php?login=error");
    }
}