<html>
<head>
  <title>خۆ تۆمار کرن</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        









<div class="container text-center">    

<?php
require_once('database.php');

$id = $_GET['id'];

if(isset($_POST['edit'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$city = $_POST['city'];



$sql = "UPDATE accounts SET name = '$name', email = '$email', password = '$password', city = '$city' WHERE id = $id ";
if($connect->query($sql) === TRUE) {
  echo "ب سەرکەڤتیانە هاتە گوهورین";
} else {
  echo "نەهاتە هنارتن";
}

}


$sql = "SELECT * FROM accounts WHERE id = '$id' ";
$anjam = mysqli_query($connect, $sql);

        if(mysqli_num_rows($anjam) > 0) {
            while($accounts = mysqli_fetch_assoc($anjam)) {
?>


  <form class="form-inline text-center" method="POST">
      <h1>گوهورینا هەژمارێ</h2>
      <br>
    <input value="<?php echo $accounts['name'];  ?>" name="name" placeholder="ناڤێ دوو قۆلی...">
    <br><br>
    <input value="<?php echo $accounts['email'];  ?>" name="email"  placeholder="ئیمیلێ تە...">
    <br><br>
    <input value="<?php echo $accounts['password'];  ?>" name="password"  placeholder="ژمارا نهێنی...">
    <br><br>
    <input value="<?php echo $accounts['city'];  ?>" name="city"  placeholder="باژێر...">
    <br>
    <br>
    <input name="edit" type="submit"  value="گۆهورین">
  </form>

  <?php
            }
          }
  ?>
</div>



</body>
</html>