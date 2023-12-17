<?php

$host="localhost";
$user="id21685123_sekolah";
$password="Malik1234!";
$db="id21685123_sekolah";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>