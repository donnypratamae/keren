<h2>DAFTAR MAHASISWA</h2>
<a href="?page=mahasiswa&action=form_tambah" class="btn btn-primary m-2"> <i class="fa fa-plus"></i> Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>nim</th>
            <th>Nama </th>
            <th>Alamat </th>
            <th>tempat lahir</th>
            <th>tanggal lahir</th>
            <th>jenis kelamin</th>
            <th>agama</th>
            <th>status sipil</th>
            <th colspan=2 class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require 'koneksi.php';
        $query="SELECT * FROM ms_200063";
        $result=$con->query($query);
        if($result==TRUE){
            while($row=$result->fetch_assoc())
            {
            ?>
            <tr>
                <td><?=$row['nim'];?></td>
                <td><?=$row['nama'];?></td>
                <td><?=$row['alamat'];?></td>
                <td><?=$row['tempat_lahir'];?></td>
                <td><?=date("d-m-Y", strtotime($row['tanggal_lahir']));?></td>
                <td><?=$row['jenis_kelamin']=='1'?'laki laki':'perempuan';?></td>
                <td><?=$row['agama'];?></td>
                <td><?=$row['status_sipil'];?></td>
                
                <td class="text-right"><a class="btn btn-success btn-sm" href="?page=mahasiswa&action=form_ubah&kode=<?=$row['nim'];?>" > <i class="fa fa-edit" aria-hidden="true"></i> Edit</a></td>
            <td class="text-center"><a href="#" class="btn btn-danger btn-sm icon-hapus" data-href="?page=mahasiswa&action=hapus&kode=<?=$row['nim'];?>" data-toggle="modal" data-target="#confirm-delete" data-mahasiswa="<?=$row['nama'];?>"><i class="fa fa-trash"></i> Hapus</a></td>
            </tr>
            <?php
            }
        }
            ?>
        
    </tbody>
</table>
<div class="modal fade "id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="mymodalLabel"aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                Konfirmasi Hapus Data Pelanggan
            </div>
            <div class="modal-body">
                Apakah Anda Yakin akan menghapus data <strong><label id="data-mahasiswa-hapus"></label></strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cencel</button>
                <a  class="btn btn-danger btn-hapus text-light">Delete</a>
            
            </div>
        </div>
    </div>
</div>
<script>
    $('.icon-hapus').on('click',function (e){
        $('#data-mahasiswa-hapus').text($(this).data('mahasiswa'));
    });
    $('#confirm-delete').on('show.bs.modal',function(e){
        $(this).find('.btn-hapus').attr('href',$(e.relatedTarget).data('href'));
    });
</script>