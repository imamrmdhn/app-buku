<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pendataan Buku Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="beranda.php" target="frutama">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kodekategori.php" target="frutama">Kode Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tabelbuku.php" target="frutama">Tabel Buku</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="daftarbuku.php" target="frutama">Daftar Buku</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>

<div class="container-fluid mt-3">
<iframe name="frutama" src="beranda.php" width="100%" height="500px"></iframe>  
</div>

</body>
</html>


