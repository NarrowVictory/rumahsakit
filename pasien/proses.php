<?php
require_once "../_config/proseslogin.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(!isset($_SESSION['user'])){
	echo "<script>window.location = '".base_url('auth/login.php')."';</script>";
}

if (isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$identitas = trim(mysqli_real_escape_string($conn, $_POST['identitas']));
	$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
	$jkel = trim(mysqli_real_escape_string($conn, $_POST['jk']));
	$alamat=trim(mysqli_real_escape_string($conn, $_POST['alamat']));
	$no_telp=trim(mysqli_real_escape_string($conn, $_POST['no_telp']));

	$check = mysqli_query($conn, "SELECT * FROM tb_pasien WHERE nomor_identitas='$identitas'");

	if (mysqli_num_rows($check)>0) {
		echo "<script>alert('Nomor Identitas sudah diinput'); window.location=\"add.php\"</script>";
	}else{
	mysqli_query($conn, "INSERT INTO tb_pasien(id_pasien, nomor_identitas, nama_pasien, jenis_kelamin, alamat, no_telp) VALUES ('$uuid', '$identitas', '$nama', '$jkel', '$alamat', '$no_telp')") or die(mysqli_error($conn));
	echo "<script>
			alert('Sukses menambahkan data');
			window.location=\"data.php\";
		</script>";
		}

	}else if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$identitas = trim(mysqli_real_escape_string($conn, $_POST['identitas']));
	$nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
	$jkel = trim(mysqli_real_escape_string($conn, $_POST['jk']));
	$alamat=trim(mysqli_real_escape_string($conn, $_POST['alamat']));
	$no_telp=trim(mysqli_real_escape_string($conn, $_POST['no_telp']));

	$check = mysqli_query($conn, "SELECT * FROM tb_pasien WHERE nomor_identitas='$identitas'");
	if (mysqli_num_rows($check)>0) {
		echo "<script>alert('Nomor Identitas sudah diinput'); window.location=\"edit.php?id=$id\"</script>";
	}else{
	$sql = mysqli_query($conn, "UPDATE tb_pasien SET nomor_identitas='$identitas', nama_pasien='$nama', jenis_kelamin='$jkel', alamat='$alamat', no_telp='$no_telp' WHERE id_pasien='$id'");

	if ($sql) {
		echo "<script>
			alert('Sukses Mengedit data');
			window.location=\"data.php\";
		</script>";
	}else{
		echo "<script>
			alert('Gagal Mengedit data');
			window.location=\"data.php\";
		</script>";
			}
		}
	}elseif (isset($_POST['import'])) {
		$file = $_FILES["file"]["name"];
		$ekstensi = explode(".", $file);
		$file_name = "file-".round(microtime(true)).".".end($ekstensi);
		$sumber = $_FILES["file"]["tmp_name"];
		$target_dir = "../_file/";
		$target_file = $target_dir.$file_name;
		$upload = move_uploaded_file($sumber, $target_file);

		$obj = PHPExcel_IOFactory::load($target_file);
		$all_data = $obj->getActiveSheet()->toArray(null, true, true, true);

		$sql = "INSERT INTO tb_pasien (id_pasien, nomor_identitas, nama_pasien, jenis_kelamin, alamat, no_telp) VALUES";
		for ($i=3; $i < count($all_data); $i++) { 
			$uuid = Uuid::uuid4()->toString();
			$no_id = $all_data[$i]['A'];
			$nama_pasien = $all_data[$i]['B'];
			$jkel = $all_data[$i]['C'];
			$alamat = $all_data[$i]['D'];
			$no_telp = $all_data[$i]['E'];

			$sql .= " ('$uuid', '$no_id', '$nama_pasien', '$jkel', '$alamat', '$no_telp'),";
		}
		$sql = substr($sql, 0, -1);
		mysqli_query($conn, $sql) or die(mysqli_error($conn));

		echo "<script>
			window.location=\"data.php\";
		</script>";

		unlink($target_file);
	}	

?>