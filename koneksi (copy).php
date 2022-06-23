<?php
$hst='localhost';
$usr='root';
$pw='';
$db='uas200063';
$con= new mysqli($hst,$usr,$pw,$db);

if($con->connect_error){
    die("KONEKSI GAGAL: ".$con->connect_error);
}

?>