<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Update Data Mahasiswa</title>
</head>
<body>
<?php
include 'conect.php';
$id=$_GET['id'];
$sql = "SELECT * FROM tbl_023 where id_mhs=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}
?>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>
    <div class="w-50 mx-auto border p-3 mt-5">
    <a href="data_mhsw.php">Kembali ke home</a>
        <div class="card-header">
            <h2> FORM EDIT DATA MAHASISWA </h2>
        </div>
        <form method="POST" action="update.php">
            <input type="hidden" name="ID_MHS" value="<?php echo $row['ID_MHS']?>">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama_mhs" name="NAMA_MHS" value="<?php echo $row['NAMA_MHS']?>" class="form-control" placeholder="--masukkan nama mahasiswa--">

            <label for="nama">NIM Mahasiswa</label>
            <input type="text" id="nim_mhs" name="NIM_MHS" value="<?php echo $row['NIM_MHS']?>" class="form-control" placeholder="--masukkan nim mahasiswa--"> 

            <label for="nama">Alamat</label>
            <input type="text" id="alamat_mhs" name="ALAMAT_MHS" value="<?php echo $row['ALAMAT_MHS']?>" class="form-control" placeholder="--masukkan alamat--">

            <input class="btn btn-success mt-3" type="submit" value="Update">
        </form>  
    </div>

<?php }?>
</body>
</html>