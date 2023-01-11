<?php
require_once "_config/proseslogin.php";
require "_assets/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])){
	echo "<script>window.location = '".base_url('auth/login.php')."';</script>";
} ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Rumah Sakit</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/simple-sidebar.css')?>" rel="stylesheet">
    <link href="<?=base_url('_assets/libs/DataTables/datatables.min.css')?>" rel="stylesheet">
    <style>
        .active{
            color: white !important;
            font-weight: bold;
        }
    </style>
</head>

<body>
 <script src="<?=base_url('_assets/js/jquery.js')?>"></script>
 <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
 <script src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>"></script>
  <script src="<?=base_url('_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js')?>"></script>
    <div id="wrapper">


        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Rumah Sakit
                    </a>
                </li>
                <?php
                $activePage = $_SERVER['PHP_SELF'];
                ?>
                <li>
                    <a class="<?= $activePage == '/rumahsakit/dashboard/index.php' ? "active" : "inactive" ?>" href="<?=base_url('dashboard')?>">Dashboard</a>
                </li>
                <li>
                    <a class="<?= $activePage == '/rumahsakit/pasien/data.php' ? "active" : "inactive" ?>" href="<?=base_url('pasien')?>">Data Pasien</a>
                </li>
                <li>
                    <a class="<?= $activePage == '/rumahsakit/dokter/data.php' ? "active" : "inactive" ?>" href="<?=base_url('dokter')?>">Data Dokter</a>
                </li>
                <li>
                    <a class="<?= $activePage == '/rumahsakit/poliklinik/data.php' ? "active" : "inactive" ?>" href="<?=base_url('poliklinik')?>">Data Poliklinik</a>
                </li>
                <li>
                    <a class="<?= $activePage == '/rumahsakit/obat/data.php' ? "active" : "inactive" ?>" href="<?=base_url('obat')?>">Data Obat</a>
                </li>
                <li>
                    <a class="<?= $activePage == '/rumahsakit/rekam_medis/data.php' ? "active" : "inactive" ?>" href="<?=base_url('rekam_medis')?>">Rekam Medis</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">