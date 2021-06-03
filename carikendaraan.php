<!DOCTYPE html>
<html lang="en">
<head>
  <title>cari kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>cari kendaraan</h2>
  <p>ketik kata kunci nama kendaraan yang di cari:</p>
  <form method="POST">
    <div class="form-group">
      <label for="namadicari">Nama kendaraan atau kata kunci namanya:</label>
      <input type="text" class="form-control" id="namdicari" name="namadicari">
    </div>
    <button type="submit" class="btn btn-primary" name="bcari">cari kendaraan</button>
  </form>
</div>
<?php $koneksi=new mysqli("localhost","root","","sales");
if (isset($_POST['bcari'])) {
 $namadicari=$_POST['namadicari'];
 $sql="SELECT * FROM `barang` WHERE `nama kendaraan` LIKE '%".$namadicari."%'";
} else {
  $sql="SELECT * FROM `barang`";
}
 $q=$koneksi->query($sql);
 $r=$q->fetch_array();
 if (empty($r)) {
	 echo "<h2>rekord yang di cari tidak ditemukan !</h2>";
	 exit();
 }
?>
<div class="container">
  <h2>tabel kendaraan</h2>
  <p>daftar kendaraan yang telah tersimpan di database adalah:</p>            
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>nomor mesin kendaraan</th>
        <th>nomor rangka kendaraan</th>
        <th>jenis kendaraan</th>
		<th>nama kendaraan</th>
		<th>tanggal buat</th>
		<th>catatan kondisi kendaraan</th>
		<th>nomor BPKB</th>
		<th>nomor STNK</th>
		<th>status STNK</th>
		<th>koreksi</th>
		<th>hapus</th>
      </tr>
    </thead>
    <tbody>
	<?php do {
	?>
      <tr>
        <td><?php echo $r['nomor mesin kendaraan'];?></td>
        <td><?php echo $r['nomor rangka kendaraan'];?></td>
        <td><?php echo $r['jenis kendaraan'];?></td>
		<td><?php echo $r['nama kendaraan'];?></td>
		<td><?php echo $r['tanggal buat'];?></td>
		<td><?php echo $r['catatan kondisi kendaraan'];?></td>
		<td><?php echo $r['nomor BPKB'];?></td>
		<td><?php echo $r['nomor STNK'];?></td>
		<td><?php echo $r['status STNK'];?></td>
		<td><a href="koreksikendaraan.php?namakendaraan=<?php echo $r['nama kendaraan'];?>" class="btn
		btn-primary">update</a></td>
		<td><a href="hapuskendaraan.php?namakendaraan=<?php echo $r['nama kendaraan'];?>" class="btn
		btn-danger" onclick="retrun confirm('apakah yakin ingin menghapus kendaraan <?php echo $r['nama kendaraan'];?> ?')"
		>Delete</a></td>
      </tr>
	<?php } while ($r=$q->fetch_array());
	?>
    </tbody>
  </table>
</div>
</body>
</html>
