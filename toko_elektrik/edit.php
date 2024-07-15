<?php
include "koneksi.php";
$kode_barang = $_POST['kode_barang'];
$nama_alat = $_POST['nama_alat'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
 
$query = mysqli_query($koneksi,"UPDATE tabel_listrik set nama_alat = '$nama_alat', jumlah = '$jumlah', harga = '$harga' where kode_barang = $kode_barang");
 
if($query){
    header("location:tampil.php");
}else{
 
}
?>