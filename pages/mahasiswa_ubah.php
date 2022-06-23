<?php
require_once 'koneksi.php';
$nim=$_GET['kode'];
$query='SELECT * FROM ms_200063 WHERE nim="'.$nim.'"';
$result=$con-> query($query);
if($result->num_rows == 0){
    ?>
    <script>
        alert('Maaf, data barang TIDAK DITEMUKAN');
        window.top.ion-location='admin.php?page=pelanggan';
    </script>
    <?php

}
$row = $result->fetch_assoc();
?>
<h1>Form Ubah Data mahasiswa</h1>
<hr/>
<form action="?page=mahasiswa&action=ubah" method="post">
    <div class="form-group">
        <label for="nim">NIM </label>
        <input type="text" value="<?=$row['nim']?>" name="nim" id="nim"class="form-control" placeholder="Ex. xx.xxx.xxxx">
        
    </div>
    <div class="form-group">
        <label for="nama">Nama </label>
        <input type="text" value="<?=$row['nama']?>" name="nama" id="nama"class="form-control" placeholder="nama mahasiswa">
        
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea rows=2 <?=$row['alamat']?> name="alamat" id="alamat"class="form-control" placeholder="Alamat Mahasiswa"><?=$row['alamat']?></textarea>
        
    </div>
    <div class="form-group">
        <label for="tempat_lahir">Tempat lahir</label>
        <input type="text" value="<?=$row['tempat_lahir']?>" name="tempat_lahir" id="tempat_lahir"class="form-control" >
        
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal lahir</label>
        <input type="date" value="<?=$row['tanggal_lahir']?>" name="tanggal_lahir" id="tanggal_lahir"class="form-control" >
        
    </div>
    <div class="form-group">
        <label >Jenis kelamin</label>
        <br>
        <div class="pretty p-default p-round">
            <input type="radio" name="jenis_kelamin" value="1" <?= $row['jenis_kelamin']=='1'?' checked ':'';?>>
            <div class="state p-primary-o">
                <label>laki-laki</label>
            </div>
        </div>

        <div class="pretty p-default p-round">
            <input type="radio" name="jenis_kelamin"value="0" <?= $row['jenis_kelamin']=='0'?' checked ':'';?>>
            <div class="state p-danger-o">
                <label>perempuan</label>
            </div>
        </div>
        
    </div>
    <div class="form-group">
    <div class="form-group">
    <label >Agama</label>
        <br>
        <select name="agama" id="agama" class="form-control">
        <option disabled selected >pilih agama</option>
            <option value="islam" <?= $row['agama']=='islam'?' selected ':'';?>>islam</option>
            <option value="katolik"<?= $row['agama']=='katolik'?' selected ':'';?>>katolik</option>
            <option value="kristen"<?= $row['agama']=='kristen'?' selected ':'';?>>kristen</option>
            <option value="hindu"<?= $row['agama']=='hindu'?' selected ':'';?>>hindu</option>
            <option value="budha"<?= $row['agama']=='budha'?' selected ':'';?>>budha</option>
            <option value="konghucu"<?= $row['agama']=='konghucu'?' selected ':'';?>>konghucu</option>
        </select>
    </div>
    <div class="form-group">
    <label >Status Sipil</label>
        <br>
        <select name="status_sipil" id="status_sipil" class="form-control">
        <option disabled selected >pilih Status</option>
            <option value="menikah"<?= $row['status_sipil']=='menikah'?' selected ':'';?>>menikah</option>
            <option value="belum menikah"<?= $row['status_sipil']=='belum menikah'?' selected ':'';?>>belum menikah</option>
            <option value="cerai hidup"<?= $row['status_sipil']=='cerai hidup'?' selected ':'';?>>cerai hidup</option>
            <option value="cerai mati"<?= $row['status_sipil']=='cerai mati'?' selected ':'';?>>cerai mati</option>
            
        </select>
    </div>
    
  
    <button type="submit" class="btn-primary btn mt-2 ">Simpan</button>



</form>