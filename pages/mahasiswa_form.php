<h1>Form Data Mahasiswa</h1>
<hr/>
<form action="?page=mahasiswa&action=simpan" method="post">
    <div class="form-group">
        <label for="nim">NIM </label>
        <input type="text" required name="nim" id="nim"class="form-control" placeholder="Ex. xx.xxx.xxxx">
        
    </div>
    <div class="form-group">
        <label for="nama">Nama </label>
        <input type="text" required name="nama" id="nama"class="form-control" placeholder="nama mahasiswa">
        
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea rows=2 required name="alamat" id="alamat"class="form-control" placeholder="Alamat Mahasiswa"></textarea>
        
    </div>
    <div class="form-group">
        <label for="tempat_lahir">Tempat lahir</label>
        <input type="text" required name="tempat_lahir" id="tempat_lahir"class="form-control" >
        
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal lahir</label>
        <input type="date" required name="tanggal_lahir" id="tanggal_lahir"class="form-control" >
        
    </div>
    <div class="form-group">
        <label >Jenis kelamin</label>
        <br>
        <div class="pretty p-default p-round">
            <input type="radio" name="jenis_kelamin" value="1">
            <div class="state p-primary-o">
                <label>laki-laki</label>
            </div>
        </div>

        <div class="pretty p-default p-round">
            <input type="radio" name="jenis_kelamin"value="0">
            <div class="state p-danger-o">
                <label>perempuan</label>
            </div>
        </div>
        
    </div>
    
    <div class="form-group">
    <label >Agama</label>
        <br>
        <select name="agama" id="agama" class="form-control">
        <option disabled selected >pilih agama</option>
            <option value="islam">islam</option>
            <option value="katolik">katolik</option>
            <option value="kristen">kristen</option>
            <option value="hindu">hindu</option>
            <option value="budha">budha</option>
            <option value="konghucu">konghucu</option>
        </select>
    </div>
    <div class="form-group">
    <label >Status Sipil</label>
        <br>
        <select name="status_sipil" id="status_sipil" class="form-control">
        <option disabled selected >pilih Status</option>
            <option value="menikah">menikah</option>
            <option value="belum menikah">belum menikah</option>
            <option value="cerai hidup">cerai hidup</option>
            <option value="cerai mati">cerai mati</option>
            
        </select>
    </div>
    
  
    <button type="submit" class="btn-primary btn mt-2 ">Simpan</button>



</form>