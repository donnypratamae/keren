<?php 
require_once 'koneksi.php';

$nim=$_GET['kode'];
$query= 'DELETE FROM ms_200063 WHERE nim="'.$nim.'"';
if($con->query($query)==TRUE){
    ?>
    <script>
    alert('Data Pelanggan Berhasil Dihapus');
    window.top.location='admin.php?page=pelanggan';
    </script>
<?php
}
else{
    ?>
    <script>
    alert('Penghapusan Data Gagal,Silahkan Ulangi Lagi');
    window.history.back();
    </script>
<?php
}
?>