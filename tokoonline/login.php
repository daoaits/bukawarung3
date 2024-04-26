<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username">
            <input type="password" name="pass" placeholder="password">
            <input type="submit" name="submit" value="login">
        </form>
        <?php 
        if(isset($_POST['submit'])){
            include 'db.php';
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
            if(mysqli_num_rows($cek) > 0){
                echo '<script>window.location="dashboard.php"</script>';
            }else{
                echo '<script>alert("username atau password salah")</script>';
            }
        }

        ?>
    </div>
</body>
</html>