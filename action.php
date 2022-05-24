<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Action</title>
</head>
<body>

<?php
include "conect.php";

$nama = $_POST["NAMA_MHS"];
$nim = $_POST["NIM_MHS"];
$alamat = $_POST["ALAMAT_MHS"];

$sql = "INSERT INTO tbl_023 VALUES(null, '$nama','$nim','$alamat')";
$hasil =mysqli_query($koneksi, $sql);

if (!$hasil){
    echo "
    <div class='alert alert-danger'> Tambah data mahasiswa gagal <br/>";
    echo "<a href='data_mhsw.php'>Lihat data</a>";
}else{
    echo "
    <div class='alert alert-success'> Tambah data mahasiswa berhasil <br/>";
    echo "<a href='data_mhsw.php'>Lihat data</a>";
}
?>