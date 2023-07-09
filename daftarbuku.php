<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Kategori Buku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body onload="print()">
<div class="container mt-3">
<h2>Daftar Kategori Buku</h2>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Kategori Buku</th>
        <th>Jenis Buku</th>
        <th>Total Buku</th>
      </tr>
    </thead>
    <tbody>
<?php
 $kon=mysqli_connect("localhost","root","","aplikasisampel1");
 $sql="select * from kodekategori";
 $q=mysqli_query($kon,$sql);
 $r=mysqli_fetch_array($q);
 do {
?>
      <tr>
      <td><?php echo $r['kodekategoribuku'];?></td>
        <td><?php echo $r['jenisbuku'];?></td>
        <td>
		<?php
		 $sqlm="select count(kodebuku) as jumlah from tabelbuku where kodekategoribuku='".$r['kodekategoribuku']."'";
		 $qm=mysqli_query($kon,$sqlm);
		 $rm=mysqli_fetch_array($qm);
		 if (!empty($rm)) echo $rm['jumlah'];
		?>
		</td>
      </tr>
<?php
 } while ($r=mysqli_fetch_array($q));
?>
    </tbody>
</table>
</div>
</body>
</html>