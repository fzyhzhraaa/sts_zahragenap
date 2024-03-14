<?php
require_once("koneksi.php");
$kode_barang = $_POST['kode'];
$nama_barang = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$merk = $_POST['merk'];
$jumlah = $_POST['jumlah'];
$simpan = tambah_barang("INSERT INTO barang VALUES ('','$kode_barang', '$nama_barang', '$kategori', '$merk', '$jumlah')");

if ($simpan) {
    header("location:barang.php");
} else {
    echo "Gagal memasukan data baru";
}
?>