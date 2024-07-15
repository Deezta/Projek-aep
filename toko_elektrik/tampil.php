<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Toko</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 20px;
            background: rgb(134,154,255);
            background: radial-gradient(circle, rgba(134,154,255,1) 0%, rgba(3,0,255,1) 100%);
        }

        h1 {
            text-align: center;
        }

        .center {
            text-align: center;
            margin-bottom: 20px;
        }

        .center a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
        }

        .center a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #fff;
        }

        td a {
            text-decoration: none;
            color: #007bff;
        }

        td a:hover {
            text-decoration: underline;
        }

        .logout-link {
            float: right;
        }
    </style>
</head>
<body>
    <h1>DATA TOKO</h1>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="input_toko.php">Input Data</a> |
        <a href="#" onclick="logout(event)"">Logout</a>
    </div>
    <table border="1">
        <tr>
            <td>Kode Barang</td>
            <td>Nama Alat</td>
            <td>Jumlah</td>
            <td>Harga</td>
            <td colspan="2">Action</td>
        </tr>
        <?php
        include "koneksi.php";
        
        $query = mysqli_query($koneksi,"SELECT * FROM tabel_listrik");
        while($data = mysqli_fetch_array($query)){
            
            echo "<tr>";
            echo "<td>".$data['kode_barang']."</td>";
            echo "<td>".$data['nama_alat']."</td>";
            echo "<td>".$data['jumlah']."</td>";
            echo "<td>".$data['harga']."</td>";
            echo "<td><a href='edit_form.php ?kode_barang=".$data['kode_barang']."'>edit</a></td>";
            echo "<td><a href='delete.php ?kode_barang=".$data['kode_barang']."'>delete</a></td>";
            echo "</tr>";
        }
        ?>
        </table>
    
        <script>
            function logout(event) {
                event.preventDefault();
                if (confirm("Apakah Anda ingin logout?")) {
                    window.location.href = "logout.php";
                }
            }
        </script>
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