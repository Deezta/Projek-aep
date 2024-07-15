<?php
include "koneksi.php";
$kode_barang = $_POST['kode_barang'];
$nama_alat = $_POST['nama_alat'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
 
$simpan = mysqli_query($koneksi,"INSERT INTO tabel_listrik values(' $kode_barang','$nama_alat','$jumlah','$harga')");
 
if($simpan){
   header('location:tampil.php');
}else{
    echo "Data Gagal Tersimpan";
}
?>