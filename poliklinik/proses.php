<?php
require_once "../_config/proseslogin.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(!isset($_SESSION['user'])){
	echo "<script>window.location = '".base_url('auth/login.php')."';</script>";
}

if (isset($_POST['add'])) {
	$total = $_POST['total'];
	for ($i=1; $i <= $total ; $i++) { 
	$uuid = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($conn, $_POST['nama-'.$i]));
	$gedung = trim(mysqli_real_escape_string($conn, $_POST['gedung-'.$i]));

	$sql = mysqli_query($conn, "INSERT INTO tb_poli(id_poli, nama_poli, gedung) VALUES ('$uuid', '$nama', '$gedung')") or die(mysqli_error($conn));
	}

	if ($sql) {
	echo "<script>
			alert('Sukses menambahkan data');
			window.location=\"data.php\";
		</script>";	
	}else{
		echo "<script>
			alert('Gagal menambahkan data');
			window.location=\"generate.php\";
		</script>";
	}

	
	
	
	}else if (isset($_POST['edit'])) {
	for ($i=0; $i < count($_POST['id']); $i++) {
		$id = $_POST['id'][$i]; 
		$nama = $_POST['nama'][$i];
		$gedung = $_POST['gedung'][$i];

		$sql = mysqli_query($conn, "UPDATE tb_poli SET nama_poli='$nama' , gedung='$gedung' WHERE id_poli='$id'") or die(mysqli_error($conn));
		}
		if ($sql) {
	echo "<script>
			alert('Sukses Mengupdate data');
			window.location=\"data.php\";
		</script>";	
	}else{
		echo "<script>
			alert('Gagal Mengupdate data');
			window.location=\"generate.php\";
		</script>";
	}
	}

?>