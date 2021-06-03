<!DOCTYPE html>
<html lang="en">
<head>
  <title>input rekord kendaraan baru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>input rekord kendaraan baru</h2>
  <form method="post">
    <div class="form-group">
      <label for="nomormesinkendaraan">nomor mesin kendaraan:</label>
      <input type="text" class="form-control" id="nomormesinkendaraan" placeholder="ketik nomor mesin kendaraan" 
	  name="nomormesinkendaraan">
    </div>
    <div class="form-group">
      <label for="nomorrangkakendaraan">nomor rangka kendaraan:</label>
      <input type="text" class="form-control" id="nomorrangkakendaraan" placeholder="ketik nomor rangka kendaraan" 
	  name="nomorrangkakendaraan">
    </div>
	<div class="form-group">
      <label for="jeniskendaraan">jenis kendaraan:</label>
      <input type="text" class="form-control" id="jeniskendaraan" placeholder="ketik jenis kendaraan" 
	  name="jeniskendaraan">
    </div>
	<div class="form-group">
      <label for="namakendaraan">nama kendaraan:</label>
      <input type="text" class="form-control" id="namakendaraan" placeholder="ketik nama kendaraan" 
	  name="namakendaraan">
    </div>
	<div class="form-group">
      <label for="tanggalbuat">tanggal buat:</label>
      <input type="date" class="form-control" id="tanggalbuat" title="tentukan tanggal buat" 
	  name="tanggalbuat">
    </div>
	<div class="form-group">
      <label for="catatankondisikendaraan">catatan kondisi kendaraan:</label>
      <input type="text" class="form-control" id="catatankondisikendaraan" placeholder="ketik catatan kondisi kendaraan" 
	  name="catatankondisikendaraan">
    </div>
	<div class="form-group">
      <label for="nomorBPKB">nomor BPKB:</label>
      <input type="text" class="form-control" id="nomorBPKB" placeholder="ketik nomor BPKB" 
	  name="nomorBPKB">
    </div>
	<div class="form-group">
      <label for="nomorSTNK">nomor STNK:</label>
      <input type="text" class="form-control" id="nomorSTNK" placeholder="ketik nomor STNK" 
	  name="nomorSTNK">
    </div>
	<div class="form-group">
      <label for="statusSTNK">status STNK:</label>
      <input type="text" class="form-control" id="statusSTNK" placeholder="ketik status STNK" 
	  name="statusSTNK">
    <button type="submit" class="btn btn-primary" name="bsimpan">Submit</button>
  </form>
</div>
</body>
</html> 
<?php
if (isset($_POST['bsimpan'])) {
	$nomormesinkendaraan=$_POST['nomormesinkendaraan'];
	$nomorrangkakendaraan=$_POST['nomorrangkakendaraan'];
	$jeniskendaraan=$_POST['jeniskendaraan'];
	$namakendaraan=$_POST['namakendaraan'];
	$tanggalbuat=$_POST['tanggalbuat'];
	$catatankondisikendaraan=$_POST['catatankondisikendaraan'];
	$nomorBPKB=$_POST['nomorBPKB'];
	$nomorSTNK=$_POST['nomorSTNK'];
	$statusSTNK=$_POST['statusSTNK'];

	$koneksi=new mysqli("localhost","root","","sales");
	$sql="INSERT INTO `barang` (`nomor mesin kendaraan`, `nomor rangka kendaraan`, 
	`jenis kendaraan`, `nama kendaraan`, `tanggal buat`, `catatan kondisi kendaraan`, 
	`nomor BPKB`, `nomor STNK`, `status STNK`) VALUES ('".$nomormesinkendaraan."', '".$nomorrangkakendaraan."', '".$jeniskendaraan."',
	'".$namakendaraan."', '".$tanggalbuat."', '".$catatankondisikendaraan."', '".$nomorBPKB."', '".$nomorSTNK."', '".$statusSTNK."');";
	$q=$koneksi->query($sql);
	if ($q) {
	  echo "rekord barang sudah tersimpan !";
	} else {
	  echo "rekord barang gagal tersimpan !";
	}
 }
include ("daftarkendaraan.php");
?>