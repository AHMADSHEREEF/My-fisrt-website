<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <style>
        body {
                margin: 0;
                padding: 0;
        }
        .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: rgb(50, 173, 171);
                font-size: 20px;
                padding-left: 20px; 
                padding-right: 20px;
                font-weight: 700;
                color: white;
                padding-bottom: 10px;
                padding-top: 10px;
        }
        .navbar1 {
                display: flex;
                justify-content: space-between;
                align-items: center;
        }

        .login {
                margin-right: 20px;
        }

        .navbar2 {
                display: flex;
                justify-content: space-between;
                align-items: center;
        }

        .share {
                margin-right: 20px;
                margin-left: 20px;
        }
        </style>
</head>
<body>
        <div class="navbar">
                <div class="navbar2">
                <a href="./products.php">دەستپێک</a>
                <a href="./add.php" class="share">پارڤەکرن</a>
                <a href="./users.php">بکارهێنەر</a>
                   
                </div>
               <div class="navbar1">
                <a href="./login.php" class="login">چوونا ژوور</a>
                <a href="./register.php">خوتومارکرن</a>
               </div>
        </div>
        

        <?php

        require_once('database.php');

        if(isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM accounts WHERE email = '$email' AND password = '$password'";
        $anjam = mysqli_query($connect, $sql);

        if(mysqli_num_rows($anjam) > 0) {
        session_start();
        $_SESSION['email'] = $email;
        echo "هاتییە تومارکرن";
        } else {
        echo "ئیمێل یان ژمارا نهینی خەلەتە";
        }

        }

        ?>


        <form method="POST">
                <h1>چوونا ژوور</h1>
                <input name="email" type="text"><br> <br>
                <input name="password" type="text"> <br> <br>
                <input name="login" type="submit" value="log in"> <br> <br>
        </form>
</body>
</html>