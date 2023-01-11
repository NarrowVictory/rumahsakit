<?php
require_once "../_config/proseslogin.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(!isset($_SESSION['user'])){
	echo "<script>window.location = '".base_url('auth/login.php')."';</script>";
}

if (isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
	$spesialis = trim(mysqli_real_escape_string($conn, $_POST['spesialis']));
	$alamat=trim(mysqli_real_escape_string($conn, $_POST['alamat']));
	$no_telp=trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
	mysqli_query($conn, "INSERT INTO tb_dokter(id_dokter, nama_dokter, spesialis, alamat, no_telp) VALUES ('$uuid', '$nama', '$spesialis', '$alamat', '$no_telp')") or die(mysqli_error($conn));
	echo "<script>
			alert('Sukses menambahkan data');
			window.location=\"data.php\";
		</script>";
	}else if (isset($_POST['edit'])) {
	$id=$_POST['id'];
	$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
	$spesialis = trim(mysqli_real_escape_string($conn, $_POST['spesialis']));
	$alamat=trim(mysqli_real_escape_string($conn, $_POST['alamat']));
	$no_telp=trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
	mysqli_query($conn, "UPDATE tb_dokter SET nama_dokter='$nama', spesialis='$spesialis',
		alamat='$alamat', no_telp='$no_telp' WHERE id_dokter='$id'") or die(mysqli_error($conn));
	echo "<script>
			alert('Sukses Mengedit data');
			window.location=\"data.php\";
		</script>";
	}
		

?>