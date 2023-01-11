<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Dokter</h1>
        <h4>
        	<small>Data Dokter</small>
        	<div class="pull-right">
        		<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
        		<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Dokter</a>
        	</div>
    	</h4>
		
		<form method="POST" name="proses">
        <div class="table-responsive">            
			<table class="table table-striped table-bordered table-hover" id="dokter">
				<thead>
					<tr>
						<th class="text-center">
							<input type="checkbox" name="select-all" id="select-all"
							value="">
						</th>
						<th>No.</th>
						<th>Nama Dokter</th>
						<th>Spesialis</th>
						<th>Alamat</th>
						<th>No. Telp</th>
						<th>
							<i class="glyphicon glyphicon-cog"></i>
						</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$no = 1;
				
				$sql_poli = mysqli_query($conn, "SELECT * FROM tb_dokter") or die (mysqli_error($conn));
		
					while($data = mysqli_fetch_array($sql_poli)) { ?>
						<tr>
							<td class="text-center">
								<input type="checkbox" name="checked[]" class="check"
							value="<?=$data['id_dokter']; ?>">
							</td>
							<td><?=$no++; ?>.</td>
							<td><?=$data['nama_dokter']; ?></td>
							<td><?=$data['spesialis']; ?></td>
							<td><?=$data['alamat']; ?></td>
							<td><?=$data['no_telp']; ?></td>
							<td align="center">
								<a href="edit.php?id=<?=$data['id_dokter'];?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i>&nbsp;&nbsp;Edit</a>
							</td>
						</tr>
					<?php
					}
				 ?>
				</tbody>
			</table>
		</div>
		</form>

		<div class="box pull-left">
			<button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;Hapus</button>
		</div>
	</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#select-all').click(function(event) {   
    		if(this.checked) {
        		$(':checkbox').each(function() {
        			this.checked = true;                        
        		});
    		} else{
        		$(':checkbox').each(function() {
	            this.checked = false;                       
        });
    }
});

        $('.check').on('click', function() {
            if ($('.check:checked').length == $('.check').length) {
                $('#select-all').prop('checked', true)
            } else {
                $('#select-all').prop('checked', false)
            }
        })
    })

</script>

<script type="text/javascript">

    function hapus(){
    	var result = confirm("Want to delete?");
    	if (result==true){
    		document.proses.action = 'del.php';
    		document.proses.submit();		
    	}
    }

    $(document).ready( function () {
    $('#dokter').DataTable();
} );
</script>


<?php include_once('../_footer.php'); ?>