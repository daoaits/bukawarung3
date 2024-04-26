<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Menjamin padding dan border tidak memengaruhi lebar elemen */
        }

        button {
            background-color: aqua;
            color: #fff;
            text-shadow: 1px 1px 1px black;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(76, 223, 223);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <hr>
        <p>kami menjaga kebijakan anda</p>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php
       include 'db.php';

       if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = $koneksi->query($sql);
        
        if($result->num_rows == 1) {
            header('location: dashboard.php');
            exit();
        }else{
            echo "<script>
            alert('login gagal coba periksa kembali username dan password anda');
            </script>";
        }
    }
        ?>
    </div>
</body>
</html>
