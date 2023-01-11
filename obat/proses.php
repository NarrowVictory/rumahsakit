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
	$keterangan = trim(mysqli_real_escape_string($conn, $_POST['keterangan']));
	mysqli_query($conn, "INSERT INTO tb_obat(id_obat, nama_obat, ket_obat) VALUES ('$uuid', '$nama', '$keterangan')") or die(mysqli_error($conn));
	echo "<script>
			alert('Sukses menambahkan data');
			window.location=\"data.php\";
		</script>";
	}else if (isset($_POST['edit'])) {
		$id = $_POST['id'];
		$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
		$keterangan = trim(mysqli_real_escape_string($conn, $_POST['keterangan']));
		mysqli_query($conn, "UPDATE tb_obat SET nama_obat='$nama' , ket_obat='$keterangan' WHERE id_obat='$id'") or die(mysqli_error($conn));
		echo "<script>
				alert('Sukses Mengedit data');
				window.location=\"data.php\";
			</script>";
	}else{

	}

?>