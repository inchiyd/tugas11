<!DOCTYPE html>
<html lang="en">
<head>
  <title>tabel kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php $koneksi=new mysqli("localhost","root","","sales");
$sql="SELECT * FROM `barang`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
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
      </tr>
	<?php } while ($r=$q->fetch_array());
	?>
    </tbody>
  </table>
</div>

</body>
</html>
