<?php include_once('../_header.php'); ?>

	<div class="box">
        <h1>Obat</h1>
        <h4>
        	<small>Data Poliklinik</small>
        	<div class="pull-right">
        		<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;Kembali</a>
        	</div>
    	</h4>

    	<div class="row">
    		<div class="col-lg-6 col-lg-offset-3">
    			<form action="add.php" method="post">
    				<div class="form-group">
    					<label for="count_add" name="count_add" id="count_add">
    						Banyaknya Record yang akan ditambah :
    					</label>
    					<input type="text" name="count_add" id="count_add" class="form-control" pattern="[0-9]+" maxlength="2">
    				</div>

    				<div class="form-group pull-right">
    					<input type="submit" name="generate" value="Generate"
    					class="btn btn-success">	
    				</div>
    			</form>
    		</div>
    	</div>

    </div>

<?php include_once('../_footer.php'); ?>