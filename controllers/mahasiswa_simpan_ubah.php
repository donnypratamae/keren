<?php
        require'koneksi.php';
        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tempat_lahir=$_POST['tempat_lahir'];
        $tanggal_lahir=$_POST['tanggal_lahir'];
        $jenis_kelamin=isset($_POST['jenis_kelamin'])?$_POST['jenis_kelamin']:'0';
        $agama=$_POST['agama'];
        $status_sipil=$_POST['status_sipil'];
    $query='UPDATE ms_200063 SET nim="'.$nim.'", alamat="'.$alamat.'", tempat_lahir="'.$tempat_lahir.'", tanggal_lahir="'.$tanggal_lahir.'",jenis_kelamin="'.$jenis_kelamin.'", agama="'.$agama.'", status_sipil="'.$status_sipil.'" WHERE nim="'.$nim.'"';
    if($con->query($query)==TRUE){
        ?>
        <script>
            alert('Perubaha Data Berhasil');
            window.top.location='admin.php?page=mahasiswa';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Perubahan data gagal:<?=$con->error;?>,silahkan ulangi lagi');
            window.history.back();
        </script>
        <?php
    }

?>