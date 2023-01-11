<?php
//Default timeZone
date_default_timezone_set('Asia/Jakarta');
session_start();

include_once 'conn.php';

//Koneksi
$conn = mysqli_connect($conn['host'], $conn['user'], $conn['pass'], $conn['db']);
if(!$conn){
	echo "not";
}

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}else{

}

//Fungsi Base URL
function base_url($url = null){
	$base_url = "http://localhost/rumahsakit";
	if ($url!=null) {
		return $base_url."/".$url;
	}else{
		return $base_url;
	}
}

function tgl_indo ($tgl){
$tanggal = substr($tgl, 8, 2);
$bulan = substr($tgl, 5, 2);
$tahun = substr($tgl, 0, 4);
return $tanggal."/".$bulan."/".$tahun;
}

?>