<?php
include_once('../_header.php');

?>

	<div class="box">
        <h1>Rekam Medis</h1>
        <h4>
        	<small>Tambah Data Rekam Medis</small>
        	<div class="pull-right">
        		<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
        	</div>
    	</h4>

    	<div class="row">
    		<div class="col-lg-6 col-lg-offset-3">
    			<form action="proses.php" method="post">

                    <div class="form-group">
                        <label for="pasien">Pasien</label>
                        <select name="pasien" id="pasien" class="form-control" required="">
                            <option value="">-- Pilih Pasien --</option>

                        <?php
                        $sql_pasien = mysqli_query($conn, "SELECT * FROM tb_pasien") or die(mysqli_error($conn));

                        while ($data=mysqli_fetch_array($sql_pasien)) { ?>
                            <option value="<?=$data['id_pasien']?>"><?=$data['nama_pasien']?></option>
                        <?php }
                        ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea class="form-control" name="keluhan" id="keluhan" required=""></textarea>
                    </div>

    				<div class="form-group">
                        <label for="dokter">Dokter</label>
                        <select name="dokter" id="dokter" class="form-control" required="">
                            <option value="">-- Pilih dokter --</option>

                        <?php
                        $sql_dokter = mysqli_query($conn, "SELECT * FROM tb_dokter") or die(mysqli_error($conn));

                        while ($data=mysqli_fetch_array($sql_dokter)) { ?>
                            <option value="<?=$data['id_dokter']?>"><?=$data['nama_dokter']?></option>
                        <?php }
                        ?>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="diagnosa">Diagnosa</label>
                        <textarea class="form-control" name="diagnosa" id="diagnosa" required=""></textarea>
                    </div>

                    <div class="form-group">
                        <label for="poli">Poliklinik</label>
                        <select name="poli" id="poli" class="form-control" required="">
                            <option value="">-- Pilih poli --</option>

                        <?php
                        $sql_poli = mysqli_query($conn, "SELECT * FROM tb_poli") or die(mysqli_error($conn));

                        while ($data=mysqli_fetch_array($sql_poli)) { ?>
                            <option value="<?=$data['id_poli']?>"><?=$data['nama_poli']?></option>
                        <?php }
                        ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="obat">Obat</label>
                        <select name="obat[]" multiple="" size="7" id="obat" class="form-control" required="">

                        <?php
                        $sql_obat = mysqli_query($conn, "SELECT * FROM tb_obat") or die(mysqli_error($conn));

                        while ($data=mysqli_fetch_array($sql_obat)) { ?>
                            <option value="<?=$data['id_obat']?>"><?=$data['nama_obat']?></option>
                        <?php }
                        ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tgl">Tanggal Periksa</label>
                        <input type="date" name="tgl"
                        class="form-control" id="tgl" value="<?= date('Y-m-d') ?>" required="">
                    </div>

    				<div class="form-group pull-right">
    					<input type="submit" name="add" value="Simpan" class="btn btn-success">
                        <input type="reset" name="reset" value="Reset" class="btn btn-default">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

    <script>
        CKEDITOR.replace( 'keluhan' );
    </script>

<?php
include_once('../_footer.php');
?>