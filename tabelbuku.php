<?php 
$kon=mysqli_connect("localhost","root","","aplikasisampel1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Buku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Rekord Buku</h2>
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="kodebuku">Kode buku :</label>
      <input type="text" class="form-control" id="kodebuku" placeholder="Ketik kode buku-nya" name="kodebuku">
    </div>
    <div class="mb-3">
      <label for="judulbuku">Judul Buku:</label>
      <input type="text" class="form-control" id="judulbuku" placeholder="Enter judul bukunya" name="judulbuku">
    </div>
	<div class="mb-3">
      <label for="pengarang">Pengarang:</label>
      <input type="text" class="form-control" id="pengarang" placeholder="Enter nama pengarangnya" name="pengarang">
    </div>
	<div class="mb-3">
      <label for="tahunterbit">Tahun Terbit:</label>
      <input type="date" class="form-control" id="tahunterbit" placeholder="Enter tahun terbit buku" name="tahunterbit">
    </div>
	<div class="mb-3">
      <label for="penerbit">Penerbit:</label>
      <textarea title="Enter penerbit buku" name="penerbit" class="form-control">
	  </textarea>
    </div>
		<div class="mb-3">
      <label for="kodekategoribuku">Kode Kategori Buku:</label>
      <input type="text" class="form-control" id="kodekategoribuku" placeholder="Enter kode kategori buku" name="kodekategoribuku">
    </div>

    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
  </form>
  <?php 
  if (isset($_POST['bSimpan'])) {
	  $kodebuku=$_POST['kodebuku'];
	  $judulbuku=$_POST['judulbuku'];
	  $pengarang=$_POST['pengarang'];
	  $tahunterbit=$_POST['tahunterbit'];
	  $penerbit=$_POST['penerbit'];
    $kodekategoribuku=$_POST['kodekategoribuku'];
	  
	  $sql="insert into tabelbuku (kodebuku,judulbuku,pengarang,tahunterbit,penerbit,kodekategoribuku) values ('".$kodebuku."','".$judulbuku."','".$pengarang."','".$tahunterbit."','".$penerbit."','".$kodekategoribuku."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
</div>

</body>
</html>
