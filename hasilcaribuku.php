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
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Kategori Buku</th>
        <th>Jenis Buku</th>
        <th>Aksi Rekord</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$kCari=$_POST['kCari'];
	$sqlcari="select * from kodekategori where kodekategoribuku like '%".$kCari."%' or jenisbuku like '%".$kCari."%'";
	$qcari=mysqli_query($kon,$sqlcari);
	$rcari=mysqli_fetch_array($qcari);
	if (empty($rcari)) {
		echo '
		<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Tidak ada rekordnya!</strong> Tidak ada rekord yang sesuai dengan kriteria pencariannya !.
</div>
		';
		exit();
	}
	do {	
	?>
      <tr>
        <td><?php echo $rcari['kodekategoribuku'];?></td>
        <td><?php echo $rcari['jenisbuku'];?></td>
        <td><a href="koreksibuku.php?kodekategoribuku=<?php echo $rcari['kodekategoribuku'];?>" target="frutama" class="btn btn-primary">Koreksi</a>
		<a href="hapusbuku.php?kodekategoribuku=<?php echo $rcari['kodekategoribuku'];?>" target="frutama" class="btn btn-danger" onclick="return confirm('Apakah akan dihapus ?')">Hapus</a></td>
      </tr>
	<?php
	} while($rcari=mysqli_fetch_array($qcari));
    ?>	
    </tbody>
 </table>
</div>

</body>
</html>