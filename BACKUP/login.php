
<?php


if(isset($_POST['login_btn'])){
    echo 'Hello';

    $email = $_POST['u'];
    $password = $_POST['p'];


    echo $email;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="coollog.css">
</head>
<body>
<div class="container">
    <div class="img">
        <img src="Media/images/login.svg" alt="">
    </div>
    <div class="login-content">
        <form >
            <img src="Media/images/avatar.svg" alt="">
            <h2 class="title">Welcome</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <label>
                        <input type="text" name="u" placeholder="Username" />
                    </label>
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <label>
                        <input type="password" name="p" placeholder="Password" />
                    </label>
                </div>
            </div>
            <a href="#" name = "forgot">Forgot Password?</a>
            <input type="submit" class="btn" value="Login" name = "login_btn">
        </form>
    </div>
</div>
</body>
</html>