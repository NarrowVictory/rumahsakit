<?php
include_once('../_header.php');

?>

    <div class="box">
        <h1>Pasien</h1>
        <h4>
            <small>Tambah Data Pasien</small>
            <div class="pull-right">
                <a href="../_file/sample/Aplikasi Rumah Sakit.xlsx" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-download-alt"></i> Download Format Excel </a>
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
            </div>
        </h4>

        <div class="row">
            <div class="col-lg-6 col-lf-offset-3">
                <form action="proses.php" method="post" style="float: center" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Import</label>
                        <input type="file" name="file"
                        class="form-control" id="file" required="">
                    </div>

                    <div class="form-group pull-right">
                        <input type="submit" name="import" value="Import" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include_once('../_footer.php');
?>