<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Obat</h1>
        <h4>
        	<small>Data Poliklinik</small>
        	<div class="pull-right">
        		<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
        		<a href="generate.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Poliklinik</a>
        	</div>
    	</h4>
		
		<form method="POST" name="proses">
        <div class="table-responsive">            
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Poli</th>
						<th>Gedung</th>
						<th class="text-center">
							<input type="checkbox" name="select-all" id="select-all"
							value="">
						</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$no = 1;
				
				$sql_poli = mysqli_query($conn, "SELECT * FROM tb_poli ORDER BY nama_poli ASC") or die (mysqli_error($conn));
				if(mysqli_num_rows($sql_poli) > 0) {
					while($data = mysqli_fetch_array($sql_poli)) { ?>
						<tr>
							<td><?=$no++; ?>.</td>
							<td><?=$data['nama_poli']; ?></td>
							<td><?=$data['gedung']; ?></td>
							<td class="text-center">
								<input type="checkbox" name="checked[]" class="check"
							value="<?=$data['id_poli']; ?>">
							</td>
						</tr>
					<?php
					}
				} else {
					echo '<tr><td colspan="4" align="center">Data tidak ditemukan</td></tr>';
				} ?>
				</tbody>
			</table>
		</div>
		</form>

		<div class="box pull-right">
			<button class="btn btn-warning btn-sm" onclick="edit()"><i class="glyphicon glyphicon-edit" ></i>&nbsp;&nbsp;Edit</button>
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
<script src="../_assets/js/jquery.js"></script>

<script type="text/javascript">
	function edit(){
    	document.proses.action = 'edit.php';
    	document.proses.submit();
    }

    function hapus(){
    	var result = confirm("Want to delete?");
    	if (result==true){
    		document.proses.action = 'del.php';
    		document.proses.submit();		
    	}
    }
</script>

<?php include_once('../_footer.php'); ?>