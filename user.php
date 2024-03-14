<?php
    require_once('koneksi.php');
    $user=tampil_data('user');
    $nomor=0;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>USER</title>
  </head>
  <body>
   
<div class="container">
<h1>USER</h1>
<a href="tambah_user.php" class="btn byn-primary">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">no_identitas</th>
      <th scope="col">nama</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">role</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($user as $data) { ?>
    <?php $nomor++; ?>
    <tr>
      <th scope="row"><?php echo $nomor; ?></th>
      <td><?php echo $data['no_identitas']; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['username']; ?></td>
      <td><?php echo $data['password']; ?></td>
      <td><?php echo $data['role']; ?></td>
      <td><?php echo "<a href='edit_user.php?id=$data[id]'><button class='btn btn-warning'>Edit</button></a> <a href='javascript:hapusData(".$data['id'].")'><button class='btn btn-danger'>Hapus</button></a>"; ?></td>

    </tr>
    <?php } ?>
  </tbody>
</table>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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