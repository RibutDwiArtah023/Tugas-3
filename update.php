<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update Data Mahasiswa</title>
</head>
<body>

<?php
include "conect.php";
$id = $_POST["ID_MHS"];
$nama = $_POST["NAMA_MHS"];
$nim = $_POST["NIM_MHS"];
$alamat = $_POST["ALAMAT_MHS"];

$sqli = "UPDATE tbl_023 SET NAMA_MHS = '$nama',NIM_MHS = '$nim',ALAMAT_MHS = '$alamat' WHERE ID_MHS = $id";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "
    <div class='alert alert-danger'> Data gagal di Update <br/>";
    echo "<a href='data_mhsw.php'>Lihat data</a>";
}else{
    echo "
    <div class='alert alert-success'> Data berhasil di Update <br/>";
    echo "<a href='data_mhsw.php'>Lihat data</a>";
}
?>