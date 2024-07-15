<?php
include "koneksi.php";
session_start();

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tabel_user WHERE username='$user' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("location:tampil.php");
        exit();
    }else{
        echo "<script>alert('username atau Password Anda Salah. Silahkan coba lagi.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: rgb(134,154,255);
            background: radial-gradient(circle, rgba(134,154,255,1) 0%, rgba(3,0,255,1) 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            text-align: center;
            color: red;
            margin-top: 10px;
        }
    </style>
    </head>
<body>
  <form name="Desta" id="" action="" method="post">
      <h3>Welcome!</h3>
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" id="username" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" id="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Sign in</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>