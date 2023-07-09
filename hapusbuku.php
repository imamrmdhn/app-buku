<?php $kodedihapus=$_GET['kodekategoribuku'];
if (isset($_GET['kodekategoribuku'])) {
 $sql="delete from kodekategori where kodekategoribuku='".$kodedihapus."'";
 $kon=mysqli_connect("localhost","root","","aplikasisampel1");
 $q=mysqli_query($kon,$sql);
 if ($q) {
	 echo "<script>alert('Rekord sudah dihapus !');</script>";
 } else {
	 echo "<script>alert('Rekord gagal dihapus !');</script>";
 }
 header('location:kodekategori.php');
}
?>