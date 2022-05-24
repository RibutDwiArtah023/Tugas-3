<?php
$host = 'localhost';
$user ='root';
$password ='';
$dbname ='dwi';

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "koneksi gagal";
}else{
    echo "";
}

?>