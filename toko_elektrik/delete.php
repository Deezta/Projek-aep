<?php
include "koneksi.php";
$kode_barang = $_GET['kode_barang'];
 
$query = mysqli_query($koneksi, "DELETE FROM tabel_listrik where kode_barang='$kode_barang'");
 
if($query){
 header('location:tampil.php');
}else{
}
?>