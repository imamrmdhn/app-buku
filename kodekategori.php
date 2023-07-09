<?php 
$kon=mysqli_connect("localhost","root","","aplikasisampel1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Kode Kategori Buku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container mt-3">
  <div class="row">
   <h2 class="col-sm-4">Kode Kategori</h2>
   <div class="col-sm-8">
   <form name="frmcari" method="post" class="input-group mb-8" target="frmhasil" action="hasilcaribuku.php">
   <input type="text" class="form-control" placeholder="Ketik kode atau jenis buku yang dicari" name="kCari" id="kCari">
   <button class="btn btn-success" type="submit" name="bCari">Go</button>
  </form>
   </div>
  </div> 
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="kodekategoribuku">Kode Kategori Buku:</label>
      <input type="text" class="form-control" id="kodekategoribuku" placeholder="Ketik kode kategory buku nya" name="kodekategoribuku">
    </div>
    <div class="mb-3">
      <label for="jenisbuku">Jenis Buku:</label>
      <input type="text" class="form-control" id="jenisbuku" placeholder="Enter jenis bukunya" name="jenisbuku">
    </div>
   
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
  </form>
  <iframe name="frmhasil" width="100%" height="400px"></iframe>
  <?php 
  if (isset($_POST['bSimpan'])) {
	  $kodekategoribuku=$_POST['kodekategoribuku'];
	  $jenisbuku=$_POST['jenisbuku'];
	  $sql="insert into kodekategori (kodekategoribuku,jenisbuku) values ('".$kodekategoribuku."','".$jenisbuku."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
</div>

</body>
</html>
