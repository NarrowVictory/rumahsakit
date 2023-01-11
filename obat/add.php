<?php
include_once('../_header.php');

?>

	<div class="box">
        <h1>Obat</h1>
        <h4>
        	<small>Tambah Data Obat</small>
        	<div class="pull-right">
        		<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
        	</div>
    	</h4>

    	<div class="row">
    		<div class="col-lg-6 col-lf-offset-3">
    			<form action="proses.php" method="post" style="float: center">
    				<div class="form-group">
    					<label for="nama">Nama Obat</label>
    					<input type="text" name="nama" placeholder="Nama Obat"
    					class="form-control" id="nama" required="" autofocus="">
    				</div>

    				<div class="form-group">
    					<label for="keterangan">Keterangan Obat</label>
    					<textarea class="form-control" name="keterangan" id="keterangan" required="" placeholder="Masukkan Keterangannya"></textarea>
    				</div>

    				<div class="form-group pull-right">
    					<input type="submit" name="add" value="Simpan" class="btn btn-success">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

<?php
include_once('../_footer.php');
?>