<?php
require_once "../_config/proseslogin.php";

mysqli_query($conn, "DELETE FROM tb_obat WHERE id_obat='$_GET[id]'");
echo "<script>
			alert('Sukses Menghapus data');
			window.location=\"data.php\";
		</script>";
?>