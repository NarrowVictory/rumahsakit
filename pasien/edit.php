<?php
include_once('../_header.php');

?>

	<div class="box">
        <h1>Pasien</h1>
        <h4>
        	<small>Edit Data Pasien</small>
        	<div class="pull-right">
        		<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
        	</div>
    	</h4>

    	<div class="row">
    		<div class="col-lg-6 col-lf-offset-3">
    			<form action="proses.php" method="post" style="float: center" id="dokter">
                    <?php
                    $id = @$_GET['id'];
                    $sql_pasien = mysqli_query($conn, "SELECT * FROM tb_pasien WHERE id_pasien='$id'") or die(mysqli_error($conn));
                    $data = mysqli_fetch_array($sql_pasien);
                    ?>

                    <div class="form-group pull-center">
                        <input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">
                        <label for="identitas">Nomor Identitas</label>
                        <input type="text" name="identitas"
                        class="form-control" id="identitas" value="<?= $data['nomor_identitas']?>" required="" autofocus="">
                    </div>

    				<div class="form-group pull-center">
    					<label for="nama">Nama Pasien</label>
    					<input type="text" name="nama"
    					class="form-control" id="nama" value="<?php echo $data['nama_pasien'] ?>" required="">
    				</div>

                    <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="jk" id="jk" required value="L" <?= $data['jenis_kelamin'] == "L" ? "checked" : null ?>> Laki-Laki
                            </label>
    
                            <label class="radio-inline">
                                <input type="radio" name="jk" id="jk" value="P" required <?= $data['jenis_kelamin'] == "P" ? "checked" : null ?>> Perempuan
                            </label>
                        </div>
                    </div>

    				<div class="form-group">
    					<label for="alamat">Alamat</label>
    					<textarea class="form-control" name="alamat" id="alamat" required=""><?= $data['alamat']?></textarea>
    				</div>
                    
                    <div class="form-group">
                        <label for="no_telp">No. Telpon</label>
                        <input type="number" name="no_telp"
                        class="form-control" id="no_telp" value="<?= $data['no_telp']?>" required="">
                    </div>

    				<div class="form-group pull-right">
    					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

<?php
include_once('../_footer.php');
?>