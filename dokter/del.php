<?php require_once "../_config/proseslogin.php"; ?>

<?php
if (!(isset($_POST['checked']))) {
    echo "<script>
            alert('Tidak ada Data yang dipilih');
            window.location=\"data.php\";
        </script>";
}else{
	foreach ($_POST['checked'] as $id) {
		$sql = mysqli_query($conn, "DELETE FROM tb_dokter WHERE id_dokter = '$id'") or die(mysqli_error($conn));
	}
	if ($sql) {
	echo "<script>
			alert('".count($_POST['checked'])." data berhasil dihapus');
			window.location=\"data.php\";
		</script>";	
	}else{
		echo "<script>
			alert('Gagal menghapus data');
			window.location=\"data.php\";
		</script>";
	}
}

?>