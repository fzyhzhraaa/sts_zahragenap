<?php
  require_once("koneksi.php");
  $data=Editdata("user",$_GET['id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Insert Notes</title>
  </head>
  <body>
    <div class="container">
    <h1>Tambah Data Barang</h1>
    <?php while($brg = mysqli_fetch_array($data)): ?>
    <form action="proses_tambah_brg.php" method="post"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <input type="text" class="form-control" id="kode" aria-describedby="emailHelp" name="no_identitas" value="<?php echo $brg['no_identitas']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Barang</label>
    <input type="text" class="form-control" id="nama" name="nama_barang" name="nama" value="<?php echo $brg['nama']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kategori</label>
    <input type="text" class="form-control" id="username" name="merk" name="username" value="<?php echo $brg['username']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Merk</label>
    <input type="text" class="form-control" id="password" name="kategori" name="password" value="<?php echo $brg['password']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah</label>
    <input type="text" class="form-control" id="role" name="jumlah" name="role" value="<?php echo $brg['role']; ?>">
  </div>
  <button type="submit" name="simpan" class="btn btn-primary">Update</button>
</form>
<?php endwhile?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>