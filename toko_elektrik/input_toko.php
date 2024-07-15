<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Elektrik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: rgb(134,154,255);
            background: radial-gradient(circle, rgba(134,154,255,1) 0%, rgba(3,0,255,1) 100%);
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], input[type="submit"], input[type="reset"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>FORM INPUT TOKO</h1>
    <div style="text-align: center; margin-bottom: 20px;">
    <a href="tampil.php" onclick="logout(event)"">Cek Data</a>
    </div>
    <form name="Desta" action="simpan.php" method="post">
    Kode Barang : <input type="text" name="kode_barang" size="20" maxlength=""> <br>
    Nama Alat : <input type="text" name="nama_alat"> <br>
    Jumlah : <input type="text" name="jumlah"> <br>
    Harga : <input type="text" name="harga"> <br>
    <input type="submit" name="submit" value="SIMPAN">
    <input type="reset" name="reset" value="RESET">
    </form>
</body>
</html>
<?php
    } else {
    ?>
    <script>
        alert("silahkan login terlebih dahulu");
        window.location = "login.php";
    </script>
    <?php
    }
    ?>