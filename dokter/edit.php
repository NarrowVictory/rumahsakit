<?php
include_once('../_header.php');

?>

	<div class="box">
        <h1>Dokter</h1>
        <h4>
        	<small>Edit Data Dokter</small>
        	<div class="pull-right">
        		<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
        	</div>
    	</h4>

    	<div class="row">
    		<div class="col-lg-6 col-lf-offset-3">
                <?php
                $id = @$_GET['id'];
                $sql_dokter = mysqli_query($conn, "SELECT * FROM tb_dokter WHERE id_dokter = '$id'") or die(mysqli_error($conn));
                $data = mysqli_fetch_array($sql_dokter);

                ?>
    			<form action="proses.php" method="post" style="float: center">
    				<div class="form-group pull-center">
    					<label for="nama">Nama Dokter</label>
                        <input type="hidden" name="id" value="<?=$data['id_dokter']?>">
    					<input type="text" name="nama"
    					class="form-control" value="<?=$data['nama_dokter']?>" id="nama" required="" autofocus="">
    				</div>

                    <div class="form-group">
                        <label for="spesialis">Spesialis</label>
                        <input type="text" value="<?=$data['spesialis']?>" name="spesialis"
                        class="form-control" id="spesialis" required="">
                    </div>

    				<div class="form-group">
    					<label for="alamat">Alamat</label>
    					<textarea class="form-control" name="alamat" id="alamat" required=""><?=$data['alamat']?></textarea>
    				</div>
                    
                    <div class="form-group">
                        <label for="no_telp">No. Telpon</label>
                        <input type="number" value="<?=$data['no_telp']?>" name="no_telp"
                        class="form-control" id="no_telp" required="">
                    </div>

    				<div class="form-group pull-right">
    					<input type="submit" name="edit" value="Edit" class="btn btn-success">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

<?php
include_once('../_footer.php');
?>