<?php 
$kon=mysqli_connect("localhost","root","","aplikasisampel1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Kategori Buku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
 <div class="row">
  <h2 class="col-sm-4">Koreksi Kategori Buku</h2>
 </div> 
 <?php
 if (isset($_GET['kodekategoribuku'])) {
  $kodedikoreksi=$_GET['kodekategoribuku'];
  $sql="select * from kodekategori where kodekategoribuku='".$kodedikoreksi."'";
  $q=mysqli_query($kon,$sql);
  $r=mysqli_fetch_array($q);
  if (empty($r)) {
		echo '
		<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Tidak ada rekordnya!</strong> Tidak ada rekord yang sesuai dengan kriteria pencariannya !.
</div>
		';
		exit();
	}
 } //end jika isset kode prodi
 ?>
 <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="kodekategoribuku">Kode Kategori Buku:</label>
      <input type="text" class="form-control" id="kodekategoribuku" placeholder="Ketik kode kategorinya" name="kodekategoribuku" 
	  value="<?php echo $r['kodekategoribuku'];?>">
    </div>
    <div class="mb-3">
      <label for="jenisbuku">Jenis Buku:</label>
      <input type="text" class="form-control" id="jenisbuku" placeholder="Enter jenis buku" name="jenisbuku"
	  value="<?php echo $r['jenisbuku'];?>"
	  >
    </div>
   
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
	<button type="
  </form>
  <?php 
  if (isset($_POST['bSimpan'])) {
	$kodekategoribuku=$_POST['kodekategoribuku'];
    $jenisbuku=$_POST['jenisbuku'];
    $sql="update kodekategori set jenisbuku='".$namaprodi."' where kodekategoribuku='".$kodeprodi."'";
    $q=mysqli_query($kon,$sql);
    if ($q) {
     echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Sudah disimpan !</strong> Rekord yang dikoreksi sudah disimpan !.
</div>';
	} else {
	 echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Gagal disimpan !</strong> Rekord yang dikoreksi gagal disimpan !.
</div>';
	} 		
  } 
  ?>
</div>
</body>
</html>