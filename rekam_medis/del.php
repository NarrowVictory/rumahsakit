<?php
require_once "../_config/proseslogin.php";

mysqli_query($conn, "DELETE FROM tb_rekammedis WHERE id_rm='$_GET[id]'");
echo "<script>
			alert('Sukses Menghapus data');
			window.location=\"data.php\";
		</script>";
?>