<?php<?php $koneksi=new mysqli("localhost","root","","sales");
if (isset($_GET['namakendaraan'])) {
 $namadicari=$_GET['namakendaraan'];
 $sql="SELECT * FROM `barang` WHERE `nama kendaraan` = '".$namakendaraandicari."'";
 $q=$koneksi->query($sql);
 $r=$q->fetch_array();
 if (empty($r)) {
	 echo "<h2>rekord yang di cari tidak ditemukan !</h2>";
	 exit();
 }
 $sql2="delete from kendaraaan WHERE `nama kendaraan` = '".$namakendaraandicari."'";
 $q2=$koneksi->query($sql2);
 echo "
 <script>window.location.href='carikendaraan.php';</script>";
}
?>