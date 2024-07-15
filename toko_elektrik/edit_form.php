<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT FORM GURU</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: rgb(134,154,255);
            background: radial-gradient(circle, rgba(134,154,255,1) 0%, rgba(3,0,255,1) 100%);
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        form input[type="text"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            padding: 10px 20px; /* Padding top/bottom 10px, padding left/right 20px */
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .alert {
            background-color: #f44336;
            color: white;
            padding: 10px;
            text-align: center;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        .alert a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .alert a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>EDIT FORM GURU</h1>
    <form name="Desta" action="edit.php" method="post">
    <?php
        include "koneksi.php";
        $kode_barang = $_GET['kode_barang'];
        $query = mysqli_query($koneksi,"SELECT * FROM tabel_listrik where kode_barang = $kode_barang");
        while($data = mysqli_fetch_array($query)){
        
        ?>
        <input type="hidden" name="kode_barang" value="<?php echo $data['kode_barang']?>">
    
    Nama Alat : <input type="text" name="nama_alat" value="<?php echo $data['nama_alat'] ?>"> <br>
    Jumlah : <input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>"> <br>
    Harga : <input type="text" name="harga" value="<?php echo $data['harga'] ?>"> <br>
    <input type="submit" name="submit" value="SIMPAN">

        <?php
        }
        ?>
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