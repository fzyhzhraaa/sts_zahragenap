<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sts_peminjaman');
$koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Gagal terhubung dengan database: " . mysqli_error($dbconnect));

function tampil_data($table_name){
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, "SELECT * from $table_name" );
    $rows=[];
    while($row = mysqli_fetch_assoc($hasil))
    {
        $rows[] = $row;
    }
    return $rows;
}
}

function tambah_barang($query)
{
    global $koneksi;
    $sql=mysqli_query($koneksi,$query);
    return $sql;
}

function Editdata($tablename,$id)
{
    global $koneksi;
    $hasil=mysqli_query($koneksi,"select * from $tablename where id='$id'");
    return $hasil;
}



