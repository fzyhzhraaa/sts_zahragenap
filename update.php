<?php
    require_once("koneksi.php");
    $id=$_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $merk = $_POST['merk'];
    $jumlah = $_POST['jumlah'];

    $sql2=update("barang",$kode,$id);
    if ($sql2) {
        header("location:list_notes.php");
    }
    
?>